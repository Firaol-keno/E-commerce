<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        $currentUser = Auth::user();
        $cartItems = Cart::where('user_id', auth()->id())->with('product')->get();
        $subtotal = 0;
        
        foreach ($cartItems as $item) {
            $subtotal += $item->product->product_price * $item->quantity;
        }

        $shipping = 0; //  it update it as needed
        $taxes = $subtotal * 0.07; //  tax rate, it adjust accordingly
        $discount = 0; // updated as needed
        $total = $subtotal + $shipping + $taxes - $discount;
    
        return view('payment', compact('cartItems', 'subtotal', 'shipping', 'taxes', 'discount', 'total', 'currentUser'));
    }
}
