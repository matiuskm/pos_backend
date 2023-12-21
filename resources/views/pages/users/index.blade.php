@extends('layouts.app')

@section('title', 'Users')

@section('main')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container-fluid pt-4 px-4">
        <div class="breadcrumb">
            <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></div>
            <div class="breadcrumb-item">User List</div>
        </div>
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">User List <button onclick="window.location='{{ route('users.create') }}'"
                            class="btn btn-outline-primary m-2">
                            <i class="fas fa-plus me-2"></i>Add New User
                        </button></h6>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td><a
                                                href="{{ route('users.show', $user->id) }}">{{ Str::limit($user->name, 30, ' (...)') }}</a>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>
                                            <a href='{{ route('users.edit', $user->id) }}'
                                                class="btn btn-square btn-outline-info m-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="button" data-toggle="modal" data-target="#deleteModal"
                                                onclick="event.preventDefault(); if (confirm('Are you sure?')) document.getElementById('delete-user-{{ $user->id }}').submit()"
                                                class="btn btn-square btn-outline-danger m-2">
                                                <i class="fas fa-times"></i>
                                            </button>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                class="d-none" id="delete-user-{{ $user->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $users->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
