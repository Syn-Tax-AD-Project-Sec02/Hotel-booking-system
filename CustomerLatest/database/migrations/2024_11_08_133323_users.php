<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creating a MongoDB collection
        Schema::create('users', function (Blueprint $collection) {
            $collection->id();  
            $collection->string('name');  // Create an index on the 'username' field
            $collection->string('email');
            $collection->string('password');
            $collection->string('phone');
            $collection->string('phonebackup');
            $collection->enum('category', ['individual']); // TBA (not sure category of what)

            $collection->enum('role', ['staff', 'student', 'public']); // Define roles
            
            // Only for 'student' & 'staff'
            $collection->string('matricStaffNo')->nullable(); 
            $collection->string('semester')->nullable(); 

            //$table->string('staff_no')->nullable(); // Only for 'staff'
            $collection->rememberToken();
            $collection->timestamps();
            $collection->date('email_verified_at')->nullable();
            // Add other fields as needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the collection if it exists
        Schema::dropIfExists('users');
    }
}
