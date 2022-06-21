<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Donation;
use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexOpen() // loads the main page
    {
        return view('index');
    }

    public function projectOpen(Request $request) // loads the project page with active projects
    {
        $projects = Project::where('active', 1);

        if ($request->has('language')) {
            foreach($request->get('language') AS $id) {
                $projects->whereRelation('languages', 'language_id', $id);
            }
        }

        return view('projects', [
            'projects' => $projects->get(),
            'languages' => Language::all(),
            'selected' => $request->get('language') ?? []
        ]);
    }

    public function contactOpen() // loads the contact page
    {
        return view('contact');
    }

    public function aboutmeOpen() // loads the about me page
    {
        return view('about-me');
    }

    public function donateOpen() // loads the donate page with all donation methods
    {
        $donateMethod = Donation::all();

        return view('donate', [
            'donateMethod' => $donateMethod,
        ]);
    }
}
