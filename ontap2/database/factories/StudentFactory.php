<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //'
            'name'=>fake()->text(50),
            'gender'=>fake()->text(50),
            'phone'=>fake()->text(50),
            'address'=>fake()->text(255),
            'image'=>fake()->text(255),
           

        ];
    }
}
