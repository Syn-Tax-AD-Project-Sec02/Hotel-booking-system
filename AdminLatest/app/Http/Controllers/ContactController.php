<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Contact::all();
        return view('Admin.ContactUs.Contact', compact('messages'));
    }
}
