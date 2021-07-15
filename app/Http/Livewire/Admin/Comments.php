<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Comments extends Component
{
    public function render()
    {
        return view('livewire.admin.comments')->layout('admin.layouts.app');
    }
}
