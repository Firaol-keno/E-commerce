<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{

  public function index() {
    $cartItems = Cart::where('user_id', auth()->id())->with('product')->get();
    $products = Product::with('category')->get();
    return view('home',  compact('products', 'cartItems'));
  }

    public function home() {
     
      return view('index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|',
        ]);

        $cartItem = Cart::updateOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $request->product_id],
            ['quantity' => $request->quantity, 'size' => $request->size, 'color' => $request->color]
        );
        return redirect('/')->with('success', 'Product added to cart');
    }

    public function cartItemCount()
    {
        $userId = Auth::id(); // Get the ID of the authenticated user
        $cartCount = Cart::where('user_id', $userId)->count();

        return response()->json(['count' => $cartCount]);
    }
}

