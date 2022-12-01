@extends('template')

@section('contenido')


@if (session('success'))
<script>
    Swal.fire({
        title: 'Todo correcto:  ',
        imageUrl: 'https://unsplash.it/400/200',
        imageWidth: 400,
        imageHeight: 200,
        text: ' "{{ session('success')['cliente'] }} " guardado con exito',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    })
</script>
@endif

    <div class="container  col-md-6">
        <h1 class="display-4 text-center mt-5 mb-5">Registro del cliente</h1>
        

        <div class="card">
            <div class="card-body">
                <h5 class="card-header text-center">Clientes</h5>
                <br>
                    <form method="POST" action="procesarFormularioCliente">
                    @csrf
                    <div class="row mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre completo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtCliente" value={{old('txtCliente')}}>
                            <p class="text-danger fst-italic">  {{$errors->first('txtCliente')}}</p>

                        </div>

                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No. INE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtINE" value={{old('txtINE')}}>
                            <p class="text-danger fst-italic">  {{$errors->first('txtINE')}}</p>
                        </div>

                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="txtEmailCliente"  value={{old('txtEmailCliente')}}>
                            <p class="text-danger fst-italic">  {{$errors->first('txtEmailCliente')}}</p>

                        </div>
                        <div class="card-footer">
                            <br>
                            <button type="submit" class="btn btn-primary">Registrar cliente</button>
                    </form>
                    </div>
                </div>
            </div>




@stop
