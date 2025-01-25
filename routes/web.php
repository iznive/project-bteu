<?php

use App\Http\Controllers\RolesAndPermissionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//  Route::get('/', function () {
//      return view('welcome');
//  });

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('add-permission', [App\Http\Controllers\RolesAndPermissionController::class, 'addPermission']);

//ruta de datos personales del egresado
Route::get('/ud_empleador', [App\Http\Controllers\EmpleadorController::class, 'index']);

//ruta de datos personales del egresado
Route::get('/ud_egresado', [App\Http\Controllers\EgresadoController::class, 'index']);

//ruta para ver a todos los usuarios
Route::get('/users-show', [App\Http\Controllers\UsersController::class, 'index']);
