<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Room extends Model
{
    //use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming conventions
    protected $connection = 'mongodb'; // MongoDB connection
    private static $collectionConfig = [
        'rooms_details' => ['ImagePaths', 'TypeRoom', 'Facilities', 'Rate'],
        'rooms_lists' => ['RoomNo', 'TypeRoom', 'RoomFloor', 'RoomBlock', 'Status'],
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

        $this->setTable($collectionName); // Set the collection (table) dynamically
        $this->fillable = self::$collectionConfig[$collectionName]; // Set the fillable attributes
    }

    /**
     * Cast JSON fields to arrays for easier access.
     */
    protected $casts = [
        'Facilities' => 'array', // Facilities as an array
        'ImagePaths' => 'array', // ImagePaths as an array
    ];

}


