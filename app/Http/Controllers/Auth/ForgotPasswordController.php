<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;


class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('Admin.user.forgot_password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        Log::info('Sending reset link email to: ' . $request->email);
       // Mail::to($toEmail)->send(new WelcomeEmail($message));
        $status = Password::sendResetLink(
            $request->only('email')
        );

        Log::info('Password reset link status: ', ['status' => $status]);

        // Check if the reset link was sent successfully and return the appropriate response
        if ($status === Password::RESET_LINK_SENT) {
            // Log the success message
            Log::info('Password reset link successfully sent to: ' . $request->email);
            return back()->with(['status' => __($status)]);
        } else {
            // Log the error message
            Log::error('Failed to send password reset link to: ' . $request->email);
            return back()->withErrors(['email' => __($status)]);
        }
    }

    public function showResetForm($token)
    {
        return view('auth.passwords.reset', ['token' => $token]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = bcrypt($password);
                $user->save();
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
