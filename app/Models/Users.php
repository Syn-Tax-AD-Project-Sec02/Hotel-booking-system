<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $connection = 'mongodb'; // Specify MongoDB connection
    protected $collection = 'users';    // Specify the collection name

    protected $fillable = [
        'email',
        'password', // Add other fields as necessary
    ];

    // You can add other model methods here
}