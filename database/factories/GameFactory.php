<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'console' => $this->faker->word,
            'title' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(3, 0, 100),
            'PEGI' => $this->faker->randomNumber
        ];
    }
}
