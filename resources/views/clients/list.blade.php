<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>
        .btn-custom {
            background-color: #619e81;
        }
    </style>
</head>
<body>
    @include('layouts.navigation')
    
    <div class="container mt-5">
        <h2 class="text-center mb-4">Listado de Clientes</h2>

        <!-- Botón para añadir cliente -->
        <div class="row mb-3">
            <div class="col-12">
                <a href="{{ url('/clients/new') }}" class="btn btn-primary">Añadir Cliente</a>
            </div>
        </div>

        <!-- Tabla de listado de clientes -->
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Películas Alquiladas</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listClients as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->name }}</td>
                            <td>{{ $cliente->surname }}</td>
                            <td>{{ $cliente->dateOfBirth }}</td>
                            <td>{{ $cliente->movies }}</td>
                            <td>
                                <a href="{{ url('/clients/' . $cliente->id . '/edit') }}" class="btn  btn-sm btn-primary fw-medium text-white">Editar</a>
                                <a href="{{ url('/clients/' . $cliente->id) }}" class="btn btn-sm btn-secondary fw-medium text-white">Mostrar</a>
                                <a href="{{ url('/clients/' . $cliente->id . '/delete') }}" class="btn btn-sm btn-danger fw-medium text-white">Borrar</a>
                                <a href="{{ url('/clients/' . $cliente->id . '/rent') }}" class="btn btn-sm btn-custom fw-medium text-white">Alquilar</a>
                                <a href="{{ url('/clients/' . $cliente->id . '/return') }}" class="btn btn-sm btn-custom fw-medium text-white">Devolver</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
