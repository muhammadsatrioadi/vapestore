<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function checkout()
{
    // Calculate or retrieve the total price
    $totalPrice = 10000; // Example value, replace with actual calculation

    // Pass the total price to the view
    return view('checkout')->with('totalPrice', $totalPrice);
}
}
?>