<?php

namespace App\Models; ;

use MongoDB\Laravel\Eloquent\Model; // Use Laravel's default Eloquent model


class RoomList extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'room_lists';
    protected $fillable = ['RoomNo', 'TypeRoom', 'RoomFloor', 'Block', 'Status'];
    public $timestamps = true; // Enable timestamps for created_at and updated_at
}
