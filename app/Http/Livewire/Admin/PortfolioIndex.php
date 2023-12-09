<?php

namespace App\Http\Livewire\Admin;

use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class PortfolioIndex extends Component
{
    use WithPagination;

    public $search;

    // 'date',//date
    // 'title',//string
    // 'photo',//file
    // 'body',// text area
    // 'view',//integer

    protected $listeners=[
        'FixHapusPortfolio'=>'hapusPortfolio',
    ];

    public function render()
    {
        $data=Portfolio::where('judul', 'like', '%'.$this->search.'%')->orderBy('created_at', 'desc');

        return view('livewire.admin.portfolio-index', [
            'isiTabel' => $data->paginate(30),
        ])
        ->layout('layouts.admin.app');
    }

    public function hapusPortfolio($id)
    {
        $p=Portfolio::find($id);
        // hapus File
        foreach ($p->gambar as $key => $value) {
            Storage::disk('__gambar')->delete($value->getRawOriginal('path'));
        }
        Storage::disk('__cover')->delete($p->getRawOriginal('cover'));
        $p->delete();
        return $this->emit('swalDeleted');
    }
}
