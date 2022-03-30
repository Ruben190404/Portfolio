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
        $contact = new Contact();
        $contact->firstName = $request->fname;
        $contact->lastName = $request->lname;
        $contact->email = $request->email;
        $contact->phonenumber = $request->tel;
        $contact->save();

        return redirect()->route('contact');
    }
}
