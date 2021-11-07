<?php

namespace Database\Seeders;

use App\Models\UserCarnet;
use Illuminate\Database\Seeder;

class UserCarnetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserCarnet::factory()->count(10)->create();
    }
}
