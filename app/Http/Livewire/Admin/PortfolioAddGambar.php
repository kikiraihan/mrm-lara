<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gambar;
use Livewire\Component;
use Livewire\WithFileUploads;

class PortfolioAddGambar extends Component
{
    use WithFileUploads;
    public $idPort;

    // public Image $img;
    public $image;

    public function rules()
    {
        return [
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|'.env('IMAGE_UPLOAD_MAX','max:500').'|dimensions:max_width=1920,max_height=1080',//file
        ];
    }

    public function mount($id)
    {
        $this->idPort=$id;
    }

    public function save()
    {
        $this->validate();

        $port = new Gambar;
        $port->id_portfolio = $this->idPort;
        $port->path = $this->image->store('','__gambar');
        $port->save();
        
        $this->mount($this->idPort);
        $this->emit('swalAdded');
    }



    public function render()
    {
        return view('livewire.admin.portfolio-add-gambar');
    }
}
