<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

use App\Models\tages as tagemodel;
class Tage extends Component
{
    use WithPagination;

    // protected $paginationTheme = 'bootstrap'; //uncomment this line if you want to use bootstrap pagination theme
    public $name;
    public $edit_name_id;
    public $button_text = "Add New tage";

    public function add_tage()
    {
        if ($this->edit_name_id) {

            $this->update($this->edit_name_id);

        }else{
            $this->validate([
                'name' => 'required|unique:tages,name,except,id',
                ]);

            tagemodel::create([
                'name'         => $this->name,
            ]);

            $this->name="";

            session()->flash('message', 'Tage Created successfully.');
        }

    }


     public function edit($id)
    {
        $tage = tagemodel::findOrFail($id);
        $this->edit_name_id = $id;
        $this->name = $tage->name;

        $this->button_text="Update Tage";
    }

    public function update($id)
    {
        $this->validate([
                'name' => 'required|unique:tages,name,except,id',
            ]);

        $tage = tagemodel::findOrFail($id);
        $tage->name = $this->name;

        $tage->save();

        $this->name="";
        $this->edit_name_id="";

        session()->flash('message', 'tage Updated Successfully.');

        $this->button_text = "Add New Tage";

}

     public function delete($id)
    {
        tagemodel::findOrFail($id)->delete();
        session()->flash('message', 'Tage Deleted Successfully.');

            $this->name="";
}

    public function render()
    {
        return view('livewire.admin.tage',[
            'Tages' => tagemodel::latest()->paginate(10),
        ])->layout('admin.layouts.app');
    }
}
