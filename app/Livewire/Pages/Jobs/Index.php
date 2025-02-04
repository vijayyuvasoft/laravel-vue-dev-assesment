<?php

namespace App\Livewire\Pages\Jobs;

use Livewire\Component;
use App\Models\Jobposts;

class Index extends Component
{
    public $jobs ;

    public function mount()
    {
        $this->jobs = Jobposts::with('skills')->get();
    }

    public function render()
    {
        return view('livewire.pages.jobs.index');
    }

    public function deleteJob($jobId)
    {
        $job = Jobposts::find($jobId);

        if ($job) {
            $job->delete();
            $this->jobs = Jobposts::with('skills')->get(); // Refresh job list
            session()->flash('success', 'Job deleted successfully!');
        }
    }
}
