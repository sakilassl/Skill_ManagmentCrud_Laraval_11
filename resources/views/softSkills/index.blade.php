<!-- resources/views/softSkills/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Soft Skills</h2>
    <a href="{{ route('soft-skills.create') }}" class="btn btn-primary">Add Soft Skill</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Profile ID</th>
                <th>Soft Skill</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($softSkills as $softSkill)
            <tr>
                <td>{{ $softSkill->profile_id }}</td>
                <td>{{ $softSkill->soft_skill }}</td>
                <td>
                    <a href="{{ route('soft-skills.show', $softSkill->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('soft-skills.edit', $softSkill->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('soft-skills.destroy', $softSkill->id) }}" method="POST" style="display:inline;">
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
