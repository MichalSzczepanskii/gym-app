<?php

namespace Database\Seeders\Auth;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder {

    public function run() {

        $user = User::create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'superadmin@localhost',
            'pesel' => '12312312311',
            'password' => Hash::make('root12')
        ]);

        $superAdminRole = Role::findByName(config('auth.roles.super_admin_role'));
        if(isset($superAdminRole)) $user->assignRole($superAdminRole);

        $user = User::create([
            'first_name' => 'User',

            'last_name' => 'Test',
            'email' => 'usertest@localhost',
            'pesel' => '12312312312',
            'password' => Hash::make('root12')
        ]);

        $userRole = Role::findByName(config('auth.roles.user_role'));
        if(isset($userRole)) $user->assignRole($userRole);

        $users = User::factory()->count(10)->create();
        $userRole = Role::findByName(config('auth.roles.user_role'));
        $users->each(function($user) use ($userRole) {
            $user->assignRole($userRole);
        });
    }
}