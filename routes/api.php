<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;



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
Route::resource("/productos", ProductoController::class);
Route::resource("/clientes", ClienteController::class);
Route::get("/codigos/{codigo}/productos", [ProductoController::class, "cargarPorCodigo"]);
Route::post("/ventas", [VentaController::class, "store"]);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
