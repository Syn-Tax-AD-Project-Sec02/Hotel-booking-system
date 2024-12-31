<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\Log;
use MongoDB\BSON\ObjectId;

class RoomController extends Controller
{
    public function showIndex()
    {
        $rooms = Room::from('rooms_details')->get(); 
        return view('index', compact('rooms'));
    }

}  