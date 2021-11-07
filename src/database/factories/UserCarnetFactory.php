<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserCarnet;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserCarnetFactory extends Factory
{

    protected $model = UserCarnet::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numerify('##'),
            'start_date' => $this->faker->dateTimeBetween('-1 year'),
            'end_date' => $this->faker->dateTimeBetween('now','+1 year')
        ];
    }
}
