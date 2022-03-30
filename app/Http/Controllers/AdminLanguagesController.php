<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class AdminLanguagesController extends Controller
{
    public function index() {
        $languages = Language::all();

        return view('admin.languages.index', [
            'languages' => $languages
        ]);
    }

    public function create() {
        $langs = Language::all();

        return view('admin.languages.create', [
            'langs' => $langs
        ]);
    }

    public function store(Request $request){
        $language = new Language();
        $language->title = $request->input('title');
        $language->save();

        return redirect()->route('admin.languages.index');
    }

    public function edit(Language $language) {
        $languages = Language::all();

        return view('admin.languages.edit', [
            'language' => $language
        ]);
    }

    public function update(Language $language, Request $request){
        $language->title = $request->input('title');
        $language->save();

        return redirect()->route('admin.languages.index')->with('status', 'Language updated successfully');

    }

    public function destroy(Language $language) {
        $language->delete();

        return redirect()->route('admin.languages.index')->with('status', 'Language deleted successfully');
    }

}