<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container justify-content-center">
        <a class="navbar-brand" href="{{ url('/') }}">Videoclub Orihuela</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Centered Navbar Links -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/movies') }}">Películas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/clients') }}">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/movies/new') }}">Añadir pelicula</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/clients/new') }}">Añadir cliente</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
