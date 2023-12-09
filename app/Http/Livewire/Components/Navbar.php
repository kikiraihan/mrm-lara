<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\App;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.components.navbar');
    }

    public function gantiBahasa($bahasa)
    {
        App::setLocale($bahasa);
        $this->emit('trigerHomeGantiBahasa',$bahasa);
        $this->emit('trigerPortdetailGantiBahasa',$bahasa);
        $this->emit('trigerPortGantiBahasa',$bahasa);
        
        // swal swalMessage
        // $kamus=['en'=>'Inggris','id'=>'Indonesia'];
        if($bahasa=='en')
            $this->emit('swalMessage','Language changed to english');
        else
            $this->emit('swalMessage','Bahasa diubah ke bahasa indonesia');
    }
}
