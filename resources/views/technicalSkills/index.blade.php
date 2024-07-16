<!-- resources/views/technicalSkills/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Technical Skills</h2>
    <a href="{{ route('technical-skills.create') }}" class="btn btn-primary">Add Technical Skill</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Profile ID</th>
                <th>Programming Language</th>
                <th>Frontend Language</th>
                <th>Testing Tools</th>
                <th>Project Management Tools</th>
                <th>Graphic Designing Skills</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($technicalSkills as $technicalSkill)
            <tr>
                <td>{{ $technicalSkill->profile_id }}</td>
                <td>{{ $technicalSkill->programming_language }}</td>
                <td>{{ $technicalSkill->frontend_language }}</td>
                <td>{{ $technicalSkill->testing_tools }}</td>
                <td>{{ $technicalSkill->project_management_tools }}</td>
                <td>{{ $technicalSkill->graphic_designing_skills }}</td>
                <td>
                    <a href="{{ route('technical-skills.show', $technicalSkill->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('technical-skills.edit', $technicalSkill->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('technical-skills.destroy', $technicalSkill->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
