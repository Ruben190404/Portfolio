<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLanguagesController extends Controller
{
    public function index() {
        $languages = Language::all();

        return view('admin.languages.index', [
            'languages' => $languages
        ]);
    }
}
