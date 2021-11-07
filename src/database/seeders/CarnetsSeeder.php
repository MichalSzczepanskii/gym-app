<?php

namespace Database\Seeders;

use App\Models\Carnet;
use Illuminate\Database\Seeder;

class CarnetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carnet::factory()->count(4)->create();
    }
}
