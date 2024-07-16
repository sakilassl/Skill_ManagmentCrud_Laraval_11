<?php

// app/Http/Controllers/ProfileController.php
namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:profiles', //Unique means same email is not valid
        ],
        [
            'email.email' => 'Please provide a valid email address.', //............valided with displaing error msg
        ]);    
        

        Profile::create($request->all());
        return redirect()->route('profiles.index')
                         ->with('success', 'Profile created successfully.');
    }

    public function show(Profile $profile)
    {
        return view('profiles.view', compact('profile'));
    }

    public function edit(Profile $profile)
    {
        return view('profiles.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:profiles,email,' . $profile->id,
        ]);

        $profile->update($request->all());
        return redirect()->route('profiles.index')
                         ->with('success', 'Profile updated successfully.');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profiles.index')
                         ->with('success', 'Profile deleted successfully.');
    }
}

