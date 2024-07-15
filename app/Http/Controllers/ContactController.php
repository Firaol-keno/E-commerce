<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to($request->email)->send(new ContactUsMail($details));

        return back()->with('success', 'message has been sent successfully!');
    }

    
}