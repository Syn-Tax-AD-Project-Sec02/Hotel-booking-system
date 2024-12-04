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
            $collection->index('username');  // Create an index on the 'username' field
            $collection->string('username');
            $collection->string('email');
            $collection->string('country');
            $collection->string('password');
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
