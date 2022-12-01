@extends('template')
@section('contenido')
    



    <div class="container col-md-6">
        <h1 class="display-4 text-center mt-5 mb-5"> Editar libros </h1>
        <div class="card text-center mb-5">
            <div class="display-7 card-header">
                Editar libro
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('libro.update', $consultaIdBook->idLibro) }}">
                    @csrf
                    {!! method_field('PUT') !!}
                    <div class="mb-3">
                        <label class="display-8 form-label">ISBN: </label>
                        <input type="text" class="form-control" name="txtISBN" value="{{ $consultaIdBook->isbn }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtISBN') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="display-8 form-label">Titulo: </label>
                        <input type="text" class="form-control" name="txtTitulo" value="{{ $consultaIdBook->titulo }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtTitulo') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="display-8 form-label">Autor: </label>
                        <input type="text" class="form-control" name="txtAutor" value="{{ $consultaIdBook->autor }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtAutor') }} </p>
                    </div>


                    <div class="mb-3">
                        <label class="display-8 form-label">Paginas: </label>
                        <input type="text" class="form-control" name="txtPaginas" value="{{ $consultaIdBook->paginas }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtPaginas') }} </p>
                    </div>


                    <div class="mb-3">
                        <label class="display-8 form-label">Editorial: </label>
                        <input type="text" class="form-control" name="txtEditorial"
                            value="{{ $consultaIdBook->editorial }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtEditorial') }} </p>
                    </div>


                    <div class="mb-3">
                        <label class="display-8 form-label">Email: </label>
                        <input type="text" class="form-control" name="txtEmail" value="{{ $consultaIdBook->email }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtEmail') }} </p>
                    </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Guardar cambios</button>
                <a href="{{route('libro.index', $consultaIdBook -> idLibro)}}" class="btn btn-success m-1">Regresar</a>
                </form>
            </div>
        </div>
    </div>
@stop
