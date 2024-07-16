<!-- resources/views/qualifications/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Qualification</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('qualifications.update', $qualification->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <!-- <label for="profile_id">Profile ID</label> -->
            <input type="hidden" class="form-control" id="profile_id" name="profile_id" value="{{ $qualification->profile_id }}" required >
        </div>
        <div class="form-group">
            <label for="qualification_name">Highest Qualification </label>
            <input type="text" class="form-control" id="qualification_name" name="qualification_name" value="{{ $qualification->qualification_name }}" required>
        </div>
        <div class="form-group">
            <label for="institution">Institution</label>
            <input type="text" class="form-control" id="institution" name="institution" value="{{ $qualification->institution }}" required>
        </div>
        <div class="form-group">
            <label for="date_obtained">Date Obtained</label>
            <input type="date" class="form-control" id="date_obtained" name="date_obtained" value="{{ $qualification->date_obtained }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('qualifications.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
