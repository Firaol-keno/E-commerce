<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller

{

  public function index() {
    $currentUser = Auth::user();
    $categories = Category::all();
    return view('add-product', compact('categories','currentUser'));
  }

  public function store(Request $request)
{
    $request->validate([
        'product_name' => 'required',
        'product_qty' => 'required|integer',
        'product_price' => 'required|numeric',
        'product_description' => 'required',
        'product_code' => 'required',
        'category_id' => 'required|exists:categories,id',
        'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_qty = $request->product_qty;
        $product->product_price = $request->product_price;
        $product->product_description = $request->product_description;
        $product->product_code = $request->product_code;
        $product->category_id = $request->category_id;
       
        if ($request->hasFile('thumbnail')) {
          $filename = time() . '.' . $request->thumbnail->extension();
          $request->thumbnail->move(public_path('thumbnails'), $filename);
          $product->thumbnail = $filename;
      }

       $product->save();
        return redirect('/dashboard')->with('success', 'Product created successfully.');
    }

    public function show()
    {
        $currentUser = Auth::user();
        $products = Product::all();
        return view('product-detail', compact('products', 'currentUser'));
    }

}

