<?php

namespace App\Http\Controllers;

use App\Models\Project_language;
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

    public function update(Project $project, Project_language $project_language,Request $request) {
        $project->title = $request->input('title');
        $project->description = $request->input('description');

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/services'), $filename);
            $project->picture = $request->file('image')->getClientOriginalName();
        }

        $project_language->project_id = $request->input('id');
        $project_language->language_id = $request->input('language');


        $project_language->save();
        $project->save();
        return redirect()->route('admin.projects.list')->with('status', 'Project updated successfully');

    }
}
