@extends('layouts.admin')

@section('title', 'Users Dashboard')

@section('content')
<x-header>
    <h4 class="fw-semibold nav_logo text-primary">Users</h4>
</x-header>
<table class="table p-4 table-hover">
    <hr>
    <thead>
        <tr>
            <th scoope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Email Verified</th>
            <th scope="col">Created At</th>
            <th scope="col">Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($getUsers as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->email_verified_at ? 'Verified' : 'Not Verified' }}</td>
            <td>{{ $user->created_at->format('Y-m-d') }}</td>
            <td>{{ $user->is_admin ? 'Admin' : 'User' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Pagination Links with Smaller Size -->
<div class="p-2 mt-4">
    {{ $getUsers->links('pagination::bootstrap-5') }}
</div>
@endsection
