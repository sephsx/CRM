@extends('layouts.admin')

@section('title', 'Project Dashboard')

@section('content')
<x-header>
    <h4 class="fw-semibold nav_logo text-primary">Project Dashboard</h4>
</x-header>

<div class="container mt-5">
    <div class="row g-4">
        @foreach($project as $projects)
        <div class="col-12 col-md-4">
            <!-- For 3 columns per row -->
            <div class="border-0 shadow-lg card h-100">
                <div class="text-white card-header bg-gradient-primary rounded-top">
                    <h5 class="mb-0 text-dark">Project: <strong>{{ $projects->Title }}</strong></h5>
                </div>
                <div class="p-4 card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Description</th>
                            <td>{{ $projects->Description }}</td>
                        </tr>
                        <tr>
                            <th>Deadline</th>
                            <td><span class="badge bg-danger">{{ $projects->deadline }}</span></td>
                        </tr>
                        <tr>
                            <th>Assigned User</th>
                            <td><span class="badge bg-info">{{ $projects->assigned_user }}</span></td>
                        </tr>
                        <tr>
                            <th>Assigned Client</th>
                            <td><span class="badge bg-success">{{ $projects->assigned_client }}</span></td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ \Carbon\Carbon::parse($projects->created_at)->format('M d, Y h:i A') }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{ \Carbon\Carbon::parse($projects->updated_at)->format('M d, Y h:i A') }}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer bg-light text-end">
                    <button class="btn btn-primary">Edit Project</button>
                    <button class="btn btn-danger">Delete Project</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
