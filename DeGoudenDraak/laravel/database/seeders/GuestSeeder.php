<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guest::create(['table_id' => 1, 'name' => 'Stefan', 'age' => 30 , 'amount'=>4 ,'created_at' => now(),
            'updated_at' => now()]);
        Guest::create(['table_id' => 2, 'name' => 'Montijn', 'age' => 24, 'amount'=>3 ,'created_at' => now(),
            'updated_at' => now()]);

    }
}
