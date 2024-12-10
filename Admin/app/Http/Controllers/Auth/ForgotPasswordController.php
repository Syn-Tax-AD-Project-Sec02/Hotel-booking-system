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
use App\Models\Admin;
use App\Models\Staff;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\reset;
//use Illuminate\Support\Facades\Session;




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

        //$request->validate(['email' => 'required|email']);
        $token = Str::random(60); // You can generate a token like this
        $email = $request->email;

        // Insert the reset token and email into the MongoDB collection
        reset::create([
            'email' => $email,
            'token' => $token
        ]);
        Log::info('Sending reset link email to: ' . $request->email);
    
        // Send custom reset password email
        try {
            Mail::to($request->email)->send(new ForgotPasswordMail($request->email));
            Log::info('Password reset link successfully sent to: ' . $request->email);
            return back()->with(['status' => 'Password reset link sent.']);
        } catch (\Exception $e) {
            Log::error('Failed to send password reset link to: ' . $request->email . ' Error: ' . $e->getMessage());
            return back()->withErrors(['email' => 'Failed to send reset link.']);
        }
    }

    public function showResetForm($token)
    {
        //$email = request('email'); // Retrieve the email from the request (query parameter)

        return view('Admin.user.resetPassword')->with(
            ['token' => $token, 'email' => request()->get('email')]
        );
    }

    public function reset(Request $request)
    {
        Log::info('Starting password reset process for email: ' . $request->token);

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);
    
        $email = $request->email;
        $token = $request->token;
        
        // Try to find the user in Staff or Admin models
        $resetEntry = Staff::where('email', $token)->first();
        if (!$resetEntry) {
            // If not found in Staff, check Admin
            $resetEntry = Admin::where('email', $token)->first();
        }
        
        if (!$resetEntry) {
            // Log the error and return if no match in either collection
            Log::error('Invalid token or email combination.');
            return back()->withErrors(['email' => 'Invalid reset token or email.']);
        }
        
        // At this point, $resetEntry contains a matching record from Staff or Admin
        
        // Process user details
        if ($resetEntry instanceof Staff) {
            Log::info('User found in Staff collection.');
        } elseif ($resetEntry instanceof Admin) {
            Log::info('User found in Admin collection.');
        }
    // Update the user's password
    try {
        $resetEntry->forceFill([
            'password' => Hash::make($request->password), // Hash the new password
        ])->save();

        Log::info('Password updated successfully: ' . $token);

        // Optionally, delete the reset token after successful password change
        //$resetEntry->delete();

        // Redirect to login with success message
        return redirect('/')->with( 'Password reset successful.');
    } catch (\Exception $e) {
        Log::error('Failed to update password for staff member: ' . $token . '. Error: ' . $e->getMessage());
        return back()->withErrors(['email' => 'Failed to reset password. Please try again.']);
    }
    }

    public function changePasswordForm(){
        return view('Admin.user.changePass');
    }
    

    public function changePasswordSave(Request $request){

        
        $validator = Validator::make($request->all(),[
            'currentPassword' => 'required| string',
            'newPassword' => 'required|confirmed|min:8|string'
        ]);
        
        $admin = auth()->guard('admins')->user();
        // Check if no user is authenticated
        if (!$admin) {
            Log::warning('No authenticated user found.');
            return redirect()->route('changePassForm')->with('error', 'You must be logged in to change your password.');
        }
        

        if (!Hash:: check($request->currentPassword, $admin->password))
        {
            Log::warning('Current Password is Invalid');
            return  redirect()->route('changePassForm')->with('error', "Current Password is Invalid");
        }

        if($request->currentPassword === $request->newPassword)
        {
            Log::info('New Password cannot be same as your current password');
            return redirect()->route('changePassForm')->with("error", "New Password cannot be same as your current password");

        }

        //$user = Admin::find($auth->id);
        $admin->password = Hash::make($request->newPassword);
        $admin->save();
        Log::info('Password changed successfully');
        return redirect('/changePass')->with( 'Password reset successful.');
        
    }

    

}
