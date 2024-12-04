<?php

namespace App\Http\Controllers\Auth;
use App\Mail\ForgotPasswordMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Session;




class VerifyController extends Controller
{

    public function verify($id, $hash)
    {    Log::info("Received verification for ID: $id with Hash: $hash");
        $user = User::findOrFail($id);
        Log::info("User data: " . $user);

        if ($user->email_verification_token === $hash) {
            // Log before verifying email
            Log::info('Verification link clicked for user: ' . $user->email);

            // Mark the email as verified by setting the current timestamp
            $user->email_verified_at = now(); // This will store the verification time
            $user->email_verification_token = null; // Clear the token
            $user->save();

            // Log successful email verification
            Log::info('User email verified: ' . $user->email);

            return redirect('/login')->with('status', 'Your email has been verified! You can now log in.');
        }

        // Log failed verification attempt
        Log::warning('Invalid verification attempt for user ID: ' . $id);

        return redirect('/login')->with('error', 'Invalid verification link.');
    }
}
