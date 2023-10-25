<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(["name" => "admin"]);

        $role = Role::create(["name" => "editor"]);

        $permissions = [
            Permission::create(["name" => "post:viewAny"]),
            Permission::create(["name" => "post:view"]),
            Permission::create(["name" => "post:create"]),
            Permission::create(["name" => "post:update"]),
            Permission::create(["name" => "post:delete"]),
            Permission::create(["name" => "post:restore"]),
            Permission::create(["name" => "news:viewAny"]),
            Permission::create(["name" => "news:view"]),
            Permission::create(["name" => "news:create"]),
            Permission::create(["name" => "news:update"]),
            Permission::create(["name" => "news:delete"]),
            Permission::create(["name" => "news:restore"]),
        ];

        $role->syncPermissions($permissions);

//        $role = Role::create(["name" => "customer"]);
//        $role = Role::create(["name" => "shop-manager"]);
//        $role = Role::create(["name" => "helpdesk-support"]);
//        $permission = Permission::create(["name" => "edit articles"]);
    }
}
