<!-- resources/views/qualifications/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add Qualification</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('qualifications.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="profile_id">Profile ID</label>
            <input type="text" class="form-control" id="profile_id" name="profile_id" required>
        </div>
        <div class="form-group">
            <label for="qualification_name">Highest Qualification </label>
            <input type="text" class="form-control" id="qualification_name" name="qualification_name" required>
        </div>
        <div class="form-group">
            <label for="institution">Institution</label>
            <input type="text" class="form-control" id="institution" name="institution" required>
        </div>
        <div class="form-group">
            <label for="date_obtained">Date Obtained</label>
            <input type="date" class="form-control" id="date_obtained" name="date_obtained" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
