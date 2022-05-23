<?php

namespace App\Http\Livewire\Audits;

use App\Models\Audit;
use App\Models\Project;
use Livewire\Component;

class Index extends Component
{
    public Project $project;

    public function mount($project = null) {

        if (!isset($this->project)) {
            $this->project = new Project();
        }
    }

    private function getAudits() {
        $audits = Audit::select(['*']);
        if ($this->project->exists) {
            $audits->where('project_id', $this->project->id);
        }
        return $audits->get();
    }

    public function render()
    {
        return view('livewire.audits.index', [
            'audits' => $this->getAudits()
        ])->layout('layouts.pages.base', ['breadcrumb_name' => 'audits']);
    }
}
