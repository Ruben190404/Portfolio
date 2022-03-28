<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Project;
use Illuminate\Http\Request;

class AdminProjectsController extends Controller
{
    public function index() {
        $projects = Project::all();
        $langs = Language::all();

        return view('admin.projects.index', [
            'langs' => $langs,
            'projects' => $projects
        ]);

    }

    public function edit(Project $project) {
        $langs = Language::all();

     return view('admin.projects.edit', [
         'langs' => $langs,
         'project' => $project
     ]);
    }

    public function update(Project $project, Request $request) {
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->picture = $request->input('image');
//        $project->languages = $request->input('language');
        $project->save();
        return redirect()->route('admin.projects.list')->with('status', 'Project updated successfully');
    }
}
