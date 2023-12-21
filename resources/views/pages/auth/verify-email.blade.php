@extends('layouts.auth')

@section('title', 'Sign In - POS Arunika')

@section('main')
    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa fa-exclamation-circle me-2"></i>
                        A new email verification link has been emailed to you!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="/" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>POS Arunika</h3>
                        </a>
                    </div>
                    <div class="text-center mb-5">
                        <h3>Verify e-mail address</h3>
                        <p>You must verify your email address to access this page.</p>
                    </div>
                    <form method="POST" action="{{ route('verification.send') }}" class="text-center">
                        @csrf
                        <button type="submit" class="btn btn-primary">Resend verification email</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
@endsection
