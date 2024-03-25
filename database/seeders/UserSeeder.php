<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@bbibsingosari.go.id',
            'password' => bcrypt('bbibsingosari2021'),
            'email_verified_at' => now(),
        ])->assignRole(Role::find(1)->first());

        User::factory()->count(55)->create();
    }
}
