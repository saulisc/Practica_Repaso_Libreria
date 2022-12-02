@extends('template')
@section('contenido')
  <!-- añadimos un condicional para que sirva como
        un notificador en caso de que se ejecute la condicion -->

<div class="container col-md-6">
    <h1 class="display-4 text-center mt-5 mb-5"> Confirmar acción </h1>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>¿Seguro que deseas eliminar el siguiente cliente?</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="card text-center mb-5">
        <div class="display-7 card-header">
            <label class="display-8 form-label"> {!! $consultaIdCliente -> created_at !!} </label>
        </div>
        <div class="card-body">
                @csrf
                {!!method_field('PUT')!!}
                <div class="mb-3">
                  <label class="display-8 form-label">Cliente: {!! $consultaIdCliente -> cliente !!} </label>
                </div>

                <div class="mb-3">
                    <label class="display-8 form-label">INE: {!! $consultaIdCliente -> ine !!} </label>                  
                </div>

                <div class="mb-3">
                    <label class="display-8 form-label">Email: {!! $consultaIdCliente -> email_cliente !!} </label>                  
                </div>

        </div>

        <div class="card-footer">
            <form action="{{route('clientes.destroyCliente', $consultaIdCliente -> idUser)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar cliente</button>
                <a href="{{route('clientes.indexClientes', $consultaIdCliente -> idUser)}}" class="btn btn-success m-1">Regresar</a>
            </form>
            
           
        </div>
      </div>
</div>
@stop