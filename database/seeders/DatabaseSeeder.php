<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(3)->create();
        User::factory()->create([
            'name' => 'Syahida',
            'email' => 'hida@example.com',
            'address' => 'Jember'
        ]);

        User::factory()->create([
            'name' => 'Orlin',
            'email' => 'orlin@example.com',
            'address' => 'Jember'
        ]);

        User::factory()->create([
            'name' => 'Arif',
            'email' => 'arif@example.com',
            'address' => 'Jember'
        ]);

        User::factory()->create([
            'name' => 'Rahmat',
            'email' => 'rahmat@example.com',
            'address' => 'Jember'
        ]);
    }
}
