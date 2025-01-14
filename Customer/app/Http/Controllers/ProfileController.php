<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

     public function profileForm(){
        $users = auth()->user(); // Get authenticated user
        return view('profile-cust', compact('users'));
    }

    public function HistoryForm(){
        $users = auth()->user(); // Get authenticated user

        $bookings = Booking::from('booking_list')->get();
        return view('bookingHistory', compact('users', 'bookings'));
    }

    public function updateDetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'dob' => 'nullable|date',
            'gender' => 'nullable|string|max:15',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $usersId = $request->input('users_id');
    
        // Dynamically set the table using setTable() if you want to use a custom table name
        $users = new User();
        $users->setTable('users'); // Set your custom table name here
        
        // Find the room in the rooms_details table
        $users = $users->findOrFail($usersId);
    
            $users->name  = $request->name;
            $users->email = $request->email;
            $users->phone  = $request->phone;
            $users->dob = $request->dob;
            $users->gender = $request->gender;
            $users->save();
        
          return redirect()->route('profileForm')->with('success', 'Profile details updated successfully!');
        }
    

        public function changePasswordForm(){
            return view('Admin.changePassword-cust');
        }
    


    public function updatePasswordCust(Request $request){

       
        $validator = Validator::make($request->all(),[
            'currentPassword' => 'required| string',
            'newPassword' => 'required|confirmed|min:8|string'
        ]);
        
        $users = auth()->user();
        
        // Check if no user is authenticated
        if (!$users) {
           Log::warning('No authenticated user found.');
           return redirect()->route('changePassForm')->with('error', 'You must be logged in to change your password.');
        }
        

        if (!Hash::check($request->currentPassword, $users->password)) {
            return redirect()->route('changePassForm')->with('error', 'Current Password is Invalid');
        }
    
        if ($request->currentPassword === $request->newPassword) {
             return redirect()->route('changePassForm')->with('error', 'New Password cannot be the same as the current password');
        }
    
        $users->password = Hash::make($request->newPassword);
        $users->save();
        Log::info('Password changed successfully');
        return redirect()->route('changePassForm')->with('success', 'Password reset successful.');
       
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
