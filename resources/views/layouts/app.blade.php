<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

</head>
<body>
    <div id="app">

        <b-navbar toggleable="sm" type="dark" variant="primary">
            <b-navbar-toggle target="nav-text-collapse"></b-navbar-toggle>
            <b-navbar-brand href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</b-navbar-brand>
            <b-collapse id="nav-text-collapse" is-nav>
              <b-navbar-nav class="ml-auto">
                @guest
                  <b-nav-item href="{{ route('login') }}">Iniciar Sesión</b-nav-item>
                  <b-nav-item href="{{ route('register') }}">Registro</b-nav-item>
                @else       
                  <b-nav-item-dropdown text="Username" right>
                    <b-dropdown-item href="#">Cerrar Sesión</b-dropdown-item>
                  </b-nav-item-dropdown>
                  @endguest
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>


          
              
             
         

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
