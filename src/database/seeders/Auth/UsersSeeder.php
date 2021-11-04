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
            'name' => 'SuperAdmin',
            'email' => 'superadmin@localhost',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => Hash::make('root12')
        ]);

        $superAdminRole = Role::findByName(config('auth.roles.super_admin_role'));
        if(isset($superAdminRole)) $user->assignRole($superAdminRole);

        $user = User::create([
            'name' => 'User Test',
            'email' => 'usertest@localhost',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => Hash::make('root12')
        ]);

        $userRole = Role::findByName(config('auth.roles.user_role'));
        if(isset($userRole)) $user->assignRole($userRole);
    }
}