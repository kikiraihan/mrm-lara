<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gambar;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class PortfolioDetail extends Component
{
    use WithPagination;

    public $idTo;

    protected $listeners=[
        'FixHapusGambar'=>'hapusGambar',
    ];

    public function mount($id)
    {
        $this->idTo = $id;
    }

    public function render()
    {
        $p=Portfolio::with([
            'gambar',
        ])->find($this->idTo);

        return view('livewire.admin.portfolio-detail',[
            'prt'=>$p,
            'gambar'=>$p->gambar()->paginate(10),
        ]);
    }

    public function hapusGambar($id)
    {   
        $img=Gambar::find($id);
        //hapus gambar 
        Storage::disk('__gambar')->delete($img->getRawOriginal('path'));
        $img->delete();
        return $this->emit('swalDeleted');
    }
}
