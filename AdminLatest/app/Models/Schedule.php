<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use MongoDB\Laravel\Eloquent\Model as Eloquent; // Use MongoDB's Eloquent model

class Schedule extends Eloquent implements \Illuminate\Contracts\Auth\Authenticatable
{
     use Authenticatable;
     protected $connection = 'mongodb';  // MongoDB connection
     protected $collection = 'schedule';    // MongoDB collection
 
     protected $fillable = ['name', 'room_no', 'date_time', 'services', 'status'];
 
//      protected $hidden = [
//          'password', 'remember_token',
//      ];
 
//      protected $casts = [
//          'email_verified_at' => 'datetime',
//      ];

//      public function getEmailForPasswordReset()
// {
//     return $this->user_email; // Custom column name
// }
}
