<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Room extends Model
{
    //use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming conventions
    protected $connection = 'mongodb'; // MongoDB connection

    public function setRateAttribute($value)
    {
        $this->attributes['Rate'] = (double) $value;
    }

    // Define the mutator for Promotion
    public function setPromotionAttribute($value)
    {
        $this->attributes['Promotion'] = isset($value) ? (double) $value : null;
    }
    
    private static $collectionConfig = [
        'rooms_details' => ['Image', 'TypeRoom', 'Facilities', 'Rate', 'Promotion'],
        'room_lists' => ['RoomNo', 'TypeRoom', 'RoomFloor', 'RoomBlock', 'Status'],
    ];

     /**
     * Dynamically set the collection and configure fillable attributes.
     *
     * @param string $collectionName
     * @throws \Exception
     */
    
     


    public function useCollection(string $collectionName)
    {
        if (!array_key_exists($collectionName, self::$collectionConfig)) {
            throw new \Exception("Collection '{$collectionName}' is not defined in the configuration.");
        }

        $this->collection = $collectionName;
        $this->fillable = self::$collectionConfig[$collectionName];
    }

    public function booking_list()
    {
        return $this->hasMany(Booking::class, 'room_id'); // Assuming room_id is the foreign key in the bookings collection
    }
}


