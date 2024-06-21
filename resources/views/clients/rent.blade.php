<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquileres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('layouts.navigation')
    
    <main class="container mt-5">
        <h2 class="text-center mb-4">Elija la película para alquilar</h2>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ url('/clients/saveRent') }}" method="GET">
                    <input type="hidden" id="id" name="id" value="{{$id}}">
                    <div class="input-group mb-3">
                        <input type="text" id="movieId" name="movieId" class="form-control" placeholder="Ingrese el ID de la película a alquilar" aria-label="Ingrese el ID de la película a alquilar">
                        <button class="btn btn-primary" type="submit">ALQUILAR</button>
                    </div>
                </form>
            </div>
        </div>
        
    <h2 class="text-center mb-4">Películas en alquiler:</h2>

    <div class="row mb-5 justify-content-center">
            <div class="col md-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>ID</th>
                            <th>Título</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listMovies as $pelicula)
                            <tr>
                                <td>{{ $pelicula->id }}</td>
                                <td>{{ $pelicula->title }}</td>
                                <td>{{ $pelicula->stock }}</td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
