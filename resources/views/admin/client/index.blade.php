@extends('layouts.admin')

@section('title', 'Clients Dashboard')

@section('content')
<x-header>
    <h4 class="fw-semibold nav_logo text-primary">Client List</h4>
</x-header>

<div class="m-2">
    <button type="button" class="btn btn-success">Create Client</button>
</div>

<!-- Responsive Table Wrapper -->
<div class="table-responsive">
    <table class="table table-hover table-bordered">
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
                    <div class="gap-2 d-inline-flex">
                        <a href="#" class="btn btn-info btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Pagination Links with Smaller Size -->
<div class="p-2 mt-4 d-flex justify-content-center">
    {{ $getClients->links('pagination::bootstrap-5') }}
</div>
@endsection
