<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Data yang akan dikirim ke email
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Kirim email
        Mail::to('saifulloh.rahman028@student.unud.ac.id')->send(new ContactFormMail($data));

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }
}