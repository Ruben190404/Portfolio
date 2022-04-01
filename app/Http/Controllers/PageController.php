<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Donation;
use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexOpen(){
        return view('index');
    }

    public function projectOpen(Request $request){
        $projects = Project::where('active', 1);

        if ($request->has('language')) {
            foreach($request->get('language') AS $id) {
                $projects->whereRelation('languages', 'language_id', $id);
            }
        }

        return view('projects', [
            'projects' => $projects->get(),
            'languages' => Language::all(),
        ]);
    }

    public function contactOpen(){


        return view('contact');
    }

    public function aboutmeOpen(){
        return view('about-me');
    }

    public function donateOpen(){
        $donateMethod = Donation::all();

        return view('donate', [
            'donateMethod' => $donateMethod,
        ]);
    }
}
