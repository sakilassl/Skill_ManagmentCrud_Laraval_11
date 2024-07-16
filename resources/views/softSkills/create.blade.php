<!-- resources/views/softSkills/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add Soft Skill</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('soft-skills.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="profile_id">Profile ID</label>
            <input type="text" class="form-control" id="profile_id" name="profile_id" required>
        </div>
        <div class="form-group">
            <label for="soft_skill">Soft Skill</label>
            <input type="text" class="form-control" id="soft_skill" name="soft_skill" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
