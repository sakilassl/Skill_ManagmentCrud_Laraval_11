<?php

// app/Http/Controllers/TechnicalSkillController.php
namespace App\Http\Controllers;

use App\Models\TechnicalSkill;
use Illuminate\Http\Request;

class TechnicalSkillController extends Controller
{
    public function index()
    {
        $technicalSkills = TechnicalSkill::all();
        return view('technicalSkills.index', compact('technicalSkills'));
    }

    public function create()
    {
        return view('technicalSkills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'profile_id' => 'required|exists:profiles,id|unique:technical_skills',
            'programming_language' => 'required',
            'frontend_language' => 'required',
            'testing_tools' => 'required',
            'project_management_tools' => 'required',
            'graphic_designing_skills' => 'required',
        ]);

        TechnicalSkill::create($request->all());
        return redirect()->route('technical-skills.index')
                         ->with('success', 'Technical Skill created successfully.');
    }

    public function show(TechnicalSkill $technicalSkill)
    {
        return view('technicalSkills.view', compact('technicalSkill'));
    }

    public function edit(TechnicalSkill $technicalSkill)
    {
        return view('technicalSkills.edit', compact('technicalSkill'));
    }

    public function update(Request $request, TechnicalSkill $technicalSkill)
    {
        $request->validate([
            'profile_id' => 'required|exists:profiles,id',
            'programming_language' => 'required',
            'frontend_language' => 'required',
            'testing_tools' => 'required',
            'project_management_tools' => 'required',
            'graphic_designing_skills' => 'required',
        ]);

        $technicalSkill->update($request->all());
        return redirect()->route('technical-skills.index')
                         ->with('success', 'Technical Skill updated successfully.');
    }

    public function destroy(TechnicalSkill $technicalSkill)
    {
        $technicalSkill->delete();
        return redirect()->route('technical-skills.index')
                         ->with('success', 'Technical Skill deleted successfully.');
    }
}
