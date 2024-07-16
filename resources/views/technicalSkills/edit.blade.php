<!-- resources/views/technicalSkills/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Technical Skill</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('technical-skills.update', $technicalSkill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <!-- <label for="profile_id">Profile ID</label>  --> 
            <input type="hidden" class="form-control" id="profile_id" name="profile_id" value="{{ $technicalSkill->profile_id }}" required>
        </div>
        <div class="form-group">
            <label for="programming_language">Programming Languages </label>
            <input type="text" class="form-control" id="programming_language" name="programming_language" value="{{ $technicalSkill->programming_language }}" required>
        </div>
        <div class="form-group">
            <label for="frontend_language">Frontend Languages</label>
            <input type="text" class="form-control" id="frontend_language" name="frontend_language" value="{{ $technicalSkill->frontend_language }}" required>
        </div>
        <div class="form-group">
            <label for="testing_tools">Testing Tools </label>
            <input type="text" class="form-control" id="testing_tools" name="testing_tools" value="{{ $technicalSkill->testing_tools }}" required>
        </div>
        <div class="form-group">
            <label for="project_management_tools">Project Management Tools</label>
            <input type="text" class="form-control" id="project_management_tools" name="project_management_tools" value="{{ $technicalSkill->project_management_tools }}" required>
        </div>
        <div class="form-group">
            <label for="graphic_designing_skills">Graphic Designing Skills</label>
            <input type="text" class="form-control" id="graphic_designing_skills" name="graphic_designing_skills" value="{{ $technicalSkill->graphic_designing_skills }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('technical-skills.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
