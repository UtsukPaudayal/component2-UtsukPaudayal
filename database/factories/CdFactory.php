<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'artist' => $this->faker->name,
            'price' => $this->faker->randomFloat(3, 0, 100),
            'duration' => $this->faker->randomNumber
        ];
    }
}
