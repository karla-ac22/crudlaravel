<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/empleado', [PersonaController::class,'index']);
Route::post('/empleado', [PersonaController::class,'store']);
Route::post('/empleado/{id}', [PersonaController::class,'update']);

Route::get('/empleado/crear', [PersonaController::class,'create']);
Route::get('/empleado/{id}/edit', [PersonaController::class,'edit']);
Route::delete('empleado/{id}', [PersonaController::class, 'destroy']);
//Route::apiresource('/empleado', [PersonaController::class]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
