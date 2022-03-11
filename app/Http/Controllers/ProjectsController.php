<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function indexOpen(){
        return view('index');
    }

    public function projectOpen(){
        return view('projects');
    }

    public function contactOpen(){
        return view('contact');
    }

    public function aboutmeOpen(){
        return view('about-me');
    }

    public function donateOpen(){
        return view('donate');
    }
}
