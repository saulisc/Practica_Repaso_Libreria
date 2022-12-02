@extends('template')

@section('contenido')

    @if (session()->has('Actualizado'))
        {!! "<script> Swal.fire(
                  'Correcto!',
                  'Tu cliente se actualizo correctamente!',
                  'success'
                )</script> " !!}
    @endif

    @if (session()->has('Eliminado'))
        {!! "<script> Swal.fire(
              'Correcto!',
              'Tu cliente se elimino correctamente!',
              'success'
            )</script> " !!}
    @endif

    @foreach ($resultCliente as $consulta)
        <div class="container col-md-6">

            <div class="card text-center mt-5 mb-5">
                <div class="display-7 card-header">
                    {{ $consulta->created_at }}
                </div>

                <div class="card-body">
                    <p>Cliente: {{ $consulta->cliente }}</p>
                    <p>INE: {{ $consulta->ine }}</p>
                    <p>Email: {{ $consulta->email_cliente }}</p>
                </div>

                <div class="card-footer">
                    <a href="{{ route('clientes.editCliente', $consulta->idUser) }}" class="btn btn-warning m-1">Actualizar</a>
                    <a href="{{ route('clientes.deleteCliente', $consulta->idUser) }}" class="btn btn-danger m-1">Eliminar</a>

                </div>
            </div>
        </div>
    @endforeach
@stop
