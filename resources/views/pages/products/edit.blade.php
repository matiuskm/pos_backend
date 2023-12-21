@extends('layouts.app')

@section('title', 'Edit Product')

@section('main')
    <div class="container-fluid pt-4 px-4">
        <div class="breadcrumb">
            <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></div>
            <div class="breadcrumb-item">Edit Product</div>
        </div>
        <div class="col-sm-12 col-xl-6 mx-auto">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Editing {{ $product->name }}</h6>
                <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        @if ($product->image)
                            <img src="{{ asset('storage/products/' . $product->image) }}" data-toggle="tooltip"
                                title="{{ $product->name }}" class="img-fluid col-12 col-md-12 col-lg-12 rounded">
                        @else
                            <img src="{{ asset('img/placeholder.jpeg') }}" data-toggle="tooltip"
                                title="{{ $product->name }}" class="img-fluid col-12 col-md-12 col-lg-12 rounded">
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}"
                            id="name" placeholder="Product Name">
                        <label for="name">Product name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Put description here" id="description" name="description"
                            style="height: 150px;">{{ $product->description }}</textarea>
                        <label for="description">Description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="stock" value="{{ $product->stock }}"
                            id="stock" placeholder="Product Stock">
                        <label for="stock">Product stock</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="price" value="{{ $product->price }}"
                            id="price" placeholder="Product Price">
                        <label for="price">Product price</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="category" name="category" aria-label="Category">
                            <option value="food" @if ($product->category == 'food') selected @endif>Food</option>
                            <option value="drink" @if ($product->category == 'drink') selected @endif>Drink</option>
                            <option value="snack" @if ($product->category == 'snack') selected @endif>Snack</option>
                        </select>
                        <label for="category">Category</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Image</label>
                        <input class="form-control form-control-sm bg-dark @error('image') is-invalid @enderror"
                            id="formFileSm" type="file" name="image">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
