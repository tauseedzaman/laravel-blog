<?php

namespace App\Http\Livewire;
use App\Models\posts as postsModel;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;
    public $paginationTheme="bootstrap";
    public function render()
    {
        return view('livewire.posts',[
            'posts' => postsModel::latest()->paginate(10)
        ]);
    }
}
