<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    @include('layouts.navigation')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4">Detalles del Cliente</h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: {{ $client->name }}</h5>
                        <p class="card-text"><strong>Apellidos:</strong> {{ $client->surname }}</p>
                        <p class="card-text"><strong>Fecha de nacimiento:</strong> {{ $client->dateOfBirth }}</p>
                        <p class="card-text"><strong>Películas alquiladas:</strong> {{ $client->movies }}</p>
                        <a href="{{ url('/clients') }}" class="btn btn-secondary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-5Igyz1FctgIwTStjzepQkymkRfFv3K5kF74cm4LmMvSWA0C4kuW9AKJgJB6E0fmU"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
