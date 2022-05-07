<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersSeeder extends Seeder
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

        Permission::create(['name' => 'ver:productos']);
        Permission::create(['name' => 'crear:productos']);
        Permission::create(['name' => 'editar:productos']);
        Permission::create(['name' => 'eliminar:productos']);


        Permission::create(['name' =>'ver:factura']);
        Permission::create(['name'=>'crear:factura']);


        $adminRole->givePermissionTo(Permission::all());


        $user = new User();
        $user->name ="Admin";
        $user->email = "admin@admin.com";
        $user->password = bcrypt("password");
        $user->save();
        $user->assignRole($adminRole);
    }
}
