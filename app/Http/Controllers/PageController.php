<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Language;
use App\Models\Project;
use App\Models\Contact;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexOpen(){
        return view('index');
    }

    public function projectOpen(){
        $projects = Project::where('active', 1)->get();

        return view('projects', [
            'projects' => $projects,
        ]);
    }

    public function contactOpen(){


        return view('contact');
    }

    public function aboutmeOpen(){
        return view('about-me');
    }

    public function donateOpen(){
        $donateMethod = donation::all();

        return view('donate', [
            'donateMethod' => $donateMethod,
        ]);
    }
}
