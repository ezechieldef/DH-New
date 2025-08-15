<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $perms = [
            'manage services',
            'manage posts',
            'manage projects',
            'manage partners',
            'manage faq',
            'manage testimonials',
            'manage users'
        ];
        foreach ($perms as $p) {
            Permission::firstOrCreate(['name'=>$p]);
        }

        $admin = Role::firstOrCreate(['name'=>'admin']);
        $admin->givePermissionTo(Permission::all());

        if ($user = User::first()) {
            $user->assignRole($admin);
        }
    }
}