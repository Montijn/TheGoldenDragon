<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title' => 'Corona update',
            'content' => 'Door de Corona crisis is De Gouden Draak op het moment slechts beperkt open. Het restaurant-gedeelte is gesloten. U kan uw favoriete gerechten nog wel afhalen.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
