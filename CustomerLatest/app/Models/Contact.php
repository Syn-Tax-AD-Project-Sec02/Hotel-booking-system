<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Contact extends Eloquent
{
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'message',
    ];
}
