<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">                
                <button class="navbar-toggler custom" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand d-lg-none d-xl-none logfon" href="#">
                    <!-- Img -->
                    <img src="{{asset('images/logo.png')}}" alt="Logo" width="150" height="50">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link @yield('inicio_menu')" aria-current="page" href="/">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('nosotros_menu')" href="{{route('nosotros')}}">NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('servicios_menu')" href="{{route('servicios')}}">SERVICIOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('proyectos_menu')" href="{{route('proyectos')}}">PROYECTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('contacto_menu')" href="{{route('contacto')}}">CONTACTO</a>
                        </li>
                    </ul>
                    <a class="navbar-brand mx-auto d-none d-md-none d-sm-none d-lg-block d-xl-block logfon" href="#">
                        <!-- Img -->
                        <img src="{{asset('images/logo.png')}}" alt="Logo" width="230" height="50">
                    </a>
                    <div class="redes ms-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="https://www.facebook.com/">
                                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook youdevs">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.instagram.com/">
                                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram youdevs">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#">
                                    <img src="{{asset('images/whatsapp.png')}}" class="img-fluid" width="40px" alt="instagram youdevs">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    
    <!-- Contenido -->
    @yield('content') @section('content')

    <!-- Footer -->
    <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <img src="{{asset('images/logo.png')}}" alt="YouDevs logo" width="420" id="logofooter">
            </div>
            <div id="col-md-10">
                <a href="https://www.facebook.com/">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook">
                </a>
                <a href="https://www.instagram.com/">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram">
                </a>
                <a href="#">
                    <img src="{{asset('images/whatsapp.png')}}" class="img-fluid" width="40px" alt="instagram">
                </a>
                <p class="mt-3">Copyright © 2021 ModernArt. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>