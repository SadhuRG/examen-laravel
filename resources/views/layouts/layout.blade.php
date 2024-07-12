<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Estilo adicional */
        .navbar-brand img {
            width: 28px;
            height: 28px;
            margin-right: 5px;
        }

        .navbar-nav .nav-link {
            color: #333;
        }

        .navbar-nav .nav-link:hover {
            color: #555;
        }

        .navbar-nav .nav-item.active .nav-link {
            color: red;
            text-decoration: underline;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('imagenes/home-icon.png') }}" alt="Home Icon">
                HOME
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item {{ setActivo('ingreso') }}">
                        <a class="nav-link" href="{{ url('/ingreso') }}">Ingreso</a>
                    </li>
                    <li class="nav-item {{ setActivo('listado') }}">
                        <a class="nav-link" href="{{ url('/listado') }}">Listado</a>
                    </li>
                </ul>
                <!-- Aquí podrías agregar un formulario de búsqueda, por ejemplo -->
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
                <!-- Fin del formulario de búsqueda -->
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS (opcional, solo si necesitas componentes interactivos) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @yield('content')   
</body>
</html>