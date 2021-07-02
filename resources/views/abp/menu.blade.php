<html lang="en">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BUMESA</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">

        	<form class="d-flex" method="POST">
                <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('abp')}}">Pagina Principal</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('inicio')}}">Inicio</a>
                    </li>

                    <!--li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{url('exas')}}">Ingresar</a>
                    </li-->

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('Informacion')}}">Informes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('Zonas')}}">Zonas</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4 container">
        @yield('content')
    </main>
</body>
f