<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Dashboard', route('home'));
});

Breadcrumbs::register('profile', function($breadcrumbs)
{
    $breadcrumbs->push('Profile', route('profile'));
});

Breadcrumbs::register('groups', function($breadcrumbs)
{
    $breadcrumbs->push('Group', route('groups'));
});

Breadcrumbs::register('projects', function($breadcrumbs)
{
    $breadcrumbs->push('Project', route('projects'));
});

Breadcrumbs::register('projects.create', function($breadcrumbs)
{
    $breadcrumbs->parent('projects');
    $breadcrumbs->push('Add New Project', route('projects.create'));
});

Breadcrumbs::register('jobs', function($breadcrumbs)
{
    $breadcrumbs->push('Job', route('jobs'));
});

Breadcrumbs::register('jobs.create', function($breadcrumbs)
{
    $breadcrumbs->parent('jobs');
    $breadcrumbs->push('Add New Job', route('jobs.create'));
});