<!-- resources/views/profiles/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Profiles</h2>
    <a href="{{ route('profiles.create') }}" class="btn btn-primary mb-3">Add Profile</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Profile ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($profiles as $profile)
            <tr>
                <td>{{ $profile->id }}</td>
                <td>{{ $profile->name }}</td>
                <td>{{ $profile->email }}</td>
                

                <td>
                    <a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
