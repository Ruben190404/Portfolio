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

    public function create(){
        $projects = Project::all();
        $langs = Language::all();

        return view('admin.projects.create', [
            'projects' => $projects,
            'langs' => $langs
        ]);
    }

    public function store(Request $request){
        $project = new Project();
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->picture = '';
        if($request->hasFile('image')) {
            $project->picture = $request->file('image')->store('projects');
        }
        $project->active = $request->input('active', 0);
        $project->save();

        $project->languages()->sync($request->input('languages'));

        return redirect(route('admin.projects.index'))->with('status', 'Project created');
    }

    public function edit(Project $project) {
        $langs = Language::all();

     return view('admin.projects.edit', [
         'langs' => $langs,
         'project' => $project
     ]);
    }

    public function update(Project $project, Request $request) {
        // project opslaan
        $project->title = $request->input('title');
        $project->description = $request->input('description');

        if($request->hasFile('image')) {
            $project->picture = $request->file('image')->store('projects');
        }
        $project->active = $request->input('active', 0);
        $project->save();

        // talen opslaan
        $project->languages()->sync($request->input('languages'));

        // terug sturen naar overzichtspagina
        return redirect()->route('admin.projects.index')->with('status', 'Project updated successfully');

    }

    public function destroy(Project $project) {
        $project->delete();

        return redirect()->route('admin.projects.index')->with('status', 'Project deleted successfully');
    }
}
