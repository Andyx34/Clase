<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EjemplarUsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libro/index',[LibroController::class,'index'])->name('libro.index');
Route::get('/libro/create',[LibroController::class,'create']);
Route::post('/libro/store', [LibroController::class,'store'])->name('libro.store');
Route::get('/libro/{libro}',[LibroController::class,'show'])->name('libro.show');
Route::put('/libro/{libro}',[LibroController::class,'update'])->name('libro.update');
Route::delete('/libro/{libro}',[LibroController::class,'destroy'])->name('libro.destroy');
Route::get('/libro/{libro}/editar',[LibroController::class,'edit'])->name('libro.edit');

Route::get('/ejemplar/asociar_ejemplar',[EjemplarUsuarioController::class,'asociar']);
Route::post('/ejemplar/asociar_ejemplar/store',[EjemplarUsuarioController::class,'store'])->name('ejemplar_usuario.store');