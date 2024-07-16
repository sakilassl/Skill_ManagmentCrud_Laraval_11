<?php

// app/Http/Controllers/QualificationController.php
// app/Http/Controllers/QualificationController.php
namespace App\Http\Controllers;

use App\Models\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    public function index()
    {
        $qualifications = Qualification::all();
        return view('qualifications.index', compact('qualifications'));
    }

    public function create()
    {
        return view('qualifications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'profile_id' => 'required|exists:profiles,id|unique:qualifications', // can be taken same id
            'qualification_name' => 'required',
            'institution' => 'required',
            'date_obtained' => 'required|date',
        ]);

        Qualification::create($request->all());
        return redirect()->route('qualifications.index')
                         ->with('success', 'Qualification created successfully.');
    }

    public function show(Qualification $qualification)
    {
        return view('qualifications.view', compact('qualification')); // edited by me
    }

    public function edit(Qualification $qualification)
    {
        return view('qualifications.edit', compact('qualification'));
    }

    public function update(Request $request, Qualification $qualification)
    {
        $request->validate([
            'profile_id' => 'required|exists:profiles,id',
            'qualification_name' => 'required',
            'institution' => 'required',
            'date_obtained' => 'required|date', 
        ]);

        $qualification->update($request->all());
        return redirect()->route('qualifications.index')
                         ->with('success', 'Qualification updated successfully.');
    }

    public function destroy(Qualification $qualification)
    {
        $qualification->delete();
        return redirect()->route('qualifications.index')
                         ->with('success', 'Qualification deleted successfully.');
    }
}
