<!-- resources/views/softSkills/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Soft Skill Details</h2>
    <div class="card">
        <div class="card-header">
            {{ $softSkill->soft_skill }}
        </div>
        <div class="card-body">
            <p><strong>Profile ID:</strong> {{ $softSkill->profile_id }}</p>
            <p><strong>Soft Skill:</strong> {{ $softSkill->soft_skill }}</p>
            <a href="{{ route('soft-skills.edit', $softSkill->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('soft-skills.destroy', $softSkill->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this soft skill?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('soft-skills.index') }}" class="btn btn-secondary">Back to Soft Skills</a>
        </div>
    </div>
</div>
@endsection
