<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms_details', function (Blueprint $collection) {   
            $collection->id(); // Primary key
            $collection->string('Image')->nullable();
            $collection->string('TypeRoom'); // Room type
            $collection->string('Facilities'); // Facilities provided
            $collection->decimal('Rate', 8, 2); // Room rate with 2 decimal points
            $collection->timestamps(); // Adds created_at and updated_at columns
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms_details');
    }
};
