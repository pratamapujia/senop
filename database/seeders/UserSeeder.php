<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create admin user
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@senopati.com',
            'password' => bcrypt('Password@123'),
        ]);
    }
}
