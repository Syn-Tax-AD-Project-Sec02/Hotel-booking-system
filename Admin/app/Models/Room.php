<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Room extends Model
{
    //use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming conventions
    protected $connection = 'mongodb'; // MongoDB connection
    protected $collection = 'rooms_details';

    // Define the fillable properties to allow mass assignment
    protected $fillable = [
        'TypeRoom',
        'Facilities',
        'Rate',
    ];

    protected $casts = [
        'ImagePaths' => 'array',  // Convert ImagePaths to an array automatically
    ];
}


