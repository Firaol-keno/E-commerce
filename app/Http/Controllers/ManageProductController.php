<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageProductController extends Controller
{
   public function index() {
    $currentUser = Auth::user();
    $products = Product::all();
    return view('manage-product', compact('currentUser', 'products'));
  }

  public function destroy($id)
    {       
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/manage-product')->with('success', 'User deleted successfully.');
    }
}





