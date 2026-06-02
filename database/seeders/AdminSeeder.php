<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $role = Role::firstOrCreate(['role_name' => 'Admin']);

        User::firstOrCreate(
            ['email' => 'admin@qttech.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('Admin123!'),
                'role_id' => $role->id,
            ]
        );
    }
}
