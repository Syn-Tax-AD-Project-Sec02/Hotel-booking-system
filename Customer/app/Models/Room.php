<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Room extends Model
{
    //use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming conventions
    protected $connection = 'mongodb'; // MongoDB connection
    
    private static $collectionConfig = [
        'rooms_details' => ['Image', 'TypeRoom', 'Facilities', 'Rate'],
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
}


