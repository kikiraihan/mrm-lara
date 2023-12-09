<?php

namespace App\Http\Livewire\Landing;

use App\Models\Portfolio;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class Home extends Component
{
    //listener
    protected $listeners = ['trigerHomeGantiBahasa'=>'gantiBahasa'];
    public function gantiBahasa($bahasa)
    {
        App::setLocale($bahasa);
    }

    public function getQuote()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://api.api-ninjas.com/v1/quotes?category=architecture', [
            'headers' => ['X-Api-Key' => 'XxDVhTcHCjtxdqjonzAvgQ==Ol2l3PF3K0XMM1LX',]
        ]);
        $xml = $response->getBody()->getContents();
        return json_decode($xml)[0];
    }

    public function render()
    {
        return view('livewire.landing.home',[
            // 'quote'=>$this->getQuote()->quote,
            // 'who'=>$this->getQuote()->author,
            'port_count'=>Portfolio::count(),
        ])
        ->layout('layouts.landing.app');
    }
}
