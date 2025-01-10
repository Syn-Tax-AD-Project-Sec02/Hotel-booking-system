<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use MongoDB\Laravel\Eloquent\Model as Eloquent; // Use MongoDB's Eloquent model
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;



class schedule extends Eloquent implements \Illuminate\Contracts\Auth\Authenticatable
{   
     use Authenticatable;
     protected $connection = 'mongodb';  // MongoDB connection
     protected $collection = 'schedule';    // MongoDB collection
 
     public function up()
     {
         Schema::create('staff_schedules', function (Blueprint $schedule) {
             $schedule->id();
             $schedule->foreignId('staff_id')->constrained('staff')->onDelete('cascade');
             $schedule->foreignId('booking_id')->constrained('booking_list')->onDelete('cascade');
             $schedule->integer('RoomNo');
             $schedule->date('CheckIn');
             $schedule->date('CheckOut');
             $schedule->timestamps();
         });
     }

     public function down()
     {
         Schema::dropIfExists('Schedule');
     }
    
}