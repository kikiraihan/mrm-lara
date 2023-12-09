<?php

namespace App\Http\Livewire\Landing;

use App\Models\Portfolio as ModelsPortfolio;
use Illuminate\Support\Facades\App;
use Livewire\Component;
use Livewire\WithPagination;

class Portfolio extends Component
{
    use WithPagination;
    public $search;
    public $kategori;

    //listener
    protected $listeners = ['trigerPortGantiBahasa'=>'gantiBahasa'];
    public function gantiBahasa($bahasa)
    {
        App::setLocale($bahasa);
    }

    public function getBaru()
    {
        $data=ModelsPortfolio::where('judul', 'like', '%'.$this->search.'%')
        ->where('kategori', 'like', '%'.$this->kategori.'%')
        ->orderBy('created_at', 'desc');

        return $data->paginate(12);
    }

    public function render()
    {

        return view('livewire.landing.portfolio',[
            'isiTabel' => $this->getBaru(),
        ])->layout('layouts.landing.app');;
    }

    public function pilihKategori($value){
        $this->kategori=$value;
        $this->render();
    }
}
