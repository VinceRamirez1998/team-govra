<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

      $user1 =  User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'SuperAdmin@example.com',
        ]);

          User::factory()->create([
            'name' => 'Test',
            'email' => 'Test@example.com',
        ]);

        $role = Role::create(['name' => 'Super Admin']);
        $user1->assignRole($role);
    }
}