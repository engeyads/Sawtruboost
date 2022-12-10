<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'list-users']);
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);

        Permission::create(['name' => 'list-boosts']);
        Permission::create(['name' => 'list-self-boosts']);
        Permission::create(['name' => 'create-boosts']);
        Permission::create(['name' => 'edit-self-boosts']);
        Permission::create(['name' => 'delete-self-boosts']);
        Permission::create(['name' => 'edit-boosts']);
        Permission::create(['name' => 'delete-boosts']);

        Permission::create(['name' => 'list-blogs']);
        Permission::create(['name' => 'list-self-blogs']);
        Permission::create(['name' => 'create-blogs']);
        Permission::create(['name' => 'edit-self-blogs']);
        Permission::create(['name' => 'delete-self-blogs']);
        Permission::create(['name' => 'edit-blogs']);
        Permission::create(['name' => 'delete-blogs']);

        Permission::create(['name' => 'export-pdf']);

        Permission::create(['name' => 'list-role']);
        Permission::create(['name' => 'create-role']);
        Permission::create(['name' => 'edit-role']);
        Permission::create(['name' => 'delete-role']);

        $adminRole = Role::create(['name' => 'Admin']);
        $boosterRole = Role::create(['name' => 'Booster']);
        $bloggerRole = Role::create(['name' => 'Blogger']);

        $adminRole->givePermissionTo([
            'list-users',
            'create-users',
            'edit-users',
            'delete-users',
            'list-boosts',
            'list-self-boosts',
            'create-boosts',
            'edit-self-boosts',
            'delete-self-boosts',
            'edit-boosts',
            'delete-boosts',
            'list-blogs',
            'list-self-blogs',
            'create-blogs',
            'edit-self-blogs',
            'delete-self-blogs',
            'edit-blogs',
            'delete-blogs',
            'export-pdf',
            'list-role',
            'create-role',
            'edit-role',
            'delete-role'
        ]);

        $boosterRole->givePermissionTo([
            'list-self-boosts',
            'create-boosts',
            'edit-self-boosts',
            'delete-self-boosts',
        ]);

        $bloggerRole->givePermissionTo([
            'list-blogs',
            'create-blogs',
            'edit-self-blogs',
            'delete-self-blogs',
        ]);
    }
}
