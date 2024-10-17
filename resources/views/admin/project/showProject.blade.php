@extends('layouts.admin')

@section('title', 'Project Dashboard')

@section('content')
<x-header>
    <div class="container py-3 d-flex justify-content-between align-items-center">
        <h4 class="mb-0 fw-semibold nav_logo text-primary">Project Dashboard</h4>

        <form class="d-flex" role="search" method="get" action="{{ route('admin.project.showProjects') }}">
            <input class="form-control me-2" type="search" name="query" placeholder="Search by title"
                aria-label="Search" value="{{ request('query') }}">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</x-header>

<div class="container mt-5">
    @if($projects->isEmpty())
    <div class="text-center alert alert-warning" role="alert">
        No projects available.
    </div>
    @else
    <div class="row g-4">
        @foreach($projects as $project)
        <div class="col-12 col-md-4">
            <div class="border-0 shadow-lg card h-100">
                <div class="text-white card-header bg-gradient-primary rounded-top">
                    <h5 class="mb-0 text-dark">Project: <strong>{{ $project->Title }}</strong></h5>
                </div>
                <div class="p-4 card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Description</th>
                            <td>{{ $project->Description }}</td>
                        </tr>
                        <tr>
                            <th>Deadline</th>
                            <td><span class="badge bg-danger">{{ \Carbon\Carbon::parse($project->deadline)->format('M d,
                                    Y') }}</span></td>
                        </tr>
                        <tr>
                            <th>Assigned User</th>
                            <td><span class="badge bg-info">{{ $project->user->name ?? 'N/A' }}</span></td>
                        </tr>
                        <tr>
                            <th>Assigned Client</th>
                            <td><span class="badge bg-success">{{ $project->client->company ?? 'N/A' }}</span></td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ \Carbon\Carbon::parse($project->created_at)->format('M d, Y h:i A') }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{ \Carbon\Carbon::parse($project->updated_at)->format('M d, Y h:i A') }}</td>
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
    @endif
</div>

@endsection
