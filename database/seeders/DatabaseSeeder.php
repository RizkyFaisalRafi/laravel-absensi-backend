<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Dinamis / otomatis membuatkan 10 user random
        User::factory(10)->create(); // Data dummy 10 user

        // Statis / Data Dummy Custom
        User::factory()->create([
            'name' => 'Admin Faisal',
            'email' => 'faisal@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
