<?php

use Rawilk\Breadcrumbs\Facades\Breadcrumbs;
use Rawilk\Breadcrumbs\Support\Generator;

Breadcrumbs::for('home', function (Generator $trail) {
    $trail->push('Home', route('dashboard'));
});

Breadcrumbs::for('audits', function (Generator $trail)  {
    $trail->parent('home')->push('Audits', route('audits.index'));
});

Breadcrumbs::for('projects.audits.create', function (Generator $trail, array $params)  {
    $project = array_key_exists('project', $params) ? $params['project'] : null;
    $trail->parent('projects.show', $project)
        ->push('Add Audit');
});

Breadcrumbs::for('projects.audits.show', function (Generator $trail, array $params)  {
    $project = array_key_exists('project', $params) ? $params['project'] : null;
    $audit = array_key_exists('audit', $params) ? $params['audit'] : null;
    $trail->parent('projects.show', $project)
        ->push(sprintf('Audit: %s', $audit->name), route('projects.audits.show', [$project, $audit]));
});

Breadcrumbs::for('projects.audits.edit', function (Generator $trail, array $params)  {
    $project = array_key_exists('project', $params) ? $params['project'] : null;
    $audit = array_key_exists('audit', $params) ? $params['audit'] : null;
    $trail->parent('projects.audits.show', $params)
        ->push('Edit', route('projects.audits.edit', $params));
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
