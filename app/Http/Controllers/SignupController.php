<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'required| string|max:15',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $avatarName = time().'.'.$request->avatar->extension();  
        $request->avatar->move(public_path('avatars'), $avatarName);

        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'avatar' => $avatarName,
            'is_admin' => 0, // Set is_admin to 0
        ]);

        return redirect('/signin')->with('success', 'Account created successfully!');
    }
}
