<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\ControladorBD;

Route::get('/', [ControladorBD::class, 'showHome'])->name('home');

//create book
Route::get('libro/create', [ControladorBD::class, 'create'])->name('libro.create');
//post on db of books
Route::post('libro', [ControladorBD::class, 'store'])->name('libro.store');

//show books
Route::get('libro', [ControladorBD::class, 'index'])->name('libro.index');

//edit books
Route::get('/libro/{id}/editBook', [ControladorBD::class,'edit']) -> name('libro.edit');
//update books 
Route::put('libro/{id}', [ControladorBD::class,'update']) -> name('libro.update');

//get delete book
Route::get('libro/{id}/delete', [ControladorBD::class,'delete']) -> name('libro.delete');
//delete book
Route::delete('libro/{id}', [ControladorBD::class,'destroy']) -> name('libro.destroy');


//CLIENTES

//for cliente view
Route::get('clientes/createCliente', [ControladorBD::class, 'showCliente'])->name('clientes.createCliente');
//post on db of books
Route::post('clientes', [ControladorBD::class, 'storeCliente'])->name('clientes.storeCliente');

//show clientes
Route::get('clientes', [ControladorBD::class, 'indexClientes'])->name('clientes.indexClientes');

//edit clientes
Route::get('/clientes/{id}/editCliente', [ControladorBD::class,'editCliente']) -> name('clientes.editCliente');
//update clientes 
Route::put('clientes/{id}', [ControladorBD::class,'updateCliente']) -> name('clientes.updateCliente');

//get delete clientes
Route::get('clientes/{id}/deleteCliente', [ControladorBD::class,'deleteCliente']) -> name('clientes.deleteCliente');
//delete clientes
Route::delete('clientes/{id}', [ControladorBD::class,'destroyCliente']) -> name('clientes.destroyCliente');



//pending for books
//Route::post('procesarFormularioCliente',[ControladorVistas::class,'procesarFormularioCliente']) -> name('procesarFormularioCliente');

//alv
//Route::get('home',[ControladorVistas::class,'showHome']) -> name('home');
