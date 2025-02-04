<?php

namespace App\Livewire\Pages\Jobs;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Jobposts;
use App\Models\Skills;

class Create extends Component
{
    use WithFileUploads;

    public $title, $description, $experience, $salary, $location, $extra_info, $company_name, $logo, $skills = [];

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required',
        'experience' => 'required|string',
        'salary' => 'required|string',
        'location' => 'required|string',
        'company_name' => 'required|string|max:255',
        'logo' => 'required|image|max:1024',
        'skills' => 'required|array',
        'skills.*' => 'exists:skills,id',
    ];

    public function submit()
    {
        $this->validate();

        $logoPath = $this->logo->store('logos', 'public');

        $jobpost = Jobposts::create([
            'title' => $this->title,
            'description' => $this->description,
            'experience' => $this->experience,
            'salary' => $this->salary,
            'location' => $this->location,
            'extra_info' => $this->extra_info,
            'company_name' => $this->company_name,
            'logo' => $logoPath,
        ]);

        // Attach skills to the job post
        $jobpost->skills()->attach($this->skills);

        session()->flash('message', 'Job post created successfully!');

        return redirect()->route('admin.jobs.index');
    }

    public function render()
    {
        return view('livewire.pages.jobs.create', [
            'allSkills' => Skills::all()
        ]);
    }
}