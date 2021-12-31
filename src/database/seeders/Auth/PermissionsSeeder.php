<?php

namespace Database\Seeders\Auth;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder {

    public function run() {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'logs']);

        Permission::create(['name' => 'users.read_one']);
        Permission::create(['name' => 'users.read']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.update']);
        Permission::create(['name' => 'users.delete']);
        Permission::create(['name' => 'users.change_role']);

        //Carnets
        Permission::create(['name' => 'carnets.index']);
        Permission::create(['name' => 'carnets.store']);

        //Clients
        Permission::create(['name' => 'clients.index']);
        Permission::create(['name' => 'clients.store']);

        //Contracts (UserCarnets)
        Permission::create(['name' => 'contracts.index']);
        Permission::create(['name' => 'contracts.store']);

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
