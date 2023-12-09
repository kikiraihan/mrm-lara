<?php

namespace App\Http\Livewire\Admin;

use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class PortfolioEdit extends Component
{
    use WithFileUploads;
    
    public $cover;
    public $idTo;
    public Portfolio $data;


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

    protected $rules = [
        
    ];

    public function mount($id)
    {
        $this->data=Portfolio::find($id);
        $this->idTo = $id;
    }

    public function save()
    {
        $this->validate();
        if ($this->cover) {
            //delete lama
            Storage::disk('__cover')->delete($this->data->getRawOriginal('cover'));
            // simpan baru
            $this->data->cover = $this->cover->store('','__cover');
        }
        $this->data->save();
        

        $this->mount($this->idTo);
        $this->emit('swalUpdated');
    }

    public function hapusCoverLama()
    {
        Storage::disk('__cover')->delete($this->data->getRawOriginal('cover'));
        $this->data->cover=null;
        $this->data->save();
    }

    public function render()
    {
        return view('livewire.admin.portfolio-edit');
    }
}
