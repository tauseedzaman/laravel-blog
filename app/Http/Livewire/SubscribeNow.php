<?php

namespace App\Http\Livewire;

use App\Models\subscribers;
use Livewire\Component;

class SubscribeNow extends Component
{
    public $email;

    public function add_email(){
        $this->validate([
            "email" => "required | email "
        ]);
        subscribers::create(['email' => $this->email]);
        session()->flash('message', ' email Added thank you.');
    }

    public function render()
    {
        return view('livewire.subscribe-now');
    }
}
