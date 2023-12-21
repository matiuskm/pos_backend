@extends('layouts.app')

@section('title', 'User Detail')

@section('main')
    <div class="container-fluid pt-4 px-4">
        <div class="breadcrumb">
            <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></div>
            <div class="breadcrumb-item">{{ $user->name }}</div>
        </div>
        <div class="col-sm-12 col-xl-6 mx-auto">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">{{ $user->name }}</h6>
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" readonly name="name" value="{{ $user->name }}"
                            id="name" placeholder="User Name">
                        <label for="name">User name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com"
                            name="email" value="{{ $user->email }}" readonly>
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="phone" readonly placeholder="08123456789"
                            name="phone" value="{{ $user->phone }}">
                        <label for="phone">Phone number</label>
                    </div>

                    <div class="form-floating mb-4">
                        <select class="form-select" id="roles" name="roles" aria-label="Role" disabled>
                            <option value="user" @if ($user->roles == 'user') selected @endif>User</option>
                            <option value="staff" @if ($user->roles == 'staff') selected @endif>Staff</option>
                            <option value="admin" @if ($user->roles == 'admin') selected @endif>Admin</option>
                        </select>
                        <label for="roles">Role</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
