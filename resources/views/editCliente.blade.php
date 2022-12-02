@extends('template')
@section('contenido')
    



    <div class="container col-md-6">
        <h1 class="display-4 text-center mt-5 mb-5"> Editar clientes </h1>
        <div class="card text-center mb-5">
            <div class="display-7 card-header">
                Editar cliente
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('clientes.updateCliente', $consultaIdCliente -> idUser) }}">
                    @csrf
                    {!! method_field('PUT') !!}
                    <div class="mb-3">
                        <label class="display-8 form-label">Cliente: </label>
                        <input type="text" class="form-control" name="txtCliente" value="{{ $consultaIdCliente->cliente }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtCliente') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="display-8 form-label">INE: </label>
                        <input type="text" class="form-control" name="txtINE" value="{{ $consultaIdCliente->ine }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtINE') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="display-8 form-label">Email: </label>
                        <input type="text" class="form-control" name="txtEmailCliente" value="{{ $consultaIdCliente->email_cliente }}">
                        <!-- aqui otra opcion para visualizar los errores -->
                        <p class="text-danger fst-italic"> {{ $errors->first('txtEmailCliente') }} </p>
                    </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Guardar cambios</button>
                <a href="{{route('clientes.indexClientes', $consultaIdCliente -> idUser)}}" class="btn btn-success m-1">Regresar</a>
                </form>
            </div>
        </div>
    </div>
@stop
