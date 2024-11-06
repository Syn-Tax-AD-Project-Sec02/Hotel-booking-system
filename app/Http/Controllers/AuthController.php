<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('login'); // Adjust this to your actual login view
    }

    // Handle login request
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            //'optionsRadios' => 'required', // Validate role selection
        ]);

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        // Check if the user exists and if the password matches
        if ($user && Hash::check($request->password, $user->password)) {
            // Login the user
            Auth::login($user);
            return redirect()->intended('/dashboard'); // Redirect to a dashboard or home page
        }

        // Redirect back with an error if authentication fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Logout the user
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
