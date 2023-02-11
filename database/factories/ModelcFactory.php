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
            'nom' => $this->faker->name,
            'marca' => $this->faker->name,
            'places' => $this->faker->name,
            'potencia' => $this->faker->name,
            'consum' => $this->faker->name,
            'cotxe_id' => Cotxe::all()->random()->id,
        ];
    }
}
