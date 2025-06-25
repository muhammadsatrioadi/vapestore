<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Mendapatkan semua produk
    public function index()
    {
        $products = Product::all();
        return view('MNproduk', compact('products'));
    }

    // Menambah produk baru
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return redirect('/MNproduk')->with('success', 'Product created successfully');
    }

    // Mengedit produk
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product);
    }

    // Menghapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/MNproduk')->with('success', 'Product created successfully');
    }
}
