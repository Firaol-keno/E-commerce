<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductGridController extends Controller
{
    public function index() {
        $currentUser = Auth::user();
        $products = Product::with('category')->get();
        return view('product-grid-view',  compact('products', 'currentUser'));      
    }
}
