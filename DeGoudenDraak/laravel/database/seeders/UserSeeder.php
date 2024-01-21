<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        // Create three users
        User::create([
            'name' => 'test',
            'email' => 'test@test.nl',
            'password' => Hash::make('testtest'),
        ]);

        User::create([
            'name' => 'montijn',
            'email' => 'montijn@avans.nl',
            'password' => Hash::make('testtest'),
        ]);

        User::create([
            'name' => 'mitchell',
            'email' => 'mitchell@avans.nl',
            'password' => Hash::make('testtest'),
        ]);
    }
}
