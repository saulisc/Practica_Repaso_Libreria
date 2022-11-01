<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/',[ControladorVistas::class,'showHome']) -> name('home');
Route::get('home',[ControladorVistas::class,'showHome']) -> name('home');
Route::get('registro',[ControladorVistas::class,'showRegistro']) -> name('registro');

Route::post('procesarFormulario',[ControladorVistas::class,'procesarFormulario']) -> name('procesarFormulario');
