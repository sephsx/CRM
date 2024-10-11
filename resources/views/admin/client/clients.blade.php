@extends('layouts.admin')

@section('title', 'Clients Dashboard')
@section('content')
<x-header>
    <h4 class="fw-semibold nav_logo text-primary">Client List</h4>
</x-header>
<div class="m-2">
    <button type="button" class="p-2 btn btn-success">Create Client</button>
</div>
<table class="table p-4 table-hover">
    <hr>
    <thead>
        <tr>
            <th scope="col">Company</th>
            <th scope="col">Address</th>
            <th scope="col">VAT</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($getClients as $client)
        <tr>
            <td>{{ $client->company }}</td>
            <td>{{ $client->address }}</td>
            <td>{{ $client->vat }}</td>
            <td>
                <a href="#" class="btn btn-info">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

<!-- Pagination Links with Smaller Size -->
<div class="p-2 mt-4">
    {{ $getClients->links('pagination::bootstrap-5') }}
</div>
@endsection
