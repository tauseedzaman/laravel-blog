<?php

namespace App\Http\Livewire\Admin;

use App\Models\category;
use App\Models\posts as ModelsPosts;
use Livewire\Component;
use Livewire\WithFileUploads;

class Posts extends Component
{
    use WithFileUploads;
    public $title;
    public $image;
    public $content;
    public $category;
    public $edit_post_id;

    public $button_text = "Add New Post";

    public function add_post()
    {
        if ($this->edit_post_id) {

            $this->update($this->edit_post_id);

        }else{
            $this->validate([
                'title' => 'required',
                'image' => 'required',
                'content' => 'required',
                'auther' => 'required',
                ]);

            ModelsPosts::create([
                'title'         => $this->title,
                'image'         => $this->storeImage(),
                'content'         => $this->content,
                'auther'         => 'tauseed zaman', //auth()->user->name,
                'published'     => True,
            ]);

            $this->post="";

            session()->flash('message', 'post Created successfully.');
        }

    }

    public function storeImage()
    {
        if (!$this->image) {
            return null;
        }
        // $imag   = ImageManagerStatic::make($this->image)->encode('jpg');
        // $name  = Str::random() . '.jpg';
        // Storage::disk('public')->put($name, $imag);
        // return $name;
    }


     public function edit($id)
    {
        $post = ModelsPosts::findOrFail($id);
        $this->edit_post_id = $id;
        $this->post = $post->post;

        $this->button_text="Update post";
    }

    public function update($id)
    {
        $this->validate([
                'post' => 'required',
            ]);

        $post = ModelsPosts::findOrFail($id);
        $post->post = $this->post;

        $post->save();

        $this->post="";
        $this->edit_post_id="";

        session()->flash('message', 'post Updated Successfully.');

        $this->button_text = "Add New post";

}

     public function delete($id)
    {
        ModelsPosts::findOrFail($id)->delete();
        session()->flash('message', 'post Deleted Successfully.');

            $this->post="";
}
    public function render()
    {
        return view('livewire.admin.posts',[
            'posts' =>ModelsPosts::all()->get('id','title','created_at'),
            'categories' =>category::all(),
        ]);
    }
}
