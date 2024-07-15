<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ManageOrderController extends Controller
{
    public function allOrders()
    {
        $cartDetails = Cart::with('product', 'user')->get();
        $currentUser = Auth::user();
        return view('manage-orders', compact('cartDetails', 'currentUser'));
    }

}
