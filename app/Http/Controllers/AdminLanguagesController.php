<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class AdminLanguagesController extends Controller
{
    public function index() // loads the index page for all the languages and tools
    {
        $languages = Language::all();

        return view('admin.languages.index', [
            'languages' => $languages
        ]);
    }

    public function create() // loads the create page for a new language or tool
    {
        $languages = Language::all();

        return view('admin.languages.create', [
            'languages' => $languages
        ]);
    }

    public function store(Request $request) // adds a new language or tool to the database
    {
        $validated = $request->validate([
            'titel' => 'required',
        ]);

        $language = new Language();
        $language->title = $request->input('titel');
        $language->save();

        return redirect()->route('admin.languages.index');
    }

    public function edit(Language $language) // loads the edit page for a language or tool
    {

        return view('admin.languages.edit', [
            'language' => $language
        ]);
    }

    public function update(Language $language, Request $request) // updates a language or tool in the database
    {
        $language->title = $request->input('title');
        $language->save();

        return redirect()->route('admin.languages.index')->with('status', 'Language updated successfully');

    }

    public function destroy(Language $language) // deletes a language or tool from the database
    {
        $language->delete();

        return redirect()->route('admin.languages.index')->with('status', 'Language deleted successfully');
    }

}
