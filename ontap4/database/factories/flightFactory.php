<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\flight>
 */
class flightFactory extends Factory
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
            'total_passengers'=>fake()->text(10),
            'description'=>fake()->text(10),
            'airline_id'=>fake()->text(10)
          
        ];
    }
}
