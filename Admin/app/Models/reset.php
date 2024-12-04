<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use MongoDB\Laravel\Eloquent\Model as Eloquent; // Use MongoDB's Eloquent model

class reset extends Eloquent implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;
    protected $connection = 'mongodb'; // Ensure this matches your MongoDB connection in .env
    protected $collection = 'resets';
    // Define which fields are mass assignable
    protected $fillable = ['email', 'token'];

    // Optionally, you can add timestamps if you want to track created_at and updated_at
    public $timestamps = true;
}
