@extends('layouts.admin')

@section('title', 'Task Dashboard')

@section('content')
<x-header>
    <h4 class="fw-semibold nav_logo text-primary">Task</h4>
</x-header>

<!-- Responsive Table Wrapper -->
<div class="table-responsive">
    <table class="table table-hover table-bordered">
        <hr>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Deadline</th>
                <th scope="col">Assigned User</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ Str::limit($task->description, 50) }}</td>
                <td>{{ \Carbon\Carbon::parse($task->deadline)->format('Y-m-d') }}</td>
                <td>{{ $task->assigned_user }}</td>
                <td>{{ $task->status }}</td>
                <td>
                    <div class="gap-2 d-inline-flex">
                        <a href="#" class="btn btn-info btn-sm">View</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="p-2 mt-4 d-flex justify-content-center">
    {{ $tasks->links('pagination::bootstrap-5') }}
</div>
@endsection
