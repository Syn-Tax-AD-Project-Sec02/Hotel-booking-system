<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use MongoDB\Laravel\Eloquent\Model as Eloquent; // Use MongoDB's Eloquent model


class Admin extends Eloquent implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;
    protected $connection = 'mongodb';  // MongoDB connection
    protected $collection = 'admins';    // MongoDB collection

    protected $fillable = ['email', 'password', 'role'];

   
}
