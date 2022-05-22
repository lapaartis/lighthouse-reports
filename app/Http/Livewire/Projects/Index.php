<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $search;

    public function mount()
    {
        $this->search = '';
    }

    public function render()
    {
        return view('livewire.projects.index', [
            'projects' => Project::where('name', 'like', '%' . $this->search . '%')->paginate(6),
        ])
            ->layout('layouts.pages.base', ['breadcrumb_name' => 'projects']);
    }
}
