<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function profileStaffForm(){
        $staff = auth()->guard('staff')->user();
        return view('Staff.User.profileStaff', compact('staff'));
    }

    


    public function changePasswordStaff(Request $request){

        
        $validator = Validator::make($request->all(),[
            'currentPassword' => 'required| string',
            'newPassword' => 'required|confirmed|min:8|string'
        ]);
        
        $staff = auth()->guard('staff')->user();
        
        // Check if no user is authenticated
        if (!$staff) {
           Log::warning('No authenticated user found.');
           return redirect()->route('profileStaffForm')->with('error', 'You must be logged in to change your password.');
        }
        

        if (!Hash::check($request->currentPassword, $staff->password)) {
            return redirect()->route('profileStaffForm')->with('error', 'Current Password is Invalid');
        }
    
        if ($request->currentPassword === $request->newPassword) {
             return redirect()->route('profileStaffForm')->with('error', 'New Password cannot be the same as the current password');
        }
    
        $staff->password = Hash::make($request->newPassword);
        $staff->save();
        Log::info('Password changed successfully');
        return redirect()->route('profileStaffForm')->with('success', 'Password reset successful.');
       
    }

    
    /**
     * Update the user's profile information.
     */
    /**public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    /**public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
        */
}
