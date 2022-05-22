<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Edit extends Component
{
    public Project $project;

    protected $rules = [
        'project.name' => 'required|string'
    ];

    public function save() {

        $validatedData = $this->validate();

        $this->project->save($validatedData);

        return redirect()->route('projects.show', [$this->project]);
    }

    public function render()
    {
        return view('livewire.projects.edit')
            ->layout('layouts.pages.base', [
                'breadcrumb_name' => 'projects.edit',
                'breadcrumb_params' => $this->project
            ]);
    }
}
