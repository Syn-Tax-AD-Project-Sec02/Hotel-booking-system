<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Staff; 

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::create([
            'name' => 'Staff',
            'email' => 'staff@example.com',
            'password' => Hash::make('password123'),
            'role' => 'staff', // Replace with a secure password
        ]);
    }
}
