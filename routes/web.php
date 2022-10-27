<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Route::view('home','home') -> name('home');
Route::view('registro','registro') -> name('registro');