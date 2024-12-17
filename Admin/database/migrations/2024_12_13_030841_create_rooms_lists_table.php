<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('room_lists', function (Blueprint $table) {
            $table->id(); // Add an auto-incrementing primary key
            $table->string('RoomNo');
            $table->string('TypeRoom');
            $table->string('RoomFloor');
            $table->string('RoomBlock');
            $table->string('Status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms_lists');
    }
};
