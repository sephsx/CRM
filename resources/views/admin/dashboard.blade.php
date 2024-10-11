<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<x-header>
    <h4 class="fw-semibold nav_logo"> Dashboard</h4>
</x-header>
<div class="container grid grid-cols-1 gap-4 py-3 d-flex md:grid-cols-2 lg:grid-cols-3">
    <div class="mb-3 card border-secondary" style="max-width: 20rem;">
        <div class="card-header d-flex align-items-center">
            <i class='bx bx-user nav_icon me-2'></i>
            <span>Users</span>
        </div>
        <div class="text-center card-body">
            <!-- Center content in card body -->
            <h4 class="card-title text-primary">Total Users</h4>
            <div class="my-3">
                <div class="text-large" style="font-size: 3rem; font-weight: bold;">
                    {{ $totalUser }}
                </div>
            </div>
        </div>
    </div>

    <div class="mb-3 card border-secondary" style="max-width: 20rem;">
        <div class="card-header d-flex align-items-center">
            <i class='bx bx-group nav_icon me-2'></i>
            <span>Clients</span>
        </div>
        <div class="text-center card-body">
            <!-- Center content in card body -->
            <h4 class="card-title text-primary">Total Clients</h4>
            <div class="my-3">
                <div class="text-large" style="font-size: 3rem; font-weight: bold;">
                    {{ $totalClient }}
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3 card border-secondary" style="max-width: 20rem;">
        <div class="card-header d-flex align-items-center">
            <i class='bx bx-briefcase nav_icon me-2'></i>
            <span>Projects</span>
        </div>
        <div class="text-center card-body">
            <!-- Center content in card body -->
            <h4 class="card-title text-primary">Total Projects</h4>
            <div class="my-3">
                <div class="text-large" style="font-size: 3rem; font-weight: bold;">
                    {{ $totalProject}}
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3 card border-secondary" style="max-width: 20rem;">
        <div class="card-header">
            <i class='bx bx-task nav_icon'></i>
            <span class="nav_name">Tasks</span>
        </div>
        <div class="card-body">
            <h4 class="card-title">Secondary card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
    </div>
</div>
@endsection
