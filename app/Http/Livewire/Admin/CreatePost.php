<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\posts;
class CreatePost extends Component
{
    use WithPagination;
    // protected $paginationTheme = 'bootstrap'; //uncomment this line if you want to use bootstrap pagination theme

    public function delete($id)
    {
        posts::findOrFail($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');

}
    public function render()
    {
        return view('livewire.admin.create-post',[
            'posts' => posts::latest()->paginate(10)
        ])->layout('admin.layouts.app');
    }
}
