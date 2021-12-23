<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'desc' => $this->faker->text($maxNbChars = 100),
            'status' => 0,
            'customer_id' => $this->faker->numberBetween($min = 1, $max = 10),
        ];
    }
}
