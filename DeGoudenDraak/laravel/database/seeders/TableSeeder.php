<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Table::create(['seats' => 4]);
        Table::create(['seats' => 6]);
        Table::create(['seats' => 2]);
    }
}
