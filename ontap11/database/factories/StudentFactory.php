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
            'name'=>fake()->name(),
            'gender'=>collect(['nam','nữ'])->random(),
            'total'=>rand(1,10),
            'email'=>fake()->unique()->safeEmail(),
            'image'=>fake()->text(10),
            'date'=>fake()->dateTime()->format('Y-m-d'),
            //
        ];
    }
}
