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
        Permission::create(['name' => 'edit-profiles']);
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

        Permission::create(['name' => 'crm']);

        Permission::create(['name' => 'list-leads']);
        Permission::create(['name' => 'list-self-leads']);
        Permission::create(['name' => 'create-leads']);
        Permission::create(['name' => 'edit-self-leads']);
        Permission::create(['name' => 'delete-self-leads']);
        Permission::create(['name' => 'edit-leads']);
        Permission::create(['name' => 'delete-leads']);

        Permission::create(['name' => 'list-deals']);
        Permission::create(['name' => 'list-self-deals']);
        Permission::create(['name' => 'create-deals']);
        Permission::create(['name' => 'edit-self-deals']);
        Permission::create(['name' => 'delete-self-deals']);
        Permission::create(['name' => 'edit-deals']);
        Permission::create(['name' => 'delete-deals']);

        Permission::create(['name' => 'export-pdf']);

        Permission::create(['name' => 'list-role']);
        Permission::create(['name' => 'create-role']);
        Permission::create(['name' => 'edit-role']);
        Permission::create(['name' => 'delete-role']);

        $adminRole = Role::create(['name' => 'Admin']);
        $boosterRole = Role::create(['name' => 'Booster']);
        $sales = Role::create(['name' => 'sales']);
        $bloggerRole = Role::create(['name' => 'Blogger']);

        $adminRole->givePermissionTo([
            'list-users',
            'create-users',
            'edit-users',
            'edit-profiles',
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
            'crm',
            'list-leads',
            'list-self-leads',
            'create-leads',
            'edit-self-leads',
            'delete-self-leads',
            'edit-leads',
            'delete-leads',
            'list-deals',
            'list-self-deals',
            'create-deals',
            'edit-self-deals',
            'delete-self-deals',
            'edit-deals',
            'delete-deals',
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

        $sales->givePermissionTo([
            'crm',
            'list-leads',
            'list-self-leads',
            'create-leads',
            'edit-self-leads',
            'delete-self-leads',
            'edit-leads',
            'delete-leads',
            'list-deals',
            'list-self-deals',
            'create-deals',
            'edit-self-deals',
            'delete-self-deals',
            'edit-deals',
            'delete-deals',
            'export-pdf',
        ]);
    }
}
