<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactMailController extends Controller
{
    //
    function contactEmail(Request $request) {
        $request->validate([
            'email'=> 'required|email'
        ]);

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'contact' => $request->contact,
            'message' => $request->message,
        ];

        Mail::to('mr.binara@gmail.com')->send(new ContactEmail($data));

        Session::flash('success', 'Your message has been sent successfully. Thank you!');

        // Redirect back to the previous page
        return back();

    }
}
