<?php

namespace App\Http\Livewire\Admin;

use App\Models\Portfolio;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard',[
            'portCount'=>Portfolio::count(),
        ])
        ->layout('layouts.admin.app');
    }
}
