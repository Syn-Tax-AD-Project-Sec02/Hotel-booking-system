<?php

namespace Database\Seeders;

use App\Models\User; // Add this line


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert a new user into the MongoDB collection
        User::create([
            'name' => 'John Doe',
            'email' => 'staff@example.com',
            'password' => Hash::make('password123'),
            'phone' => '1234567890',
            'role' => 'staff',
            'matricStaffNo' => 'S12345', // Staff-specific field
        ]);
    }
}
