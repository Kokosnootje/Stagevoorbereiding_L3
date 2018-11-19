<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/confirm.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/fontAwesome.css')}}

</head>
<body>
    <div class="pos-f-t">
        <nav class="navbar id= navbar-dark col-xl-12 navbar-expand-lg bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarToggleExternalContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item navbar-brand active">
                        <a class="nav-link" href="{{route('houses.index')}}">Huizen overzicht<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" href="{{route('users.index')}}">Gebruikers</a>
                    </li>
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" href="{{route ('logboek.index')}}">Logboek</a>
                    @guest
                        <li class="nav-item navbar-brand">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Inloggen') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown navbar-brand">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Log uit') }}
                                </a>

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
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
