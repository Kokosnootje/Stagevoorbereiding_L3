<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Harry Potter</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>
    <div class="pos-f-t">
        <nav class="navbar id= navbar-dark navbar-expand-lg bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarToggleExternalContent">
                <ul class="navbar-nav">
                    <li class="navbar-brand">
                        <a class="nav-link" href="{{route('houses.index')}}">Huizen overzicht</a>
                    </li>

                    @can('user-index')
                    <li class="navbar-brand">
                        <a class="nav-link" href="{{route('users.index')}}">Gebruikers</a>
                    </li>
                    @endcan

                    @can('log')
                    <li class="navbar-brand">
                        <a class="nav-link" href="{{route('logbook.index')}}">Logbook</a>
                    </li>
                    @endcan

                    @guest
                        <li class="navbar-brand">
                            <a class="nav-link" href="{{ route('login') }}">Inloggen</a>
                        </li>
                    @else
                        <li class="dropdown navbar-brand">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">Uitloggen</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        @endguest
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <main>
        @yield('content')
    </main>
</body>
</html>
