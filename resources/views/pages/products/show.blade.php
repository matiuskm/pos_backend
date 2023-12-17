@extends('layouts.app')

@section('title', 'Item Detail')

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
                <h1>{{ $product->name }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></div>
                    <div class="breadcrumb-item">{{ $product->name }}</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">{{ $product->name }}</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="card col-lg-6 col-sm-12">
                                <div class="card-header">
                                    <img src="{{ $product->image }}" data-toggle="tooltip" title="{{ $product->name }}"
                                        class="img-fluid col-12 col-md-12 col-lg-12 rounded">
                                </div>
                                <div class="card-body">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"
                                            for="email">Stock</label>
                                        <div class="col-sm-12 col-md-9">
                                            <input type="text" class="form-control" value="{{ $product->stock }}"
                                                readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"
                                            for="phone">Price</label>
                                        <div class="input-group col-sm-12 col-md-9">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    Rp
                                                </div>
                                            </div>
                                            <input type="text" class="form-control currency"
                                                value="{{ number_format($product->price, 0, ',', '.') }}" readonly>
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
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('library/codemirror/lib/codemirror.js') }}"></script>
    <script src="{{ asset('library/codemirror/mode/javascript/javascript.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
@endpush
