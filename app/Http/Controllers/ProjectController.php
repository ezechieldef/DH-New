<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('actif', true)->orderBy('ordre')->paginate(12);
        return view('projects.index', compact('projects'));
    }

    public function show(string $slug)
    {
        $project = Project::whereSlug($slug)->firstOrFail();
        $related = Project::where('id','!=',$project->id)->where('actif',true)->limit(3)->get();
        return view('projects.show', compact('project','related'));
    }
}