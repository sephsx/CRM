<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<x-header>
    <h4 class="fw-semibold nav_logo"> Dashboard</h4>
</x-header>
<div class="container grid grid-cols-1 gap-4 py-3 d-flex md:grid-cols-2 lg:grid-cols-3">
    <div class="mb-3 card border-secondary" style="max-width: 20rem;">
        <div class="card-header">
            <i class='bx bx-user nav_icon'></i>
            <span>Users</span>
        </div>
        <div class="card-body">
            <h4 class="card-title">Secondary card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
    </div>
    <div class="mb-3 card border-secondary" style="max-width: 20rem;">
        <div class="card-header">
            <i class='bx bxs-group nav_icon'></i>
            <span>Clients</span>
        </div>
        <div class="card-body">
            <h4 class="card-title">Secondary card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
    </div>
    <div class="mb-3 card border-secondary" style="max-width: 20rem;">
        <div class="card-header">
            <i class='bx bx-briefcase nav_icon'></i>
            <span>Projects</span>
        </div>
        <div class="card-body">
            <h4 class="card-title">Secondary card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
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
