<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageProfileController extends Controller
{
    /**
     * Display the authenticated user's profile.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();

        return view('Staff.User.profile', compact('user'));
    }
}