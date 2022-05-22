<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Create extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required|string'
    ];

    public function save()
    {
        $validatedData = $this->validate();

        Project::create($validatedData);

        return redirect()->route('projects.index');
    }

    public function render()
    {
        return view('livewire.projects.create');
    }
}
