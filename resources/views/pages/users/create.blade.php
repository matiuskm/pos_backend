@extends('layouts.app')

@section('title', 'Add New User')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('library/codemirror/theme/duotone-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add New User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></div>
                    <div class="breadcrumb-item">Add New User</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">New User</h2>
                <p class="section-lead">Please fill all required data.</p>
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="card col-lg-6 col-sm-12">
                                <div class="card-header">
                                    <h4>User Data</h4>
                                </div>
                                <form method="POST" action="{{ route('users.store') }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group row mb-4">
                                            <label
                                                class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                            <div class="col-sm-12 col-md-9">
                                                <input type="text" placeholder="Full Name" tabindex="1" autofocus
                                                    class="form-control @error('name') is-invalid
                                            @enderror"
                                                    value="{{ old('name') }}" name="name">

                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"
                                                for="email">Email</label>
                                            <div class="col-sm-12 col-md-9">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid
                                        @enderror"
                                                    value="{{ old('email') }}" tabindex="2" placeholder="Email Address"
                                                    autofocus name="email">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"
                                                for="phone">Phone</label>
                                            <div class="col-sm-12 col-md-9">
                                                <input id="phone" type="text"
                                                    class="form-control @error('phone') is-invalid
                                        @enderror"
                                                    value="{{ old('phone') }}" tabindex="3" placeholder="Phone Number"
                                                    autofocus name="phone">
                                                @error('phone')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"
                                                for="password" class="d-block">Password</label>
                                            <div class="col-sm-12 col-md-9">
                                                <input id="password" type="password" tabindex="4"
                                                    class="form-control pwstrength @error('password') is-invalid
                                        @enderror"
                                                    data-indicator="pwindicator" name="password">
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-6">
                                            <label class="form-label">Role</label>
                                            <div class="selectgroup w-100">
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="roles" value="admin"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button">Admin</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="roles" value="staff"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button">Staff</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="roles" value="user"
                                                        class="selectgroup-input" checked="">
                                                    <span class="selectgroup-button">User</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-6 justify-content-center">

                                            <div class="col-sm-12 col-md-7">
                                                <button class="btn btn-block btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('library/codemirror/lib/codemirror.js') }}"></script>
    <script src="{{ asset('library/codemirror/mode/javascript/javascript.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
@endpush
