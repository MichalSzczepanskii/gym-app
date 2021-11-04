<?php

namespace Database\Seeders\Auth;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder {

    public function run() {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'users.read_one']);
        Permission::create(['name' => 'users.read']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.update']);
        Permission::create(['name' => 'users.delete']);
        Permission::create(['name' => 'users.change_role']);
        Permission::create(['name' => 'logs']);

        /*
         * Admin Role permission
         */
        $adminRole = Role::findByName(config('auth.roles.admin_role'));
        $adminRole->givePermissionTo(['users.read_one',
                                      'users.read',
                                      'users.create',
                                      'users.update',
                                      'users.delete',
                                      'users.change_role',
                                      'logs']);

        /*
         * Super Admin Role permission
         */
        $superAdminRole = Role::findByName(config('auth.roles.super_admin_role'));
        $superAdminRole->givePermissionTo(Permission::all());
    }
}
