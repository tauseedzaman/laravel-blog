<?php

namespace App\Http\Livewire\Admin;

use App\Models\category as ModelsCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;

    // protected $paginationTheme = 'bootstrap'; //uncomment this line if you want to use bootstrap pagination theme
    public $name;
    public $edit_name_id;
    public $button_text = "Add New category";

    public function add_category()
    {
        if ($this->edit_name_id) {

            $this->update($this->edit_name_id);

        }else{
            $this->validate([
                'name' => 'required',
                ]);

            ModelsCategory::create([
                'name'         => $this->name,
            ]);

            $this->name="";

            session()->flash('message', 'Category Created successfully.');
        }

    }


     public function edit($id)
    {
        $category = ModelsCategory::findOrFail($id);
        $this->edit_name_id = $id;
        $this->name = $category->name;

        $this->button_text="Update Category";
    }

    public function update($id)
    {
        $this->validate([
                'name' => 'required',
            ]);

        $category = ModelsCategory::findOrFail($id);
        $category->name = $this->name;

        $category->save();

        $this->name="";
        $this->edit_name_id="";

        session()->flash('message', 'Category Updated Successfully.');

        $this->button_text = "Add New category";

}

     public function delete($id)
    {
        ModelsCategory::findOrFail($id)->delete();
        session()->flash('message', 'category Deleted Successfully.');

            $this->name="";
}
    public function render()
    {
        return view('livewire.admin.category',[
            'categories' => ModelsCategory::latest()->paginate(10),
        ])->layout("admin.layouts.app");
    }
}
