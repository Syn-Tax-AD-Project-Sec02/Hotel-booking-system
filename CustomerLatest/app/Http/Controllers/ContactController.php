<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'PhoneNumber' => 'required|string|max:15',
            'Message' => 'required|string',
        ]);

        Contact::create([
            'name' => $validatedData['Name'],
            'email' => $validatedData['Email'],
            'phone_number' => $validatedData['PhoneNumber'],
            'message' => $validatedData['Message'],
        ]);

        return back()->with('success', 'Message sent successfully.');
    }
}
