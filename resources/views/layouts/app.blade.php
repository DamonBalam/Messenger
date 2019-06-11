<!DOCTYPE html class="h-100">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

</head>
<body class="h-100">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <div id="app" class="h-100">
        <b-navbar toggleable="sm" type="dark" variant="primary">
            <b-navbar-toggle target="nav-text-collapse"></b-navbar-toggle>
            <b-navbar-brand href="{{ route('chat') }}">{{ config('app.name', 'Laravel') }}</b-navbar-brand>
            <b-collapse id="nav-text-collapse" is-nav>
              <b-navbar-nav class="ml-auto">
                @guest
                  <b-nav-item href="{{ route('login') }}">Iniciar Sesión</b-nav-item>
                  <b-nav-item href="{{ route('register') }}">Registro</b-nav-item>
                @else
                  <b-nav-item-dropdown text="{{ auth()->user()->name }}" right>
                  <b-dropdown-item href="{{ url('/profile')}} ">
                        Editar Perfil
                    </b-dropdown-item>
                    <b-dropdown-item href="#" @click="logout">
                        Cerrar Sesión
                    </b-dropdown-item>
                  </b-nav-item-dropdown>
                  @endguest
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>

        @yield('content')

    </div>
</body>
</html>
