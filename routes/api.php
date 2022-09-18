<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::apiResource('Empleado', EmpleadoController::class)->except(['show'])
     ->Parameters(['Empleado'=>'empleado'])->names('Empleado');


Route::get('ClienteApiJulio', [ClienteController::class,'indexApi']);
Route::get('ClienteApi/{ci}', [ClienteController::class,'showApi']);
Route::get('ProductoApi/{p}', [ProductoController::class,'showApi']);

// Route::get('ClienteApi', function(){
//     $cliente = [
//         [
//             'nombre' => 'Cristian Cuellar',
//             'edad' => 22,
//         ],
//         [
//             'nombre' => 'Alexander Cuellar',
//             'edad' => 19,
//         ]
//     ];
//     return response()->json(['data' => $cliente],200);
// });


