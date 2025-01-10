<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Booking extends Model
{
    //use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming conventions
    protected $connection = 'mongodb'; // MongoDB connection
    private static $collectionConfig = [
        'booking_list' => ['Name', 'RoomNo' ,'TypeRoom', 'CheckIn', 'CheckOut', 'Phone', 'Rate', 'TotalPrice'],
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


