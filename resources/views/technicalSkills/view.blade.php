<!-- resources/views/technicalSkills/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Technical Skill Details</h2>
    <div class="card">
        <div class="card-header">
            {{ $technicalSkill->programming_language }}
        </div>
        <div class="card-body">
            <p><strong>Profile ID:</strong> {{ $technicalSkill->profile_id }}</p>
            <p><strong>Programming Languages:</strong> {{ $technicalSkill->programming_language }}</p>
            <p><strong>Frontend Languages:</strong> {{ $technicalSkill->frontend_language }}</p>
            <p><strong>Testing Tools:</strong> {{ $technicalSkill->testing_tools }}</p>
            <p><strong>Project Management Tools:</strong> {{ $technicalSkill->project_management_tools }}</p>
            <p><strong>Graphic Designing Skills:</strong> {{ $technicalSkill->graphic_designing_skills }}</p>
            <a href="{{ route('technical-skills.edit', $technicalSkill->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('technical-skills.destroy', $technicalSkill->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this technical skill?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('technical-skills.index') }}" class="btn btn-secondary">Back to Technical Skills</a>
        </div>
    </div>
</div>
@endsection
