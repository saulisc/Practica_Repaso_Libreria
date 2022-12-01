@extends('template')

@section('contenido')

    @if (session()->has('Actualizado'))
        {!! "<script> Swal.fire(
                  'Correcto!',
                  'Tu libro se actualizo correctamente!',
                  'success'
                )</script> " !!}
    @endif

    @if (session()->has('Eliminado'))
        {!! "<script> Swal.fire(
              'Correcto!',
              'Tu libro se elimino correctamente!',
              'success'
            )</script> " !!}
    @endif

    @foreach ($resultLib as $consulta)
        <div class="container col-md-6">

            <div class="card text-center mt-5 mb-5">
                <div class="display-7 card-header">
                    {{ $consulta->created_at }}
                </div>

                <div class="card-body">
                    <p>ISBN: {{ $consulta->isbn }}</p>
                    <p>Titulo: {{ $consulta->titulo }}</p>
                    <p>Autor: {{ $consulta->autor }}</p>
                    <p>Páginas: {{ $consulta->paginas }}</p>
                    <p>Editorial: {{ $consulta->editorial }}</p>
                    <p>Email: {{ $consulta->email }}</p>

                </div>

                <div class="card-footer">
                    <a href="{{ route('libro.edit', $consulta->idLibro) }}" class="btn btn-warning m-1">Actualizar</a>
                    <a href="{{ route('libro.delete', $consulta->idLibro) }}" class="btn btn-danger m-1">Eliminar</a>

                </div>
            </div>
        </div>
    @endforeach
@stop
