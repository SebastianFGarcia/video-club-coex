<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleClient = Role::create(['name' => 'client']);

        Permission::create(['name' => 'movies.index'])->syncRoles([$roleAdmin, $roleClient]);
        Permission::create(['name' => 'movies.show'])->syncRoles([$roleAdmin, $roleClient]);
        Permission::create(['name' => 'movies.store'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'movies.update'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'movies.destroy'])->syncRoles([$roleAdmin]);
        

    }
}
