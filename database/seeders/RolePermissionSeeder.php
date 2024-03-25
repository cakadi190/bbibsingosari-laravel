<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            # User Data
            ['name' => 'list user'],
            ['name' => 'view detail user'],
            ['name' => 'create user'],
            ['name' => 'update user'],
            ['name' => 'delete user'],

            # Medicine Stock Data
            ['name' => 'list medicine'],
            ['name' => 'view detail medicine'],
            ['name' => 'create medicine'],
            ['name' => 'update medicine'],
            ['name' => 'delete medicine'],

            # Take Medicine Data
            ['name' => 'list take medicine'],
            ['name' => 'view detail take medicine'],
            ['name' => 'create take medicine'],
            ['name' => 'update take medicine'],
            ['name' => 'delete take medicine'],

            # Sperm Bank Location
            ['name' => 'list sperm bank location'],
            ['name' => 'view detail sperm bank location'],
            ['name' => 'create sperm bank location'],
            ['name' => 'update sperm bank location'],
            ['name' => 'delete sperm bank location'],

            # Sperm Bank Data
            ['name' => 'list sperm bank'],
            ['name' => 'view detail sperm bank'],
            ['name' => 'create sperm bank'],
            ['name' => 'update sperm bank'],
            ['name' => 'delete sperm bank'],

            # Sperm Bank Out Data
            ['name' => 'list sperm bank out'],
            ['name' => 'view detail sperm bank out'],
            ['name' => 'create sperm bank out'],
            ['name' => 'update sperm bank out'],
            ['name' => 'delete sperm bank out'],

            # Barn Data
            ['name' => 'list barn'],
            ['name' => 'view detail barn'],
            ['name' => 'create barn'],
            ['name' => 'update barn'],
            ['name' => 'delete barn'],

            # Barn Out Data
            ['name' => 'list barn out'],
            ['name' => 'view detail barn out'],
            ['name' => 'create barn out'],
            ['name' => 'update barn out'],
            ['name' => 'delete barn out'],

            # Farm Location Data
            ['name' => 'list farm location'],
            ['name' => 'view detail farm location'],
            ['name' => 'create farm location'],
            ['name' => 'update farm location'],
            ['name' => 'delete farm location'],

            # Farm Data
            ['name' => 'list farm'],
            ['name' => 'view detail farm'],
            ['name' => 'create farm'],
            ['name' => 'update farm'],
            ['name' => 'delete farm'],

            # Role User Data
            ['name' => 'list role user'],
            ['name' => 'view detail role user'],
            ['name' => 'create role user'],
            ['name' => 'update role user'],
            ['name' => 'delete role user'],

            # Setting
            ['name' => 'setting']
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

        $roles = [
            ['name' => 'Administrator'],
            ['name' => 'Barn'],
            ['name' => 'Farm'],
            ['name' => 'Inseminations'],
        ];

        // Create the roles
        foreach ($roles as $roleData) {
            $role = Role::create($roleData);

            // Assign permissions based on role
            switch ($roleData['name']) {
                case 'Administrator':
                        $role->givePermissionTo(Permission::all());
                    break;
                case 'Barn':
                        Permission::where('name', 'barn')->get()->map(function ($permission) use ($role) {
                            $role->givePermissionTo($permission);
                        });
                    break;
                case 'Farm':
                        Permission::where('name', 'farm')->get()->map(function ($permission) use ($role) {
                            $role->givePermissionTo($permission);
                        });
                    break;
                case 'Inseminations':
                        Permission::where('name', 'sperm')->get()->map(function ($permission) use ($role) {
                            $role->givePermissionTo($permission);
                        });
                    break;
                default:
                    break;
            }

            Log::channel('stderr')->info("Role {$roleData['name']} granted");
        }
    }
}
