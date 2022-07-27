@extends('layouts.main')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="breadcamb">
            <a href="{{ route('home') }}" class="text-primary">Home</a> / <span>Users</span>
        </div>
    </div>
    @if(session()->has('message'))
    <div class="alert alert-sucsess">
        {{ session('message') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header">
        <h4 class="m-0 font-weight-bold text-primary float-left">Users</h4>
        <a class="float-right btn btn-primary" href="{{ route('users.create') }}">Create User</a>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Manage</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td scope="row">{{ $user->id }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><a href="{{ route('users.edit', $user->id) }}">Edit</a> | <a href="#">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection