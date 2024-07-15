<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductListController extends Controller
{
    public function index() {
        $currentUser = Auth::user();
        $products = Product::with('category')->get();
        return view('product-list-view',  compact('products', 'currentUser'));      
    }
}
