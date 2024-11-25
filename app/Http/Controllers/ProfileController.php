<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function changePassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'newPassword' => 'required|min:8|confirmed',
        ]);
    
        $staff = auth()->user(); // Assuming the logged-in user is a staff member
    
        if (!Hash::check($request->currentPassword, $staff->password)) {
            Log::warning("Password change failed for user ID {$staff->id}: Incorrect current password."); // Log failed attempt
            return back()->withErrors(['password' => 'Current password is incorrect.']);
        }
    
        $staff->password = Hash::make($request->newPassword);
        $staff->save();
    
        Log::info("Password changed successfully for user ID {$staff->id}."); // Log successful password change
        return back()->with('success', 'Password changed successfully.');
    }
    
    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
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
    public function destroy(Request $request): RedirectResponse
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
}
