<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard',[
            'posts' => \App\Models\posts::all()->count(),
            'categories' => \App\Models\category::all()->count(),
            'users' => User::all()->count(),
            'admins' => User::where('is_admin',true)->count(),
            'comments' => \App\Models\comments::all()->count(),
        ])->layout('admin.layouts.app');;
    }
}
