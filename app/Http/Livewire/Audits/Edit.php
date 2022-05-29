<?php

namespace App\Http\Livewire\Audits;

class Edit extends AuditComponent
{
    public function render()
    {
        return view('livewire.audits.edit')
            ->layout('layouts.pages.base', [
                'breadcrumb_name'   => 'projects.audits.edit',
                'breadcrumb_params' => [
                    'project' => $this->project,
                    'audit'   => $this->audit,
                ]
            ]);
    }
}
