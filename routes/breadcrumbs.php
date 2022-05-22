<?php

use Rawilk\Breadcrumbs\Facades\Breadcrumbs;
use Rawilk\Breadcrumbs\Support\Generator;

Breadcrumbs::for('home', function (Generator $trail) {
    $trail->push('Home', route('dashboard'));
});

Breadcrumbs::for('projects', function (Generator $trail)  {
    $trail->parent('home')->push('Projects', route('projects.index'));
});

Breadcrumbs::for('projects.create', function (Generator $trail)  {
    $trail->parent('projects')->push('Create', route('projects.create'));
});

Breadcrumbs::for('projects.show', function (Generator $trail, \App\Models\Project $project)  {
    $trail->parent('projects')->push($project->name, route('projects.show', [$project]));
});

Breadcrumbs::for('projects.edit', function (Generator $trail, \App\Models\Project $project)  {
    $trail->parent('projects.show', $project)->push('Edit', route('projects.edit', [$project]));
});
