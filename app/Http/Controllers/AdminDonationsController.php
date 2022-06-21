<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class AdminDonationsController extends Controller
{
    public function index() // loads the index page for all the donation methods
    {
        $donations = Donation::all();

        return view('admin.donations.index', [
            'donations' => $donations
        ]);
    }

    public function create() // loads the create page for a new donation method
    {
        $donations = Donation::all();

        return view('admin.donations.create', [
            'donations' => $donations
        ]);
    }

    public function store(Request $request) // adds a new donation method to the database
    {
        $validated = $request->validate([
            'link' => 'required|url',
            'methode' => 'required',

        ]);

        $donation = new Donation();
        $donation->method = $request->input('methode');
        $donation->link = $request->input('link');
        $donation->save();

        return redirect()->route('admin.donations.index')->with('status', 'Donation method added successfully');
    }

    public function edit(Donation $donation) // loads the edit page for a donation method
    {

        return view('admin.donations.edit', [
            'donation' => $donation
        ]);
    }

    public function update(Donation $donation, Request $request) // updates a donation method in the database
    {
        $donation->method = $request->input('method');
        $donation->link = $request->input('link');
        $donation->save();

        return redirect()->route('admin.donations.index')->with('status', 'Donation method updated successfully');
    }

    public function destroy(Donation $donation) // deletes a donation method from the database
    {
        $donation->delete();

        return redirect()->route('admin.donations.index')->with('status', 'Donation method deleted successfully');
    }

}
