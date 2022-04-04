<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class AdminDonationsController extends Controller
{
    public function index(){
        $donations = Donation::all();

        return view('admin.donations.index', [
            'donations' => $donations
        ]);
    }

    public function create(){
        $donations = Donation::all();

        return view('admin.donations.create', [
            'donations' => $donations
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'link' => 'required|unique:posts|max:255',
            'method' => 'required',

        ]);

        $donation = new Donation();
        $donation->method = $request->input('method');
        $donation->link = $request->input('link');
        $donation->save();

        return redirect()->route('admin.donations.index')->with('status', 'Donation method added successfully');
    }

    public function edit(Donation $donation){

        return view('admin.donations.edit', [
            'donation' => $donation
        ]);
    }

    public function update(Donation $donation, Request $request){
        $donation->method = $request->input('method');
        $donation->link = $request->input('link');
        $donation->save();

        return redirect()->route('admin.donations.index')->with('status', 'Donation method updated successfully');
    }

    public function destroy(Donation $donation){
        $donation->delete();

        return redirect()->route('admin.donations.index')->with('status', 'Donation method deleted successfully');
    }

}
