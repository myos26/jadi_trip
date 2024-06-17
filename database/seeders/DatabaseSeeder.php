<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'ayik',
            'email' => 'berasdiet2024@gmail.com',
            'password' => '1234567890',
            'is_activated' => 1,
            'is_info_verified' => 1,
            'email_verified_at' => now(),
            'is_admin' => 1
        ]);

        User::create([
            'username' => 'arbail',
            'email' => 'arbail@gmail.com',
            'password' => '1234567890',
            'is_activated' => 1,
            'is_info_verified' => 1,
            'email_verified_at' => now(),
        ]);
    }
}
