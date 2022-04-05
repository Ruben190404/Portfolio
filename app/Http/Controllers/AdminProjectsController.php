<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Project;
use Illuminate\Http\Request;

class AdminProjectsController extends Controller
{
    public function index() {
        $projects = Project::all();
        $languages = Language::all();

        return view('admin.projects.index', [
            'languages' => $languages,
            'projects' => $projects
        ]);

    }

    public function create(){
        $projects = Project::all();
        $languages = Language::all();

        return view('admin.projects.create', [
            'projects' => $projects,
            'languages' => $languages
        ]);
    }

    public function store(Request $request){

        $validated = $request->validate([
            'titel' => 'required',
            'beschrijving' => 'required',
        ]);

        $project = new Project();
        $project->title = $request->input('titel');
        $project->description = $request->input('bescrijving');
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
        $languages = Language::all();

     return view('admin.projects.edit', [
         'languages' => $languages,
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
