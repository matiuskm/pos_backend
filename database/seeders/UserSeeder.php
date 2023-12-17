<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name' => 'lzcdr',
            'email' => 'lzcdr@fic11.com',
            'phone' => '1234567890',
            'roles' => 'admin',
            'email_verified_at' => now(),
            'password' => \Illuminate\Support\Facades\Hash::make('kodokijo'),
        ]);
    }
}
