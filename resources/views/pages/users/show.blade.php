@extends('layouts.app')

@section('title', 'View User')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add New User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></div>
                    <div class="breadcrumb-item">View User</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">View User</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="card col-lg-6 col-sm-12">
                                <div class="card-header">
                                    <h4>User Data</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                        <div class="col-sm-12 col-md-9">
                                            {{ $user->name }}
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"
                                            for="email">Email</label>
                                        <div class="col-sm-12 col-md-9">
                                            {{ $user->email }}
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"
                                            for="phone">Phone</label>
                                        <div class="col-sm-12 col-md-9">
                                            {{ $user->phone }}
                                        </div>
                                    </div>

                                    <div class="form-group row mb-6">
                                        <label class="form-label">Role</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="roles" value="admin"
                                                    class="selectgroup-input"
                                                    @if ($user->roles == 'admin') checked @endif>
                                                <span class="selectgroup-button">Admin</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="roles" value="staff"
                                                    class="selectgroup-input"
                                                    @if ($user->roles == 'staff') checked @endif>
                                                <span class="selectgroup-button">Staff</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="roles" value="user"
                                                    class="selectgroup-input"
                                                    @if ($user->roles == 'user') checked @endif>
                                                <span class="selectgroup-button">User</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->


    <!-- Page Specific JS File -->
@endpush
