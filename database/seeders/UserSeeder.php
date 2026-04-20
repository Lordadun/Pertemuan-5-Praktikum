<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'npm' => 5520123024,
            'username' => 'Mahasiswa',
            'first_name' => 'Mahasiswa',
            'last_name' => '1',
            'email' => 'mhs1@gmail.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'npm' => 5520123054,
            'username' => 'Lordadun',
            'first_name' => 'Lordadun',
            'last_name' => '1',
            'email' => 'lord@gmail.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
