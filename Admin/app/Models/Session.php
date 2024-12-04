<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Session extends Eloquent
{
    protected $connection = 'mongodb';  // Specify MongoDB as the database connection
    protected $collection = 'sessions'; // MongoDB collection name
    protected $primaryKey = '_id'; // MongoDB's primary key

    // Optional: Define fields that can be mass-assigned
    protected $fillable = ['user_id', 'payload', 'last_activity', 'ip_address', 'user_agent'];
    
    // Disable timestamps because MongoDB doesn't use the default created_at / updated_at
    public $timestamps = false;
}
