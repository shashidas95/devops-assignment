<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function projects()
    {
        $projects = json_decode(file_get_contents(storage_path('data/projects.json')));
        // dd($data);
        return view('projects', compact('projects'));
    }

    public function project(Request $request)
    {
        // dd($request->id);
        $projects = json_decode(file_get_contents(storage_path('data/projects.json')));
        foreach ($projects as $project) {
            if ($request->id == $project->id) {
                $selectedProject = $project;
            }
        }
        if ($selectedProject) {
            return view('components.project-details', compact('selectedProject'));
        }
    }
}
