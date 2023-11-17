<?php

//use App\Http\Controllers\ApiEmpleController;
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
//Route::get('empleados/show', [ApiEmpleController::class, 'index'])->name('empleados.index');
//Route::post('empleados/create', [ApiEmpleController::class, 'create'])->name('empleados.create');


Route::get('/', function () {
    return view('welcome');
});
