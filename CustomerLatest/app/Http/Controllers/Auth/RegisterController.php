<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{




    public function register(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|string|max:15',
            'role' => 'required|in:staff,student,public',
            'matricStaffNo' => 'nullable|string',
        ]);

    
        // Save user to MongoDB
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->role = $request->role;
        if ($request->role === 'Student' || $request->role === 'Staff') {
            $user->matricStaffNo = $request->matricStaffNo;  // Set the matricStaffNo
        } else {
            $user->matricStaffNo = null;  // Nullify it for 'public'
        }
        //$user->staff_no => $request->role === 'staff' ? $request->staff_no : null,
       // $user->confirmPassword = Hash::make($request->confirmPassword);
       $user->email_verification_token = Str::random(60);
        $user->save();

        // Send verification email
        Mail::to($user->email)->send(new VerifyMail($user));

        // Log the email verification event
        Log::info('Email verification sent to: ' . $user->email);
        return redirect()->route('login')
        ->with('success', 'Registration successful! Please check your email for the verification link.');
        //return redirect()->route('forgotPassword');
    }
}
