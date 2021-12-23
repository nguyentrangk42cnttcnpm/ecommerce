<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MediasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->company(),
            'desc'=>$this->faker->company(),
            'priority'=>$this->faker->randomDigitNotNull(),
            'product_id' => $this->faker->numberBetween($min = 1, $max = 20),
        ];
    }
}
