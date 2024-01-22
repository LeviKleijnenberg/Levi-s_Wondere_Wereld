<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a user with a default password and generate a token
        $user = \App\Models\User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('password123'), // Use a secure password hashing method
            'auth_token' => \Illuminate\Support\Str::random(60), // Generate a random token
        ]);

        $this->command->info('User seeded successfully.');
    }
}
