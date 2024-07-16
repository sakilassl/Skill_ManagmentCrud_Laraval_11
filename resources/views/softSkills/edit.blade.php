<!-- resources/views/softSkills/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Soft Skill</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('soft-skills.update', $softSkill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="profile_id">Profile ID</label>
            <input type="hidden" class="form-control" id="profile_id" name="profile_id" value="{{ $softSkill->profile_id }}" required>
        </div>
        <div class="form-group">
            <!-- <label for="soft_skill">Soft Skill</label> -->
            <input type="text" class="form-control" id="soft_skill" name="soft_skill" value="{{ $softSkill->soft_skill }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('soft-skills.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div
