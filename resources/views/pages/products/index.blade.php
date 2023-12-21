@extends('layouts.app')

@section('title', 'Products')

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
            <div class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></div>
            <div class="breadcrumb-item">Product List</div>
        </div>
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Product List <button onclick="window.location='{{ route('products.create') }}'"
                            class="btn btn-outline-primary m-2">
                            <i class="fas fa-plus me-2"></i>Add New Product
                        </button></h6>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Product Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            @if ($product->image)
                                                <img alt="image" src="{{ asset('storage/products/' . $product->image) }}"
                                                    class="img-thumbnail rounded" width="35" data-toggle="tooltip"
                                                    title="{{ $product->name }}">
                                            @else
                                                <img alt="image" src="{{ asset('img/placeholder.jpeg') }}"
                                                    class="img-thumbnail rounded" width="35" data-toggle="tooltip"
                                                    title="{{ $product->name }}">
                                            @endif
                                        </td>
                                        <td><a
                                                href="{{ route('products.show', $product->id) }}">{{ Str::limit($product->name, 30, ' (...)') }}</a>
                                        </td>
                                        <td>{{ ucfirst($product->category) }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                        <td>
                                            <a href='{{ route('products.edit', $product->id) }}'
                                                class="btn btn-square btn-outline-info m-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href='#'
                                                onclick="event.preventDefault(); if (confirm('Are you sure?')) document.getElementById('delete-product-{{ $product->id }}').submit()"
                                                class="btn btn-square btn-outline-danger m-2">
                                                <i class="fas fa-times"></i>
                                            </a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                                class="d-none" id="delete-product-{{ $product->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $products->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
