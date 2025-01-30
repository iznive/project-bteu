<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //Roles y permisos
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        
        //Usuarios base

        User::factory(10)->create()->each(function ($user) {
            $user->assignRole('empleador');
        });
    }
}
