<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOutCompleteController extends Controller
{
    public function index() {
        $currentUser = Auth::user();
        return view('checkout-complete', compact('currentUser'));
    }
}
