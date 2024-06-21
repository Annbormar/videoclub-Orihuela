<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de la Película</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    @include('layouts.navigation')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Detalle de la Película</h2>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Título: {{ $movie->title }}</h5>
                    <p class="card-text"><strong>Director:</strong> {{ $movie->director }}</p>
                    <p class="card-text"><strong>Puntuación:</strong> {{ $movie->score }}</p>
                    <p class="card-text"><strong>Duración:</strong> {{ $movie->duration }} minutos</p>
                    <p class="card-text"><strong>Stock:</strong> {{ $movie->stock }}</p>
                    <a href="{{ url('/movies') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>
</html>
