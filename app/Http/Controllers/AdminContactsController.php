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
            'voornaam' => 'required',
            'achternaam' => 'required',
            'email-adres' => 'required|email',
            'telefoonnummer' => 'required|numeric',
        ]);

        $contact = new Contact();
        $contact->firstName = $request->input('voornaam');
        $contact->lastName = $request->input('achternaam');
        $contact->email = $request->input('email-adres');
        $contact->phonenumber = $request->input('telefoonnummer');
        $contact->save();

        return redirect()->route('contact')->with('status', 'Contact added successfully');
    }
}
