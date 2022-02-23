<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/empleado', [PersonaController::class,'index']);
Route::post('/empleado', [PersonaController::class,'store']);

Route::get('/empleado/crear', [PersonaController::class,'create']);
Route::delete('empleado/{id}', [PersonaController::class, 'destroy']);