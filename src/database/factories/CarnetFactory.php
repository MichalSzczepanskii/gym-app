<?php

namespace Database\Factories;

use App\Models\Carnet;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarnetFactory extends Factory
{

    protected $model = Carnet::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numerify('##')
        ];
    }
}
