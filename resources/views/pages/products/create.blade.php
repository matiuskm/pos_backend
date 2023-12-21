@extends('layouts.app')

@section('title', 'Add New Product')

@section('main')
<div class="container-fluid pt-4 px-4">
    <div class="breadcrumb">
        <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></div>
        <div class="breadcrumb-item">Add New Product</div>
    </div>
    <div class="col-sm-12 col-xl-6 mx-auto">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">New Product</h6>
            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('name') is-invalid
                    @enderror"
                        name="name" value="{{ old('name') }}" id="name" placeholder="Product Name">
                    <label for="name">Product name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Put description here" id="description" name="description"
                        style="height: 150px;"></textarea>
                    <label for="description">Description</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('stock') is-invalid
                    @enderror"
                        name="stock" value="{{ old('stock') }}" id="stock" placeholder="Product Stock">
                    <label for="stock">Product stock</label>
                    @error('stock')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('price') is-invalid
                    @enderror"
                        name="price" value="{{ old('price') }}" id="price" placeholder="Product Price">
                    <label for="price">Product price</label>
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="category" name="category" aria-label="Category">
                        <option value="food">Food</option>
                        <option value="drink">Drink</option>
                        <option value="snack" selected>Snack</option>
                    </select>
                    <label for="category">Category</label>
                </div>
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Image</label>
                    <input class="form-control form-control-sm bg-dark @error('image') is-invalid @enderror" id="formFileSm"
                        type="file" name="image">
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
