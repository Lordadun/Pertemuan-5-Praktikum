<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $pustakawan = Role::create(['name' => 'pustakawan']);
        $mahasiswa = Role::create(['name' => 'mahasiswa']);

        $show = Permission::create(['name' => 'show book']);
        $create = Permission::create(['name' => 'create book']);
        $edit = Permission::create(['name' => 'edit book']);
        $delete = Permission::create(['name' => 'delete book']);

        $pustakawan->givePermissionTo([$show, $create, $edit, $delete]);
        $mahasiswa->givePermissionTo($show);

        User::create([
            'npm' => 5520123024,
            'username' => 'Mahasiswa',
            'first_name' => 'Mahasiswa',
            'last_name' => '1',
            'email' => 'mhs1@gmail.com',
            'password' => Hash::make('password123'),
        ])->assignRole('pustakawan');

        User::create([
            'npm' => 5520123054,
            'username' => 'Lordadun',
            'first_name' => 'Lordadun',
            'last_name' => '1',
            'email' => 'lord@gmail.com',
            'password' => Hash::make('password123'),
        ])->assignRole('mahasiswa');
    }
}
