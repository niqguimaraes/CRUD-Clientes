<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
 
Route::get('/', [ClienteController::class,'index']);
Route::get('/final-placa', [ClienteController::class,'search']);
Route::resource('clientes', ClienteController::class);

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ClienteController::class,'index']);
Route::get('/clientes', [ClienteController::class,'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class,'store']);
Route::get('/clientes/{id}', [ClienteController::class,'show'])->name('clientes.show');
Route::get('/clientes/{id}', [ClienteController::class,'edit']);
Route::post('/clientes/{id}', [ClienteController::class,'update']);

Route::delete('/clientes/{id}', [ClienteController::class, 'delete']);
Route::post('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');*/