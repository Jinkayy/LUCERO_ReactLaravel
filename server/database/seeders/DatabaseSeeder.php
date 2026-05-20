<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin account
        User::create([
            'slug' => 'jinky-lucero',
            'name' => 'jinky lucero',
            'email' => 'admin@lucero.com',
            'phone' => '+639123456789',
            'role' => UserRole::ADMIN,
            'password' => Hash::make('admin123'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        // Create additional users
        User::factory(10)->create();
    }
}
