<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define roles
        $roles = [
            ['name' => 'Admin'],
            ['name' => 'Trainer'],
            ['name' => 'User'],
        ];

        // Insert roles into the database
        foreach ($roles as $roleData) {
            Role::create($roleData);
        }
    }
}
