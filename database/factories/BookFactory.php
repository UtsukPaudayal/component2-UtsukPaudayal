<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //faker -> creates random fascade data
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'price' => $this->faker->randomFloat(3, 0, 100),
            'pages' => $this->faker->randomNumber
        ];
    }
}
