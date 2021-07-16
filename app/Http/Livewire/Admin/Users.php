<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
class Users extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.admin.users',[
            'users' => User::latest()->paginate(20),
        ])->layout('admin.layouts.app');
    }
}
