@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<x-header>
    <h4 class="fw-semibold nav_logo"> Dashboard</h4>
</x-header>

<div class="container py-3">
    <div class="row">
        <!-- Users Card -->
        <div class="mb-3 col-sm-12 col-md-6 col-lg-4">
            <div class="card border-secondary h-100">
                <div class="card-header d-flex align-items-center">
                    <i class='bx bx-user nav_icon me-2'></i>
                    <span>Users</span>
                </div>
                <div class="text-center card-body">
                    <h4 class="card-title text-primary">Total Users</h4>
                    <div class="my-3">
                        <div class="text-large" style="font-size: 3rem; font-weight: bold;">
                            {{ $totalUser }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Clients Card -->
        <div class="mb-3 col-sm-12 col-md-6 col-lg-4">
            <div class="card border-secondary h-100">
                <div class="card-header d-flex align-items-center">
                    <i class='bx bx-group nav_icon me-2'></i>
                    <span>Clients</span>
                </div>
                <div class="text-center card-body">
                    <h4 class="card-title text-primary">Total Clients</h4>
                    <div class="my-3">
                        <div class="text-large" style="font-size: 3rem; font-weight: bold;">
                            {{ $totalClient }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projects Card -->
        <div class="mb-3 col-sm-12 col-md-6 col-lg-4">
            <div class="card border-secondary h-100">
                <div class="card-header d-flex align-items-center">
                    <i class='bx bx-briefcase nav_icon me-2'></i>
                    <span>Projects</span>
                </div>
                <div class="text-center card-body">
                    <h4 class="card-title text-primary">Total Projects</h4>
                    <div class="my-3">
                        <div class="text-large" style="font-size: 3rem; font-weight: bold;">
                            {{ $totalProject }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Card -->
        <div class="mb-3 col-sm-12 col-md-6 col-lg-4">
            <div class="card border-secondary h-100">
                <div class="card-header d-flex align-items-center">
                    <i class='bx bx-task nav_icon me-2'></i>
                    <span>Tasks</span>
                </div>
                <div class="text-center card-body">
                    <h4 class="card-title text-primary">Total Tasks</h4>
                    <div class="my-3">
                        <div class="text-large" style="font-size: 3rem; font-weight: bold;">
                            {{ $totalTask }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
