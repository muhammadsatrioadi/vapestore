<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::where('user_id', auth()->id())->get();
        return view('listbarang', compact('carts'));
    }

    public function store(Request $request)
    {
        $cart = new Cart();
        $cart->user_id = auth()->id();
        $cart->produk_id = $request->produk_id;
        $cart->save();

        return redirect()->route('listbarang');
    }

}
