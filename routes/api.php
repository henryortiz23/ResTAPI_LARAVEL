<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::apiResource('empleados', ApiEmpleController::class);
Route::get('empleados/show', [ApiEmpleController::class, 'index'])->name('empleados.index');
Route::post('empleados/create', [ApiEmpleController::class, 'create'])->name('empleados.create');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
