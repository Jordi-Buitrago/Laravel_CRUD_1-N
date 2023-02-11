<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CotxeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marca' => $this->faker->company,
            'model' => $this->faker->name,
            'matricula' => $this->faker->randomNumber(5, true),
            'color' => $this->faker->colorName,
            'any' => $this->faker->year,
            'preu' => $this->faker->numberBetween(10000, 1000000),
        ];
    }
}
