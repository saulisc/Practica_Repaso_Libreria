@extends('template')

@section('contenido')

    @if (session('guardado'))
        <script>
            Swal.fire({
                title: 'Todo correcto: ',
                imageUrl: 'https://unsplash.it/400/200',
                imageWidth: 400,
                imageHeight: 200,
                text: ' Libro "{{ session('guardado')['titulo'] }}" guardado con exito',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            })
        </script>
    @endif

    <div class="container  col-md-6">
        <br>
        <a href="{{ route('libro.index') }}" class="btn btn-success m-1">Ver libros</a>
        {{-- <a href="{{ route('libro.edit'), $consulta -> idLibro)}}" class="btn btn-warning m-1">Ver libros</a> --}}

        <h1 class="display-4 text-center mt-5 mb-5">Registro del libro</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-header text-center">Libro</h5>
                <br>
                <form method="POST" action="{{ route('libro.store') }}">

                    @csrf
                    <div class="row mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">ISBN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtISBN" value={{ old('txtISBN') }}>
                            <p class = "text-danger fst-italic"> {{ $errors -> first('txtISBN') }} </p>
                            <br>
                        </div>

                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Titulo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtTitulo" value={{ old('txtTitulo') }}>
                            <p class = "text-danger fst-italic"> {{ $errors -> first('txtTitulo') }} </p>
                            <br>
                        </div>

                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Autor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtAutor" value={{ old('txtAutor') }}>
                            <p class = "text-danger fst-italic"> {{ $errors -> first('txtAutor') }} </p>
                            <br>
                        </div>

                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Paginas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtPaginas" value={{ old('txtPaginas') }}>
                            <p class = "text-danger fst-italic"> {{ $errors -> first('txtPaginas') }} </p>
                            <br>
                        </div>

                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Editorial</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtEditorial" value={{ old('txtEditorial') }}>
                            <p class = "text-danger fst-italic"> {{ $errors -> first('txtEditorial') }} </p>
                            <br>
                        </div>

                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="txtEmail" value={{ old('txtEmail') }}>
                            <p class = "text-danger fst-italic"> {{ $errors -> first('txtEmail') }} </p>
                            <br>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Registrar libro</button>
                </form>
            </div>
        </div>
    </div>




@stop
