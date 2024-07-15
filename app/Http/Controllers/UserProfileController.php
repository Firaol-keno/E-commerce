<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index() {
        $currentUser = Auth::user();
        return view('user-profile', compact('currentUser'));
    }

    public function edit() {
        $currentUser = Auth::user();
        return view('edit-profile', compact('currentUser'));
    }
}
