<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Facility extends Eloquent
{
    protected $connection = 'mongodb';
    protected $fillable = ['name'];
}
