<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Mendapatkan semua produk
    public function index()
    {
        $products = Product::all();
        return view('produk', compact('products'));
    }

    // Menambah produk baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['gambar'] = 'images/' . $imageName;
        }

        Product::create($data);
        return redirect('/MNproduk')->with('success', 'Produk berhasil ditambahkan!');
    }

    // Mengedit produk
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        
        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($product->gambar) {
                $oldImagePath = public_path('images/' . $product->gambar);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            
            // Upload new image
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            
            $product->gambar = $imageName;
        }
        
        $product->nama = $request->nama;
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;
        $product->save();
        
        return response()->json($product);
    }

    // Menghapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        
        // Delete image file
        if ($product->gambar) {
            $imagePath = public_path('images/' . $product->gambar);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
