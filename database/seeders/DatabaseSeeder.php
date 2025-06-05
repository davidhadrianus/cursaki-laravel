<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@panel.com',
            'password' => Hash::make('password'),
        ]);
        User::factory()->create([
            'name' => 'Academy Example',
            'email' => 'academy@example.com',
            'password' => Hash::make('password'),
        ]);

        $this->call([
            StateSeeder::class,
            CitySeeder::class,
            InstitutionSeeder::class,
            CourseSeeder::class
        ]);
    }
}
