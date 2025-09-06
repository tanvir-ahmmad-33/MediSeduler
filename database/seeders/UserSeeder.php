<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name'     => 'Tanvir Ahmmad',
            'email'    => 'doctor@example.com',
            'phone'    => '+8808487674567',
            'password' => Hash::make('12345678'),
            'role'     => 'doctor',
        ]);

        User::create([
            'name'     => 'Staff Ahmmad',
            'email'    => 'staff@example.com',
            'phone'    => '+8808487674567',
            'password' => Hash::make('12345678'),
            'role'     => 'staff',
        ]);

        User::create([
            'name'     => 'Patient Ahmmad',
            'email'    => 'patient@example.com',
            'phone'    => '+8808487674567',
            'password' => Hash::make('12345678'),
            'role'     => 'patient',
        ]);
    }
}
