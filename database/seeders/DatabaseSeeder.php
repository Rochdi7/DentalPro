<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure the 'admin' role exists
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Create or update the admin user
        $user = User::updateOrCreate(
            ['email' => 'owner@dentalpro.com'],
            [
                'name' => 'Owner',
                'password' => bcrypt('password123'),
                'role' => 'admin', 
            ]
        );

        // Assign the Spatie permission role
        $user->syncRoles([$adminRole]);

        // Optionally verify the email
        if (is_null($user->email_verified_at)) {
            $user->email_verified_at = now();
            $user->save();
        }
    }
}
