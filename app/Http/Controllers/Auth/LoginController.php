<?php

namespace App\Http\Controllers\Auth;


use App\Models\Admin;
use App\Models\User;
use App\Models\Staff;
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
        return view('/'); // Return your Blade template
    }

    public function adminIndex()
    {
        return view('Admin.Dashboard.index'); // Adjust the view path as needed
    }

    public function staffIndex()
    {
        return view('Staff.Dashboard.index'); // Adjust the view path as needed
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'optionsRadios' => 'required'
        ]);

        Log::info('Login attempt:', ['email' => $request->email, 'role' => $request->optionsRadios]);
        
        $user = null;

        if ($request->optionsRadios == 'admin') {
            // Query admin collection
            $user = Admin::where('email', $request->email)->first();
        } else if($request->optionsRadios == 'staff'){
            // Query user collection (staff)
            $user = Staff::where('email', $request->email)->first();
        }

        Log::info('User found: ' . ($user ? 'Yes' : 'No'));
       // Log::info('Checking password for user: ' . $user->email);
    
        if ($user && Hash::check($request->password, $user->password)) {
            Log::info('Password verified.');

              // Log the user role and requested role
            Log::info('User role: ' . $user->role);
            Log::info('Requested role: ' . $request->optionsRadios);

    
            // Check if the user's role matches the selected option
            if ($user->role === $request->optionsRadios) {
                Auth::login($user);
                Log::info('User authenticated and role matched: ' . $user->role);
    
                // Redirect based on role
                if ($user->role === 'admin') {
                    Log::info('Redirecting to admin dashboard.');
                    return redirect()->route('admin.dashboard.index');
                } elseif ($user->role === 'staff') {
                    Log::info('Redirecting to staff dashboard.');
                    return redirect()->route('staff.dashboard.index');
                }
            } else {
                // Role mismatch
                return back()->withErrors(['email' => 'You do not have permission to access this dashboard.']);
            }
    }
}

}