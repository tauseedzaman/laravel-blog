<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $name;
    public $email;
    public $comment_content;
    public $post_id;
    public $postId;

    public  function add_comment(){
        $this->validate([
            'name' => 'required',
            'comment_content' => 'required',
        ]);
       \App\Models\comments::create([
            'comment_content' => $this->comment_content,
            'posts_id' => $this->postId,
            'auther' => $this->name,

        ]);
        $this->name="";
        $this->comment_content="";

        session()->flash('message', ' Comment Added.');
        $this->comments = \App\Models\comments::where('posts_id',$this->postId)->OrderBy('id','DESC')->paginate(10);
    }
    public function delete_comment($id){

    }

    public function render()
    {
        return view('livewire.comments',[
            'comments' => \App\Models\comments::where('posts_id',$this->postId)->OrderBy('id','DESC')->paginate(10)
        ]);
    }
}
