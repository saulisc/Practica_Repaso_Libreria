@extends('template')

@section('contenido')

@if (session()->has('confirmacion'))
{!!
    "<script>
    Swal.fire(
        'All right!',
        'Los datos pasaron al controlador',
        'Success');
    </script>"
  !!}
@endif 
    <div class="container  col-md-6">
        <h1 class="display-4 text-center mt-5 mb-5">Registro del libro</h1>
        @if ($errors -> any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Formulario incompleto</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforeach
            
        @endif



        <div class="card">
            <div class="card-body">
                <h5 class="card-header text-center">Libro</h5>
                <form method="POST" action="procesarFormulario">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">ISBN</label>
                        <input type="text" class="form-control" name="txtISBN">
                    </div>
                    <div>
                        <label class="form-label">Titulo</label>
                        <input type="text" class="form-control" name="txtTitulo">
                    </div>
                    <div>
                        <label class="form-label">Autor</label>
                        <input type="text" class="form-control" name="txtAutor">
                    </div>
                    <div>
                        <label class="form-label">Paginas</label>
                        <input type="text" class="form-control" name="txtPaginas">
                    </div>
                    <div>
                        <label class="form-label">Editorial</label>
                        <input type="text" class="form-control" name="txtEditorial">
                    </div>
                    <div>
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="txtEmail">
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Registrar libro</button>
                </form>
            </div>
        </div>
    </div>
    </div>


@stop
