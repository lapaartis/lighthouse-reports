<?php

namespace App\Http\Livewire\Audits;

use App\Models\Project;
use Livewire\Component;

class Create extends Component
{
    public Project $project;

    public function render()
    {
        return view('livewire.audits.create')
            ->layout('layouts.pages.base', [
                'breadcrumb_name' => 'projects.audits.create',
                'breadcrumb_params' => [
                    'project' => $this->project
                ]
            ]);
    }
}
