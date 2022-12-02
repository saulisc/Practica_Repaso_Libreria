<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRequest;
use App\Http\Requests\validadorRequestUsuario;
use DB;
use Carbon\Carbon;

class ControladorBD extends Controller
{
    //for clientes
    public function deleteCliente($id)
    {
        $consultaIdCliente = DB::table('tb_users')
            ->where('idUser', $id)
            ->first();
        return view('deleteCliente', compact('consultaIdCliente'));
    }
    //for books
    public function destroyCliente($id)
    {
        DB::table('tb_users')
            ->where('idUser', $id)
            ->delete();

        return redirect('clientes')->with('Eliminado', 'abc');
    }

    //for clientes
    public function editCliente($id)
    {
        $consultaIdCliente = DB::table('tb_users')
            ->where('idUser', $id)
            ->first();
        return view('editCliente', compact('consultaIdCliente'));
    }

    //for clientes
    public function indexClientes()
    {
        $resultCliente = DB::table('tb_users')->get();
        return view('showClientes', compact('resultCliente'));
    }

    //for clientes
    public function updateCliente(validadorRequestUsuario $request, $id)
    {
        DB::table('tb_users')
            ->where('idUser', $id)
            ->update([
                'cliente' => $request->input('txtCliente'),
                'ine' => $request->input('txtINE'),
                'email_cliente' => $request->input('txtEmailCliente'),
                'updated_at' => Carbon::now(),
            ]);
        return redirect('clientes')->with('Actualizado', 'abc');
    }

    //for clientes
    public function createCliente()
    {
        return view('clientes');
    }

    ////for clientes
    public function storeCliente(validadorRequestUsuario $request)
    {
        $cliente = $request->input('txtCliente');
        DB::table('tb_users')->insert([
            'cliente' => $request->input('txtCliente'),
            'ine' => $request->input('txtINE'),
            'email_cliente' => $request->input('txtEmailCliente'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('clientes/createCliente')->with('guardado', compact('cliente'));
    }

    //for books
    public function delete($id)
    {
        $consultaIdBook = DB::table('tb_libros')
            ->where('idLibro', $id)
            ->first();
        return view('deleteBook', compact('consultaIdBook'));
    }
    //for books
    public function destroy($id)
    {
        DB::table('tb_libros')
            ->where('idLibro', $id)
            ->delete();

        return redirect('libro')->with('Eliminado', 'tu libro se ha eliminado');
    }

    //for books
    public function edit($id)
    {
        $consultaIdBook = DB::table('tb_libros')
            ->where('idLibro', $id)
            ->first();
        return view('editBook', compact('consultaIdBook'));
    }

    //for books
    public function update(validadorRequest $request, $id)
    {
        DB::table('tb_libros')
            ->where('idLibro', $id)
            ->update([
                'isbn' => $request->input('txtISBN'),
                'titulo' => $request->input('txtTitulo'),
                'autor' => $request->input('txtAutor'),
                'paginas' => $request->input('txtPaginas'),
                'editorial' => $request->input('txtEditorial'),
                'email' => $request->input('txtEmail'),
                'updated_at' => Carbon::now(),
            ]);
        return redirect('libro')->with('Actualizado', 'abc');
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

    public function showCliente()
    {
        return view('clientes');
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
