<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Validator;

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('Admin.user.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'country' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
           //'confirmPassword' => 'required|string|min:8|confirmed',
        ]);

        //if ($validator->fails()) {
       //     return redirect()->back()->withErrors($validator)->withInput();
        //}

        // Save user to MongoDB
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->country = $request->country;
        $user->password = Hash::make($request->password);
       // $user->confirmPassword = Hash::make($request->confirmPassword);
        $user->save();

    

        return redirect('/')->with('success', 'Registration successful, please log in.');
    }
}
