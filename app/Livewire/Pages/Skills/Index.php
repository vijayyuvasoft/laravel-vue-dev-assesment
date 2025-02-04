<?php

namespace App\Livewire\Pages\Skills;

use Livewire\Component;
use App\Models\Skills;

class Index extends Component
{
    public $skills, $name, $skill_id;

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function mount()
    {
        $this->skills = Skills::all();
    }

    public function save()
    {
        $this->validate();
        Skills::create(['name' => $this->name]);
        $this->reset(['name']);
        $this->skills = Skills::all();
    }

    public function edit($id)
    {
        $skill = Skills::findOrFail($id);
        $this->skill_id = $id;
        $this->name = $skill->name;
    }

    public function update()
    {
        $this->validate();
        Skills::find($this->skill_id)->update(['name' => $this->name]);
        $this->reset(['name', 'skill_id']);
        $this->skills = Skills::all();
    }

    public function delete($id)
    {
        Skills::findOrFail($id)->delete();
        $this->skills = Skills::all();
    }

    public function render()
    {
        return view('livewire.pages.skills.index');
    }
}
