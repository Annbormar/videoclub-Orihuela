<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Peliculas</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    @include('layouts.navigation')
    
    <main class="container mt-5">
        <h2 class="mb-4 text-center">Listado de películas</h2>

        <div class="row mb-3">
            <div class="col-12">
                <a href="{{ url('/movies/new') }}" class="btn btn-primary">Añadir película</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Director</th>
                            <th>Valoración</th>
                            <th>Duración</th>
                            <th>Stock</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listMovies as $pelicula)
                            <tr>
                                <td>{{ $pelicula->title }}</td>
                                <td>{{ $pelicula->director }}</td>
                                <td>{{ $pelicula->score }}</td>
                                <td>{{ $pelicula->duration }}</td>
                                <td>{{ $pelicula->stock }}</td>
                                <td>
                                    <a href="{{ url('/movies/' . $pelicula->id . '/edit') }}" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="{{ url('movies/' . $pelicula->id) }}" class="btn btn-sm btn-secondary">Mostrar</a>
                                    <a href="{{ url('movies/' . $pelicula->id . '/delete') }}" class="btn btn-sm btn-danger">Borrar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-5Igyz1FctgIwTStjzepQkymkRfFv3K5kF74cm4LmMvSWA0C4kuW9AKJgJB6E0fmU"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
