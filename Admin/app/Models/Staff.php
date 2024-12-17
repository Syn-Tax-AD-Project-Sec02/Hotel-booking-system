<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use MongoDB\Laravel\Eloquent\Model as Eloquent; // Use MongoDB's Eloquent model

class Staff extends Eloquent implements \Illuminate\Contracts\Auth\Authenticatable
{
     use Authenticatable;
     protected $connection = 'mongodb';  // MongoDB connection
     protected $collection = 'staff';    // MongoDB collection

     protected $fillable = ['email', 'password', 'role', 'position', 'address', 'phone'];

     protected $hidden = [
         'password', 'remember_token',
     ];

     protected $casts = [
         'email_verified_at' => 'datetime',
     ];

     public function getEmailForPasswordReset()
{
    return $this->user_email; // Custom column name
}
}
