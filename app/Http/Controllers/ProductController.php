<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->has('keyword')) {
            $products = Product::where('name', 'like', '%' . $request->keyword . '%')->paginate(10);
        } else {
            $products = Product::paginate(10);
        }
        $allProducts = Product::all()->count();
        $foodProducts = Product::where('category', 'food')->get()->count();
        $drinkProducts = Product::where('category', 'drink')->get()->count();
        $snackProducts = Product::where('category', 'snack')->get()->count();
        return view('pages.products.index', compact('products', 'allProducts', 'foodProducts', 'drinkProducts', 'snackProducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        Product::create($request->validated());
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pages.products.show', [
            'product' => Product::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pages.products.edit', [
            'product' => Product::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
