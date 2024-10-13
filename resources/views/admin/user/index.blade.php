@extends('layouts.admin')

@section('title', 'Users Dashboard')

@section('content')
<x-header>
    <h4 class="fw-semibold nav_logo text-primary">Users</h4>
</x-header>

<!-- Responsive Table Wrapper -->
<div class="table-responsive">
    <table class="table table-hover table-bordered">
        <hr>
        <thead>
            <tr>
                <th scope="col">ID</th>
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
</div>

<!-- Pagination Links with Smaller Size -->
<div class="mt-4 d-flex justify-content-center">
    {{ $getUsers->links('pagination::bootstrap-5') }}
</div>
@endsection
