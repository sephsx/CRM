@extends('layouts.admin')

@section('title', 'Projects Dashboard')

@section('content')
<x-header>
    <h4 class="fw-semibold nav_logo text-primary">Project</h4>
</x-header>
<div class="container my-5">
    <span class="text-primary fs-4">Create Project</span>
    <hr>
    <form action="{{ route('admin.project.index') }}" method="post">
        @csrf
        <div class="row">
            <!-- Title -->
            <div class="mb-3 col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter project title"
                    required>
            </div>

            <!-- Deadline -->
            <div class="mb-3 col-md-6">
                <label for="deadline" class="form-label">Deadline</label>
                <input type="date" class="form-control" id="deadline" name="deadline" required>
            </div>

            <!-- Description -->
            <div class="mb-3 col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                    placeholder="Enter project description" required></textarea>
            </div>

            <!-- Assigned User -->
            <div class="mb-3 col-md-6">
                <label for="assigned_user" class="form-label">Assigned User</label>
                <select class="form-select" id="assigned_user" name="assigned_user">
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Assigned Client -->
            <div class="mb-3 col-md-6">
                <label for="assigned_client" class="form-label">Assigned Client</label>
                <select class="form-select" id="assigned_client" name="assigned_client">
                    @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->company }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Submit Button -->
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection
