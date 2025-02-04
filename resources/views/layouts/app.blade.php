<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/app.css">
    <link alt="Cinque terre" rel="shortcut icon" href="assets/logofupazul.ico" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>

#btncrear {
        background-color: #005790;
        border-radius: 30px;
        border: none;
    }

    #btncrear:hover {
        background-color: #0072BC;
        
        animation: 10s;
        border: none;
        box-shadow: 0 0px 10px 0 rgba(72, 110, 181, 0.3);
    }

    #boxtable {
        border-style: none;
        box-shadow: 0px 0px 10px -5px grey;
        border-radius: 8px;
        background-color: white;
    }
    #encabesadotabla{
        background-color: #00395E; color: white; text-align: center;
    }


</style>

<body style="background-color: #f8f8fb">

    <div id="app">
        <!--navbar azul-->
        @if (Auth::check())
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #005790;">
            <div class="container" style="height: 55px;">
                <div>
                    <img src="{{URL::asset('imagenes/fb.png')}}" style="height: 80px; float: left; margin: 0px; padding: 0%;">
                </div>
                <a class="navbar-brand" style="color: white !important;" href="{{ url('/') }}">
                    <!--{{ config('app.name', 'Laravel') }}-->
                    FUP
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
 

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))

                        @endif

                        @if (Route::has('register'))

                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" style="color: white !important;" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="far fa-user-circle fa-lg" style="margin-right: 10px;"></i>{{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-power-off"></i>{{ __(' Cerrar sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>  
        @endif
        
        <!--navbar original-->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!--<a class="navbar-brand" href="{{ url('/') }}">-->
                    <!--{{ config('app.name', 'Laravel') }}-->
                    <!--FUP
                </a>-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- condicional ocultar menu -->
                    @if (Auth::check())
                    
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('proyectos.index') }}"><i class="fas fa-graduation-cap"></i>{{ __(' Proyectos') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('sustentacions.index') }}"><i class="fas fa-chalkboard-teacher"></i>{{ __(' Sustentaciones') }}</a>
                        </li>
                    </ul>
                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                        </li>
                        @endif
                        @else
                        <!--<li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>-->
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!--como acceder a las imagenes en laravel  img src="{{URL::asset('directory/name_of_image_file.file_format')}}" -->
        <!--logo fup-->
        @if (!Auth::check())
        <div style="position: absolute; margin-top: 5px;">
            <img src="{{URL::asset('imagenes/f.png')}}" style="height: 100px; float: left;">
            <div style="background-color: rgba(0, 87, 144, 0.7); width: 3px; height: 100px; float: left; margin-right: 10px;"></div>
            <p style="float: left; color: #005790;"><br>Sistema de Gestión<br> de Trabajos de Grado.</p>
        </div>
        @endif
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>


</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>


</html>