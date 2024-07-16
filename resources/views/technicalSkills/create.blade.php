<!-- resources/views/technicalSkills/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add Technical Skill</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('technical-skills.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="profile_id">Profile ID</label>
            <input type="text" class="form-control" id="profile_id" name="profile_id" required>
        </div>
        <div class="form-group">
            <label for="programming_language">Programming Languages (comma-separated)</label>
            <input type="text" class="form-control" id="programming_language" name="programming_language" required>
        </div>
        <div class="form-group">
            <label for="frontend_language">Frontend Languages (comma-separated)</label>
            <input type="text" class="form-control" id="frontend_language" name="frontend_language" required>
        </div>
        <div class="form-group">
            <label for="testing_tools">Testing Tools (comma-separated)</label>
            <input type="text" class="form-control" id="testing_tools" name="testing_tools" required>
        </div>
        <div class="form-group">
            <label for="project_management_tools">Project Management Tools (comma-separated)</label>
            <input type="text" class="form-control" id="project_management_tools" name="project_management_tools" required>
        </div>
        <div class="form-group">
            <label for="graphic_designing_skills">Graphic Designing Skills (comma-separated)</label>
            <input type="text" class="form-control" id="graphic_designing_skills" name="graphic_designing_skills" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
