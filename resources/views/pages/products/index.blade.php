@extends('layouts.app')

@section('title', 'Products')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Products</h1>
                <div class="section-header-button">
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Products</a></div>
                    <div class="breadcrumb-item">All Products</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Products</h2>
                <p class="section-lead">
                    You can manage all products, such as editing, deleting and more.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="card mb-0">
                            <div class="card-body">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">All <span
                                                class="badge badge-white">{{ $allProducts }}</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Food
                                            <span class="badge badge-primary">{{ $foodProducts }}</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Drink
                                            <span class="badge badge-primary">{{ $drinkProducts }}</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Snack
                                            <span class="badge badge-primary">{{ $snackProducts }}</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Products</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action={{ route('products.index') }}>
                                        <div class="input-group">
                                            <input type="text" value="{{ old('keyword') }}" class="form-control"
                                                placeholder="Search" name="keyword">

                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>Product Image</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Stock</th>
                                            <th>Price</th>
                                        </tr>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>
                                                    <img alt="image" src="{{ $product->image }}" class="rounded"
                                                        width="35" data-toggle="tooltip" title="{{ $product->name }}">
                                                </td>
                                                <td>{{ Str::limit($product->name, 30, ' (...)') }}
                                                    <div class="table-links">
                                                        <a href="{{ route('products.show', $product->id) }}">View</a>
                                                        <div class="bullet"></div>
                                                        <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                                                        <div class="bullet"></div>
                                                        <a href="#"
                                                            onclick="event.preventDefault(); document.getElementById('delete-product-{{ $product->id }}').submit()"
                                                            class="text-danger">Trash</a>
                                                        <form action="{{ route('products.destroy', $product->id) }}"
                                                            method="POST" class="d-none"
                                                            id="delete-product-{{ $product->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ ucfirst($product->category) }}
                                                </td>
                                                <td>
                                                    {{ $product->stock }}
                                                </td>
                                                <td>
                                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                {{ $products->withQueryString()->links() }}
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
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
