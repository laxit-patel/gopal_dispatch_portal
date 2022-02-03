<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Permissions::User
        Permission::create(['name' => 'user-manage']);
        Permission::create(['name' => 'user-view']);
        Permission::create(['name' => 'user-create']);
        Permission::create(['name' => 'user-update']);
        Permission::create(['name' => 'user-delete']);

        // Permissions::Role
        Permission::create(['name' => 'role-manage']);
        Permission::create(['name' => 'role-view']);
        Permission::create(['name' => 'role-create']);
        Permission::create(['name' => 'role-update']);
        Permission::create(['name' => 'role-delete']);
        Permission::create(['name' => 'role-assign']);

        // Permissions::Permission  
        Permission::create(['name' => 'permission-manage']);
        Permission::create(['name' => 'permission-view']);
        Permission::create(['name' => 'permission-create']);
        Permission::create(['name' => 'permission-update']);
        Permission::create(['name' => 'permission-delete']);
        Permission::create(['name' => 'permission-assign']);

        // By default admin will inherit all the permissions
        $superRole = Role::create(['name' => 'super-admin']);
        $superRole->givePermissionTo(Permission::all());

        // Create Admin Role Without Delete Permission
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo([
            'user-manage',
            'user-view',
            'product-manage',
            'product-view',
        ]);

    }
}
