<?php

namespace App\Http\Livewire\Admin;

use App\Models\Portfolio;
use Livewire\Component;
use Livewire\WithFileUploads;

class PortfolioAdd extends Component
{
    use WithFileUploads;
    public Portfolio $data;
    public $cover;

    public function mount()
    {
        $this->data=new Portfolio;
    }

    public function rules()
    {
        return [
            'data.judul'=>'required',
            'data.kategori'=>'required',
            'data.lokasi'=>'required',
            'data.tahun'=>'required',
            'data.luas_situs'=>'required',
            'data.luas_lantai'=>'required',
            'data.tinggi'=>'required',
            'data.pic'=>'required',
            'data.tipe'=>'required',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,webp|'.env('IMAGE_UPLOAD_MAX','max:500').'|dimensions:max_width=1080,max_height=1080',//file
        ];
    }

    public function save()
    {
        $this->validate();
        $this->data->cover = $this->cover->store('','__cover');
        $this->data->save();

        $this->mount();
        $this->emit('swalAdded');
    }

    public function render()
    {
        return view('livewire.admin.portfolio-add');
    }
}
