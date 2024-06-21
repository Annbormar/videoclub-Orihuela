<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mb-4">Bienvenido a Videoclub Orihuela</h2>
                <div class="d-grid gap-3">
                    <a href="{{ url('/movies/') }}" class="btn btn-primary btn-lg">Ver Películas</a>
                    <a href="{{ url('/clients/') }}" class="btn btn-secondary btn-lg">Ver Clientes</a>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h4 class="text-center mt-5">formulario de ayuda</h4>
        <p class="text-center">La página dispone de las siguientes funcionalidades:
            <ul class="text-center">
                <p class="text-center">/movies: Listado de peliculas en el sistema, muestra algunos detalles y el stock.</p>
                <p class="text-center">/clients: Listado de clientes en el sistema, muestra los datos de estos.</p>
                <p class="text-center">/movies/create: Sirve para añadir una pelicula al sistema.</p>
                <p class="text-center">/clients/create: Sirve para añadir un cliente nuevo al sistema.</p>
                <p class="text-center">/movies/{id}/edit: Sirve para editar una pelicula existente.</p>
                <p class="text-center">/clients/{id}/edit: Sirve para editar un cliente existente.</p>
                <p class="text-center">/movies/{id}/delete: Sirve para borrar una pelicula que ya no tenga el stock.</p>
                <p class="text-center">/clients/{id}/delete: Sirve para borrar un cliente existente ya no pertenezca a la base de datos.</p>
                <p class="text-center">/clients/rent: Sirve para alquilar una pelicula.</p>
                <p class="text-center">/clients/return: Sirve para devolver una pelicula.</p>
                <p class="text-center">/movies/show: Sirve para ver los datos de una pelicula.</p>
                <p class="text-center">/clients/show: Sirve para ver los datos de un cliente.</p>
            </ul>
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
