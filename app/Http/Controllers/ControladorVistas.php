<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRequest;


class ControladorVistas extends Controller
{
    public function procesarFormulario(validadorRequest $request){
        $titulo = $request->input('txtTitulo');
        //el success cuenta mucho a la hora de regresar ese return 
        return redirect() -> route('registro') -> with('success', compact('titulo'));

        //return view('registro', compact('titulo'));
    }
    public function showRegistro(){
        return view('registro');
    }
    public function showHome(){
        return view('home');
    }
}
