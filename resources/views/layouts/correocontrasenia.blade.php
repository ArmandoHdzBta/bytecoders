<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="/css/recuperar.css">
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>
 
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
 
     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div class="login-box">
        <h2>@yield('subtitulo')</h2>
        <h3>@yield('mensaje.de.contraseña')</h3>

        @yield('mensaje.de.envio')
        <br>
        <br>

        @yield('formulario.contraseña')
    </div>

</body>

</html>