<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LatestPosts extends Component
{
    public function render()
    {

        return view('livewire.latest-posts',[
            'latestposts' => \App\Models\posts::latest()->first()
        ]);
    }
}
