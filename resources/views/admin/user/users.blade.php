@extends('layouts.admin')

@section('title', 'Users')

@section('content')
<x-header>
    <h4>Users</h4>
</x-header>
<div class="container grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
    <div class="mb-3 card border-secondary" style="max-width: 20rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h4 class="card-title">Secondary card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
    </div>
</div>
@endsection
