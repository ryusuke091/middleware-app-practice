<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the administrator and the normal test users.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'password',
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'Normal User',
            'email' => 'user@example.com',
            'password' => 'password',
            'is_admin' => false,
        ]);
    }
}
