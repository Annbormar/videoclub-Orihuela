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
                        <h2 class="mb-4 text-center">Formulario de Película</h2>
                        <form action="{{ url('/movies/new') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Título</label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="director" class="form-label">Director</label>
                                <input type="text" id="director" name="director" class="form-control" value="{{ old('director') }}">
                            </div>

                            <div class="mb-3">
                                <label for="score" class="form-label">Puntuación</label>
                                <input type="number" step="0.1" id="score" pattern="^[0-9]+" name="score" class="form-control" value="{{ old('score') }}">
                            </div>

                            <div class="mb-3">
                                <label for="duration" class="form-label">Duración (minutos)</label>
                                <input type="number" id="duration"  pattern="^[0-9]+" name="duration" class="form-control" value="{{ old('duration') }}">
                            </div>

                            <div class="mb-3">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="number" id="stock" name="stock" class="form-control" value="{{ old('stock') }}">
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary me-md-2">Crear</button>
                                <a href="{{ url('/movies') }}" class="btn btn-secondary">Volver</a>
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
