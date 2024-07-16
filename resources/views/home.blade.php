<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Welcome to the Skills Management System</h2>
    <div class="list-group">
        <a href="{{ route('profiles.index') }}" class="list-group-item list-group-item-action">Profiles</a>
        <a href="{{ route('qualifications.index') }}" class="list-group-item list-group-item-action">Qualifications</a>
        <a href="{{ route('soft-skills.index') }}" class="list-group-item list-group-item-action">Soft Skills</a>
        <a href="{{ route('technical-skills.index') }}" class="list-group-item list-group-item-action">Technical Skills</a>
    </div>
</div>
@endsection
