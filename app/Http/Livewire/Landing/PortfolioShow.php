<?php

namespace App\Http\Livewire\Landing;

use App\Models\Portfolio;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class PortfolioShow extends Component
{
    public $idTo;

    //listener
    protected $listeners = ['trigerPortdetailGantiBahasa'=>'gantiBahasa'];
    public function gantiBahasa($bahasa)
    {
        App::setLocale($bahasa);
    }

    public function mount($id)
    {
        $this->idTo = $id;
        App::setLocale('id');
    }

    public function render()
    {
        return view('livewire.landing.portfolio-show',[
            'data'=>Portfolio::with('gambar')->find($this->idTo),
        ])->layout('layouts.landing.app');;
    }
}
