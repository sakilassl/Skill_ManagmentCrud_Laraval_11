<!-- resources/views/qualifications/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Qualification Details</h2>
    <div class="card">
        <div class="card-header">
            {{ $qualification->qualification_name }}
        </div>
        <div class="card-body">
            <p><strong>Profile ID:</strong> {{ $qualification->profile_id }}</p>
            <p><strong>Highest Qualification:</strong> {{ $qualification->qualification_name }}</p>
            <p><strong>Institution:</strong> {{ $qualification->institution }}</p>
            <p><strong>Date Obtained:</strong> {{ $qualification->date_obtained }}</p>
            <a href="{{ route('qualifications.edit', $qualification->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('qualifications.destroy', $qualification->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this qualification?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('qualifications.index') }}" class="btn btn-secondary">Back to Qualifications</a>
        </div>
    </div>
</div>
@endsection
