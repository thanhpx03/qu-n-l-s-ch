<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\flight::factory(10)->create();

        // \App\Models\flight::factory(10)->create([
        //     'flight_number' => 'Text',
        //     'image' => 'text',
        //     'total_passengers' => 'text',
        //     'description' => 'text',
        //     'airline_id' => 'text',


        // ]);
    }
}
