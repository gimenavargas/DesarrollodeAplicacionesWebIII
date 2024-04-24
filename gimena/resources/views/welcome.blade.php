<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to bottom, #f3f4f6, #000000);
            color: #333;
        }
        .container {
            padding: 20px;
        }
        h1 {
            color: #1a202c;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        nav .nav-link {
            margin: 0 10px;
            text-decoration: none;
        }
        img {
            display: block;
            margin: 0 auto;
            margin-top: 20px;
            max-width: 100%;
            height: auto;
        }
        footer {
            margin-top: 50px;
            padding: 20px 0;
            background-color: #2d3748;
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">WELCOME TO MY PAGE</h1>

    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ruta1') }}">route1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ruta2') }}">route2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ruta3') }}">route3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ruta4') }}">route4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ruta5') }}">route5</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link btn btn-success" href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-primary" href="{{ route('login') }}">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-primary" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>

<h1 style="text-align: center;">HOLIS XD</h1>

<!-- Inserta la URL de la imagen en src -->
<img src="https://media.tenor.com/KC5HIotG-bgAAAAd/cute-robot.gif" alt="Descripción de la imagen" class="d-block mx-auto">

<footer class="fixed-bottom">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
   <p> Estudent : Gimena Vargas Tolentino</p>
</footer>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>