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
     */
    public function run(): void
    {
        /*Admin => all, 
        egresado => ver egresado y configuracion, 
        empleador => ver empleador y configuracion
        */

        $admin = Role::create(['name'=> 'Admin']);
        $egresado = Role::create(['name'=> 'egresado']);
        $empleador = Role::create(['name'=> 'empleador']);

        Permission::create(['name'=>'home'])->syncRoles([$admin, $egresado, $empleador]);
        Permission::create(['name'=>'users.usershow'])->syncRoles([$admin]);;
        Permission::create(['name'=>'users.usercreate'])->syncRoles([$admin]);;
        Permission::create(['name'=>'users.userstore'])->syncRoles([$admin]);;
        Permission::create(['name'=>'users.useredit'])->syncRoles([$admin]);;
        Permission::create(['name'=>'users.userupdate'])->syncRoles([$admin]);;
        Permission::create(['name'=>'users.userdestroy'])->syncRoles([$admin]);;
        Permission::create(['name'=>'empleador.em_updatedata'])->syncRoles([$admin, $empleador]);;
        Permission::create(['name'=>'egresados.eg_updatedata'])->syncRoles([$admin, $egresado]);;

   

        //verificar si en databaseseeder esta ejecuntandose
        //ejecutar la sentencia php artisan migrate:fresh --seed
    }
}