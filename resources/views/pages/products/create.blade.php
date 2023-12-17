@extends('layouts.app')

@section('title', 'Add New Product')

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
                    <div class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></div>
                    <div class="breadcrumb-item">Add New Product</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">New Product</h2>
                <p class="section-lead">Please fill all required data.</p>
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="card col-lg-6 col-sm-12">
                                <div class="card-header">
                                    <h4>Product Data</h4>
                                </div>
                                <form method="POST" action="{{ route('products.store') }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group row mb-4">
                                            <label
                                                class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                            <div class="col-sm-12 col-md-9">
                                                <input type="text" placeholder="Product Name" tabindex="1" autofocus
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
                                            <label
                                                class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                            <div class="col-sm-12 col-md-9">

                                                <textarea type="text" placeholder="Product Description" tabindex="2" autofocus
                                                    class="form-control summernote-simple @error('description') is-invalid @enderror" value="{{ old('description') }}"
                                                    name="description">{{ old('description') }}</textarea>

                                                @error('description')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label
                                                class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stock</label>
                                            <div class="col-sm-12 col-md-9">
                                                <input type="text" placeholder="Stock" tabindex="3" autofocus
                                                    class="form-control @error('stock') is-invalid @enderror"
                                                    value="{{ old('stock') }}" name="stock">

                                                @error('stock')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label
                                                class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                                            <div class="input-group col-sm-12 col-md-9">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        Rp
                                                    </div>
                                                </div>
                                                <input type="text" name="price"
                                                    class="form-control currency @error('price') is-invalid @enderror"
                                                    placeholder="Price" tabindex="4" autofocus value={{ old('price') }}>
                                                @error('price')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label
                                                class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                            <div class="col-sm-12 col-md-9">
                                                <input type="text" placeholder="Image URL" tabindex="5" autofocus
                                                    class="form-control @error('image') is-invalid @enderror"
                                                    value="{{ old('image') }}" name="image">

                                                @error('image')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row mb-6">
                                            <label class="form-label">Category</label>
                                            <div class="selectgroup w-100">
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="category" value="food"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button">Food</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="category" value="drink"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button">Drink</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="category" value="snack"
                                                        class="selectgroup-input" checked="">
                                                    <span class="selectgroup-button">Snack</span>
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
