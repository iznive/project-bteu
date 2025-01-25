<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionController extends Controller
{
    //
    public function addPermission(Request $request)
    {
        $permission = [
            'Egresados',
            'Empleador',
            'Catalogos',
            'Configuración'
        ];

        foreach ($permission as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Permission::create(['name' => 'Add Product']);
    }
}
