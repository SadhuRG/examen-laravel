<?php

use Illuminate\Support\Facades\Route;


Route::view('/','home')->name('inicio');
Route::view('ingreso','ingreso')->name('ingreso');
Route::get('alumnos/create', [App\Http\Controllers\AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('alumnos', [App\Http\Controllers\AlumnoController::class, 'store'])->name('alumnos.store');

Route::view('listado','listado')->name('listado');

Route::get('listado', [App\Http\Controllers\AlumnoController::class, 'index'])->name('listado');

Route::get('/alumnos/{id}', [AlumnoController::class, 'show'])->name('alumnos.show');

Route::get('alumnos/{id}', [App\Http\Controllers\AlumnoController::class, 'show'])->name('alumnos.show');
