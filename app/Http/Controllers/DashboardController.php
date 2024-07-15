<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

  public function index() {
    $currentUser = Auth::user();
    $products = Product::all();
    return view('dashboard', compact('currentUser', 'products'));
  }
}

