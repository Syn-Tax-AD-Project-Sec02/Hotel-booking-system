<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use MongoDB\Laravel\Eloquent\Model as Eloquent; // Use MongoDB's Eloquent model

class User extends Eloquent implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;
    protected $connection = 'mongodb';  // MongoDB connection
    protected $collection = 'users';    // MongoDB collection

    protected $fillable = [
        'username', 'email', 'country', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}







