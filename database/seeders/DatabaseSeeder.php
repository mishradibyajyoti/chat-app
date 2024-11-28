<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => '12345678',
        ]);
        User::factory()->create([
            'name' => 'Admin user',
            'email' => 'admin@admin.com',
            'password' => '12345678',

        ]);
        User::factory()->create([
            'name' => 'User',
            'email' => 'test@test.com',
        ]);
    }
}
