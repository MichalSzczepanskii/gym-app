<?php

namespace Database\Seeders\Auth;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesSeeder extends Seeder {

    public function run() {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $superAdminRole = Role::create(['name' => config('auth.roles.super_admin_role')]);
        $adminRole = Role::create(['name' => config('auth.roles.admin_role')]);
        $userRole = Role::create(['name' => config('auth.roles.user_role')]);

    }
}
