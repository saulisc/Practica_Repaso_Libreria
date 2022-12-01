<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRequest;
use DB;
use Carbon\Carbon;
//use App\Http\Requests\validadorRequestUsuario;

class ControladorBD extends Controller
{
    //for books
    public function delete($id)
    {
        $consultaIdBook = DB::table('tb_libros') -> where('idLibro', $id) -> first();
        return view('deleteBook', compact('consultaIdBook'));
    }
    //for books
    public function destroy($id)
    {
        DB::table('tb_libros') -> where('idLibro', $id) -> delete();
        

        return redirect('libro') -> with('Eliminado', "tu libro se ha eliminado");
    }

    //for books
    public function edit($id)
    {
        $consultaIdBook = DB::table('tb_libros') -> where('idLibro', $id) -> first();
        return view('editBook', compact('consultaIdBook'));
    }

    //for books
    public function update(validadorRequest $request, $id){
        DB::table('tb_libros') -> where('idLibro', $id) -> update([
            "isbn" => $request->input('txtISBN'),
            "titulo" => $request->input('txtTitulo'),
            "autor" => $request->input('txtAutor'),
            "paginas" => $request->input('txtPaginas'),
            "editorial" => $request->input('txtEditorial'),
            "email" => $request->input('txtEmail'),
            "updated_at" => Carbon::now(),
        ]);
        return redirect('libro') -> with('Actualizado', "abc");
    }

    //for books
    public function index()
    {
        $resultLib = DB::table('tb_libros')->get();
        return view('showLibros', compact('resultLib'));
    }

    //for books
    public function create()
    {
        return view('registro');
    }

    ////for books
    public function store(validadorRequest $request)
    {
        $titulo = $request->input('txtTitulo');
        DB::table('tb_libros')->insert([
            'isbn' => $request->input('txtISBN'),
            'titulo' => $request->input('txtTitulo'),
            'autor' => $request->input('txtAutor'),
            'paginas' => $request->input('txtPaginas'),
            'editorial' => $request->input('txtEditorial'),
            'email' => $request->input('txtEmail'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('libro/create')->with('guardado', compact('titulo'));
    }

    public function showHome()
    {
        return view('home');
    }

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
