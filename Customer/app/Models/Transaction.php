<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Transaction extends Model
{
    // Specify the MongoDB connection
    protected $connection = 'mongodb';  // MongoDB connection name defined in config/database.php
    
    // Specify the collection name if it doesn't follow the default pluralized naming convention
    protected $collection = 'Transactions';  // MongoDB collection name (use lowercase, as MongoDB collections are case-sensitive)

    // Fields that can be mass-assigned
    protected $fillable = [
        'bill_code',
        'external_reference_no',
        'user_name',
        'user_email',
        'user_phone',
        'amount',
        'status',
        'transaction_date',
    ];

    // You may add additional methods, relationships, or scopes here if needed
}
