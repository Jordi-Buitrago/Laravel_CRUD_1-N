<?php

namespace Database\Factories;

use App\Models\Cotxe;
use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Modelc;

class ModelcFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Modelc::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->city,
            'marca' => $this->faker->name,
            'places' => $this->faker->numberBetween(1, 5),
            'potencia' => $this->faker->numberBetween(80, 500),
            'consum' => $this->faker->numberBetween(5, 20),
            'cotxe_id' => Cotxe::all()->random()->id,
        ];
    }
}
