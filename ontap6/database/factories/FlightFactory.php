<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'flight_number'=>fake()->text(10),
            'image'=>fake()->text(10),

            'total_passer'=>fake()->text(10),

            'description'=>fake()->text(10),
            'airline'=>fake()->text(10),


        ];
    }
}
