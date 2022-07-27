@extends('layouts.main')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="breadcamb">
            <a href="{{ route('home') }}" class="text-primary">Home</a> / <a href="{{ route('users.index') }}" class="text-primary">Users</a> / <span>Update User</span>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="m-0 font-weight-bold text-primary float-left">Update User</h4>
            <a class="float-right btn btn-primary rounded-0" href="{{ route('users.index') }}">Back</a>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="UserForm">
                <form class="user" method="post" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user @error('first_name') is-invalid @enderror" id="first_name"
                                placeholder="First Name" name="first_name" value="{{ old('first_name',$user->first_name) }}" required autocomplete="first_name" autofocus>
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user @error('last_name') is-invalid @enderror" id="last_name"
                                placeholder="Last Name" name="last_name" value="{{ old('last_name',$user->last_name) }}" required autocomplete="last_name" autofocus>
                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" value="{{ old('username',$user->username) }}" required autocomplete="username" autofocus>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email"
                            placeholder="Email Address" name="email" value="{{ old('email',$user->email) }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="BtnSubmit" class="btn btn-success rounded-0">{{ __('Update User') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection