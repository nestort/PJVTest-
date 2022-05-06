<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminRole = Role::create(['name' => 'administrador']);
        $usersRole = Role::create(['name' => 'usuario']);

        Permission::create(['name' => 'ver:usuarios']);
        Permission::create(['name' => 'crear:usuarios']);
        Permission::create(['name' => 'editar:usuarios']);
        Permission::create(['name' => 'eliminar:usuarios']);




        $user = new User();
        $user->name ="Admin";
        $user->email = "admin@admin.com";
        $user->password = bcrypt("password");
        $user->save();
        $user->assignRole($adminRole);
    }
}
