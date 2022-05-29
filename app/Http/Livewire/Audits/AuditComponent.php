<?php

namespace App\Http\Livewire\Audits;

use App\Models\Audit;
use App\Models\Project;
use Livewire\Component;

class AuditComponent extends Component
{
    public Project $project;
    public Audit $audit;

    public string $name;
    public string $url = '';
    public array $urls;

    protected $rules = [
        'name'   => 'required|string',
        'urls'   => 'required|array',
        "urls.*" => "required|url|active_url"
    ];

    public function mount()
    {
        $this->name = '';
        $this->urls = [];

        if (isset($this->audit)) {
            $this->name = $this->audit->name;
            $this->urls = $this->audit->urls;
        }
    }

    public function store()
    {
        $this->validate();

        Audit::updateOrCreate([
            'id'         => isset($this->audit) ? $this->audit->id : null,
            'project_id' => $this->project->id
        ], [
            'name' => $this->name,
            'urls' => $this->urls
        ]);

        return isset($this->audit) ?
            redirect()->route('projects.audits.show', [$this->project, $this->audit]) :
            redirect()->route('projects.index');
    }
}
