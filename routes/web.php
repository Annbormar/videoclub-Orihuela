<?php

use App\Http\Controllers\movieController;
use App\Http\Controllers\clientController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

#Rutas de alquiler o devolucion
Route::get('clients/{id}/rent', [clientController::class,'rent']);
Route::get('clients/{id}/return', [clientController::class,'return']);
Route::get('clients/saveRent', [clientController::class,'saveRent']);
Route::get('clients/saveReturn', [clientController::class,'saveReturn']);

#Rutas de peliculas
Route::get('movies', [movieController::class,'index'])->name('movies.list');
Route::get('movies/new', [movieController::class,'create']);
Route::post('movies/new', [movieController::class,'store']);
Route::get('movies/{id}/edit', [movieController::class,'edit']);
Route::put('movies/{id}', [movieController::class,'update']);
Route::get('movies/{id}', [movieController::class, 'show']);
Route::get('movies/{id}/delete', [movieController::class, 'delete']);

#Rutas de cliente

Route::get('clients', [clientController::class,'index'])->name('clients.list');
Route::get('clients/new', [clientController::class,'create']);
Route::post('clients/new', [clientController::class,'store']);
Route::get('clients/{id}/edit', [clientController::class,'edit']);
Route::put('clients/{id}', [clientController::class,'update']);
Route::get('clients/{id}', [clientController::class, 'show']);
Route::get('clients/{id}/delete', [clientController::class, 'delete']);

