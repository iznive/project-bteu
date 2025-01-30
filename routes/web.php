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

Route::middleware(['auth'])->group(function () {
   
    //route de inicio
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //route de crud usuarios
    route::get('users-show',[App\Http\Controllers\UsersController::class, 'index'])->name('users.usershow');
    //ruta de datos personales del egresado
    Route::get('/ud_empleador', [App\Http\Controllers\EmpleadorController::class, 'index'])->name('empleador.em_updatedata');
    //ruta de datos personales del egresado
    Route::get('/ud_egresado', [App\Http\Controllers\EgresadoController::class, 'index'])->name('egresados.eg_updatedata');


});






Route::get('add-permission', [App\Http\Controllers\RolesAndPermissionController::class, 'addPermission']);



