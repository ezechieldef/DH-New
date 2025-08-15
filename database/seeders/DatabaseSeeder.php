<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ServiceSeeder::class,
            FaqSeeder::class,
            PostSeeder::class,
            RolePermissionSeeder::class,
        ]);
    }
}