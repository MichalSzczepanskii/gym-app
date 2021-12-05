<?php

namespace Database\Seeders;

use App\Models\UserCarnet;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserCarnetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = Role::findByName(config('auth.roles.user_role'));
        $userCarnets = UserCarnet::factory()->count(10)->create();
        $userCarnets->each(function($userCarnet) use ($userRole) {
            $userCarnet->user->assignRole($userRole);
        });
    }
}
