<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create Role
        $superAdmin = Role::create(['name' => 'superadmin']);
        $admin = Role::create(['name' => 'admin']);
        $member = Role::create(['name' => 'member']);

        //Create User
        $userSuperAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@techade.id',
            'password' => bcrypt('sukses2025')
        ]);

        $userAdmin = User::create([
            'name' => 'Admin',
            'email' => 'abdillah@techade.id',
            'password' => bcrypt('sukses2025')
        ]);

        //Assign Role
        $userSuperAdmin->assignRole($superAdmin);
        $userAdmin->assignRole($admin);
    }
}
