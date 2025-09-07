<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1) Ensure roles exist
        $adminRole = Role::firstOrCreate(
            ['name' => 'admin', 'guard_name' => 'web']
        );

        // 2) Create the admin user if it doesn't exist
        $user = User::firstOrCreate(
            ['email' => 'owner@dentalpro.com'],
            [
                'name'     => 'Owner',
                'password' => Hash::make('password123'), // set only on first create
            ]
        );

        // 3) Verify email if needed
        if (is_null($user->email_verified_at)) {
            $user->email_verified_at = now();
            $user->save();
        }

        // 4) Assign Spatie role (idempotent)
        $user->syncRoles([$adminRole]);

        // 5) Seed categories and tags
        $this->call([
            ProductCategorySeeder::class,
            ProductTagSeeder::class,
        ]);
    }
}
