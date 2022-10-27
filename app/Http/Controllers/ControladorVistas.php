<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRequest;


class ControladorVistas extends Controller
{
    public function procesarFormulario(validadorRequest $request){
        return redirect() -> route('registro') -> with('confirmacion', 'tus datos llegaron al controlador');
    }
    public function showRegistro(){
        return view('registro');
    }
    public function showHome(){
        return view('home');
    }
}
