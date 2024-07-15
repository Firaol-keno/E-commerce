<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageUserController extends Controller
{
    public function index() {
        $currentUser = Auth::user();
        $users = User::all();
        return view('manage-user', compact('users','currentUser'));
    }

    public function destroy($id)
    {       
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/manage-user')->with('success', 'User deleted successfully.');
    }
}
