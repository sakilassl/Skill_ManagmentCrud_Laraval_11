<?php

// app/Http/Controllers/SoftSkillController.php
namespace App\Http\Controllers;

use App\Models\SoftSkill;
use Illuminate\Http\Request;

class SoftSkillController extends Controller
{
    public function index()
    {
        $softSkills = SoftSkill::all();
        return view('softSkills.index', compact('softSkills'));
    }

    public function create()
    {
        return view('softSkills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'profile_id' => 'required|exists:profiles,id|unique:soft_skills',
            'soft_skill' => 'required',
        ]);

        SoftSkill::create($request->all());
        return redirect()->route('soft-skills.index')
                         ->with('success', 'Soft Skill created successfully.');
    }

    public function show(SoftSkill $softSkill)
    {
        return view('softSkills.view', compact('softSkill'));
    }

    public function edit(SoftSkill $softSkill)
    {
        return view('softSkills.edit', compact('softSkill'));
    }

    public function update(Request $request, SoftSkill $softSkill)
    {
        $request->validate([
            'profile_id' => 'required|exists:profiles,id',
            'soft_skill' => 'required',
        ]);

        $softSkill->update($request->all());
        return redirect()->route('soft-skills.index')
                         ->with('success', 'Soft Skill updated successfully.');
    }

    public function destroy(SoftSkill $softSkill)
    {
        $softSkill->delete();
        return redirect()->route('soft-skills.index')
                         ->with('success', 'Soft Skill deleted successfully.');
    }
}
