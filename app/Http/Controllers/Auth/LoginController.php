<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('Admin.LoginRegister'); // Return your Blade template
    }

    

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        

        Log::info('Login attempt:', ['email' => $request->email]);
        $user = null;

        $user = User::where('email', $request->email)->first();
        
        Log::info('User found: ' . ($user ? 'Yes' : 'No'));
        Log::info('Password check: ' . (Hash::check($request->password, $user->password) ? 'Match' : 'No match'));

        if ($user && Hash::check($request->password, $user->password)) {
            Log::info('Password verified successfully.');
            if ($user->email_verified_at === null) {
                return redirect()->back()->with('error', 'Your email is not verified. Please check your inbox.');
            }
        
            Auth::login($user);

            Log::info('Redirecting to homepage.');
            return redirect('/');
    
        }
        else {
                // If user doesn't exist or password is incorrect
          return back()->withErrors(['email' => 'These credentials do not match our records.']);
        }
    }

    public function logout(Request $request)
        {
            Auth::logout(); // Logs out the user
            $request->session()->invalidate(); // Invalidate the session
            $request->session()->regenerateToken(); // Regenerate the CSRF token
            Log::info('logout');
            return redirect('/'); // Redirect to the homepage or login page
        }

}

