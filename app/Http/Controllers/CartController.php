<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;

class CartController extends Controller
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
        $discount = 0; // update as needed
        $total = $subtotal + $shipping + $taxes - $discount;
    
        return view('add-cart', compact('cartItems', 'subtotal', 'shipping', 'taxes', 'discount', 'total', 'currentUser'));
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

        return redirect('add-cart')->with('success', 'Product added to cart');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|',
        ]);

        $cartItem = Cart::findOrFail($id);
        $cartItem->update(['quantity' => $request->quantity]);

        return redirect('add-cart')->with('success', 'Cart updated');
    }

    public function destroy($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();

        return redirect('add-cart')->with('success', 'Item removed from cart');
    }
}