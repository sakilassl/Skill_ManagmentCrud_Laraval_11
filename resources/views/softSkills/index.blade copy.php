<!-- resources/views/qualifications/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Qualifications</h2>
    <a href="{{ route('qualifications.create') }}" class="btn btn-primary">Add Qualification</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Profile ID</th>
                <th>Qualification Name</th>
                <th>Institution</th>
                <th>Date Obtained</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($qualifications as $qualification)
            <tr>
                <td>{{ $qualification->profile_id }}</td>
                <td>{{ $qualification->qualification_name }}</td>
                <td>{{ $qualification->institution }}</td>
                <td>{{ $qualification->date_obtained }}</td>
                <td>
                    <a href="{{ route('qualifications.show', $qualification->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('qualifications.edit', $qualification->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('qualifications.destroy', $qualification->id) }}" method="POST" style="display:inline;">
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
