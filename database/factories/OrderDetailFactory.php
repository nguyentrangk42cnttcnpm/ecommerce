<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'quantity' => $this->faker->randomDigit(),
            'order_id' => $this->faker->numberBetween($min = 1, $max = 10),
        ];
    }
}
