<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class Comments extends Component
{
    use WithPagination;


    public function delete($id)
    {
        \App\Models\comments::findOrFail($id)->delete();
        session()->flash('message', 'category Deleted Successfully.');

    }
    public function render()
    {
        return view('livewire.admin.comments',[
            'comments' => \App\Models\comments::latest()->paginate(20)
        ])->layout('admin.layouts.app');
    }
}
