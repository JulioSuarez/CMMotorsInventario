<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PruebasController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\VentasController;


use PHPUnit\Framework\MockObject\Rule\Parameters;

//use App\Http\Controllers\Contr;
// use App\Http\Controllers\PruebasController;
// use App\Http\Controllers\PruebasController;
// use App\Http\Controllers\PruebasController;


Route::get('/', function () {
    return redirect()->Route('Login');
});

Route::get('/prueba', function () {
    return view('prueba');
});


Route::get('Login', [AuthController::class, 'login'])
    ->name('Login');
Route::post('Login', [AuthController::class, 'loginStore'])
    ->name('LoginStore');
Route::get('Dashboard', [AuthController::class, 'dashboard'])
    ->name('Dashboard')->middleware('auth');
Route::post('Logout', [AuthController::class, 'logout'])
    ->name('Logout');

/////////////////PRUEBAS
Route::get('pruebas', [PruebasController::class, 'index']);

Route::resource('Cliente', ClienteController::class)->except(['show'])
    ->Parameters(['Cliente' => 'cliente'])->names('Cliente')->middleware('auth');

Route::get('pdf', [ClienteController::class, 'pdf'])->name('cliente.pdf');
Route::get('lista', [ClienteController::class, 'variables'])->name('lista');

Route::resource('Empleado', EmpleadoController::class)->except(['show'])
    ->Parameters(['Empleado' => 'empleado'])->names('Empleado')->middleware('auth');

Route::resource('Producto', ProductoController::class)   //->except(['show'])
    ->Parameters(['Producto' => 'p'])->names('Producto')->middleware('auth');


Route::get('Cat_Productos', [ProductoController::class, 'index_categoria'])
    ->name('Categoria.index')->middleware('auth');
Route::get('Cat_Productos/create', [ProductoController::class, 'create_categoria'])
    ->name('Categoria.create')->middleware('auth');
Route::post('Cat_Productos/create', [ProductoController::class, 'store_categoria'])
    ->name('Categoria.store')->middleware('auth');
Route::get('Cat_Productos/{c}/edit', [ProductoController::class, 'edit_categoria'])
    ->name('Categoria.edit')->middleware('auth');
Route::put('Cat_Productos/{c}/edit', [ProductoController::class, 'update_categoria'])
    ->name('Categoria.update')->middleware('auth');
Route::delete('Cat_Productos/{c}/delete', [ProductoController::class, 'delete_categoria'])
    ->name('Categoria.destroy')->middleware('auth');




Route::resource('Proveedor', ProveedorController::class)->except(['show'])
    ->Parameters(['Proveedor' => 'p'])->names('Proveedor')->middleware('auth');

Route::resource('Ubicacion', UbicacionController::class)->except(['show'])
    ->Parameters(['Ubicacion' => 'ubicacion'])->names('Ubicacion')->middleware('auth');


Route::get('Estante/create', [UbicacionController::class, 'createEstante'])
    ->name('Estante.create')->middleware('auth');
Route::post('Estante/store', [UbicacionController::class, 'storeEstante'])
    ->name('Estante.store')->middleware('auth');
Route::get('Estante/{estante}/edit', [UbicacionController::class, 'editEstante'])
    ->name('Estante.edit')->middleware('auth');
Route::put('Estante/{estante}/update', [UbicacionController::class, 'updateEstante'])
    ->name('Estante.update')->middleware('auth');
Route::delete('Estante/{estante}/delete', [UbicacionController::class, 'deleteEstante'])
    ->name('Estante.delete')->middleware('auth');

Route::get('Sector/create', [UbicacionController::class, 'createSector'])
    ->name('Sector.create')->middleware('auth');
Route::post('Sector/store', [UbicacionController::class, 'storeSector'])
    ->name('Sector.store')->middleware('auth');
Route::get('Sector/{sector}/edit', [UbicacionController::class, 'editSector'])
    ->name('Sector.edit')->middleware('auth');
Route::put('Sector/{sector}/update', [UbicacionController::class, 'updateSector'])
    ->name('Sector.update')->middleware('auth');
Route::delete('Sector/{sector}/delete', [UbicacionController::class, 'deleteSector'])
    ->name('Sector.delete')->middleware('auth');



Route::resource('Venta', VentasController::class)
    ->Parameters(['Venta' => 'venta'])->names('Venta')->middleware('auth');


// ruta de prueba julico
Route::post('myurl', [AuthController::class, 'show']);
Route::get('/navegador', [ProductoController::class, 'navar'])
->name('navegador');
