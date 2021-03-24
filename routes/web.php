<?php

use App\Http\Controllers\Almacenamiento\AlmacenamientoController;
use App\Http\Controllers\Contabilidad\ContabilidadController;
use App\Http\Controllers\Facturacion\FacturacionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('users/list', [UserController::class, 'list'])->name('user.list');
    Route::prefix('almacenamiento')->group(function () {
        Route::get('dashborad', [AlmacenamientoController::class, 'dashboard'])->name('almacenamiento.dashboard');
        Route::get('proveedores', [AlmacenamientoController::class, 'proveedores'])->name('almacenamiento.proveedores');

    });
    Route::prefix('facturacion')->group(function () {
        Route::get('dashborad', [FacturacionController::class, 'dashboard'])->name('facturacion.dashboard');
        Route::get('clientes', [FacturacionController::class, 'clientes'])->name('facturacion.clientes');
    });
    Route::prefix('contabilidad')->group(function () {
        Route::get('dashborad', [ContabilidadController::class, 'dashboard'])->name('contabilidad.dashboard');
        Route::get('empleados', [ContabilidadController::class, 'empleados'])->name('contabilidad.empleados');
        Route::get('puntoEquilibrio', [ContabilidadController::class, 'puntoEquilibrio'])->name('contabilidad.puntoEquilibrio');
    });
});

