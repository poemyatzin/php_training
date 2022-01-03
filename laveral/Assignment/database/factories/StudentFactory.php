<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'name' => $this->faker->sentence,
            'dob' => $this->faker->sentence,
            'phone' => $this->faker->sentence,
            'address' => $this->faker->sentence,
            'majorid' => rand(1, 5),
            ];
    }
}
