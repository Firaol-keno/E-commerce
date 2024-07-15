<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{

  public function index() {
    $currentUser = Auth::user();
    return view('add-category', compact('currentUser'));
  }

  public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Category::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect('/dashboard')->with('success', 'Category created successfully.');
    }
}

