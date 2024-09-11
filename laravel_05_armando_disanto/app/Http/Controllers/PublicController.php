<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }

    public function contactUs()
    {
        return view('contattaci');
    }

    public function categorie()
    {
        return view('categorie');
    }

    public function submit(Request $request)
    {
        $name = $request->input('username');
        $email = $request->input('email');
        $message = $request->input('message');

        Mail::to($email)->send(new ContactMail($name, $email, $message));

        return redirect()->route('homepage')->with('status', 'email inviata correttamente');
    }

    // spedizione email

}
