@extends('template')

@section('contenido')


@if (session('success'))
<script>
    Swal.fire({
        title: 'Todo correcto: Libro " ',
        imageUrl: 'https://unsplash.it/400/200',
        imageWidth: 400,
        imageHeight: 200,
        text: '{{ session('success')['titulo'] }} " guardado con exito',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    })
</script>
@endif

    <div class="container  col-md-6">
        <h1 class="display-4 text-center mt-5 mb-5">Registro del libro</h1>
        @if ($errors -> any())
            @foreach ($errors->all() as $error)
            <!--
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Formulario incompleto</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            -->
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;"> 
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </symbol>
            </svg>
            <div class="alert alert-warning d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    <strong>Formulario incompleto</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    
                </div>
            </div>
            @endforeach
            
        @endif


<!--
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
                -->

        <div class="card">
            <div class="card-body">
                <h5 class="card-header text-center">Libro</h5>
                    <form method="POST" action="procesarFormulario">
                    @csrf
                    <div class="row mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">ISBN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtISBN">
                        </div>

                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Titulo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtTitulo">
                        </div>

                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Autor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtAutor">
                        </div>

                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Paginas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtPaginas">
                        </div>

                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Editorial</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtEditorial">
                        </div>

                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="txtEmail">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Registrar libro</button>
                    </form>
                    </div>
                </div>
            </div>




@stop
