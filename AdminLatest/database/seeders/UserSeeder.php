<?php

namespace Database\Seeders;

use App\Models\User; // Add this line


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert a new user into the MongoDB collection
        $user = new User();
        $user->username = 'john_doe';
        $user->email = 'john@example.com';
        $user->password = bcrypt('password');  // Hash the password
        $user->save();  //
    }
}
