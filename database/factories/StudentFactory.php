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
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone_no'=>fake()->phoneNumber,
            'date_of_birth'=>fake()->date($format = 'Y-m-d', $max = 'now'),
            'status' => $this->faker->randomElement(['Active', 'Inactive']),
            'password'=>bcrypt('123') 
        ];
    }
}
