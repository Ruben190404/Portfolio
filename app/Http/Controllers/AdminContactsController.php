<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactsController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();

        return view('admin.contacts.index', [
            'contacts' => $contacts,
        ]);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')->with('status', 'Contact deleted successfully');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'First Name' => 'required|unique:posts|max:255',
            'Last Name' => 'required',
            'Email' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'Phonenumber' => 'required',
        ]);

        $contact = new Contact();
        $contact->firstName = $request->input('First Name');
        $contact->lastName = $request->input('Last Name');
        $contact->email = $request->input('Email');
        $contact->phonenumber = $request->input('Phonenumber');
        $contact->save();

        return redirect()->route('contact');
    }
}
