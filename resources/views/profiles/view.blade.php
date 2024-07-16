<!-- resources/views/profiles/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Profile Details</h2>
    <div class="card">
        <div class="card-header">
            {{ $profile->name }}
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $profile->name }}</p>
            <p><strong>Email:</strong> {{ $profile->email }}</p>
            <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('profiles.index') }}" class="btn btn-secondary">Back to Profiles</a>
        </div>
    </div>
</div>
@endsection
