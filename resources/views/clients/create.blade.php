<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        .form-bg {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    @include('layouts.navigation')
    <div class="form-bg">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-container">
                        <h2 class="mb-4 text-center">Formulario de Cliente</h2>
                        <form action="{{ url('/clients/new') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="surname" class="form-label">Apellidos</label>
                                <input type="text" id="surname" name="surname" class="form-control" value="{{ old('surname') }}">
                            </div>

                            <div class="mb-3">
                                <label for="dateOfBirth" class="form-label">Fecha de nacimiento</label>
                                <input type="date" id="dateOfBirth" name="dateOfBirth" class="form-control" value="{{ old('dateOfBirth') }}">
                            </div>

                            <div class="mb-3">
                                <label for="movies" class="form-label">Películas alquiladas</label>
                                <input type="text" id="movies" name="movies" class="form-control" value="{{ old('movies') }}">
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary me-md-2">Crear</button>
                                <a href="{{ url('/clients') }}" class="btn btn-secondary">Volver</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-5Igyz1FctgIwTStjzepQkymkRfFv3K5kF74cm4LmMvSWA0C4kuW9AKJgJB6E0fmU"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
