<?php

namespace App\Http\Livewire\Audits;

use App\Models\Audit;
use App\Models\Project;
use Livewire\Component;

class Edit extends Component
{
    public Project $project;
    public Audit $audit;

    public function render()
    {
        return view('livewire.audits.edit')
            ->layout('layouts.pages.base', [
                'breadcrumb_name' => 'projects.audits.edit',
                'breadcrumb_params' => [
                    'project' => $this->project,
                    'audit' => $this->audit,
                ]
            ]);
    }
}
