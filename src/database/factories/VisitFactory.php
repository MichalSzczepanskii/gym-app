<?php

namespace Database\Factories;

use App\Models\UserCarnet;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_carnet_id' => UserCarnet::factory(),
            'entry_date' => $this->faker->dateTimeBetween('-1 year')
        ];
    }
}
