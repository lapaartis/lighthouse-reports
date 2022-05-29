<?php

namespace App\Http\Livewire\Audits;

class Create extends AuditComponent
{
    public function render()
    {
        return view('livewire.audits.create')
            ->layout('layouts.pages.base', [
                'breadcrumb_name'   => 'projects.audits.create',
                'breadcrumb_params' => [
                    'project' => $this->project
                ]
            ]);
    }
}
