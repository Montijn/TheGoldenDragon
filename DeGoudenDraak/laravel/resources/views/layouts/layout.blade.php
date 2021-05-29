<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel='stylesheet' type='text/css' href="{{asset('/css/header.css')}}">
    <link rel='stylesheet' type='text/css' href="{{asset('/css/login.css')}}">
    <link rel='stylesheet' type='text/css' href="{{asset('/css/general.css')}}">
    <link rel='stylesheet' type='text/css' href="{{asset('/css/cashDesk.css')}}">
    <link rel='stylesheet' type='text/css' href="{{asset('/css/menu.css')}}">
    <link rel='stylesheet' type='text/css' href="{{asset('/css/sales.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="{{asset('/js/cashDesk.js')}}" defer></script>
    <script src="{{asset('/js/header.js')}}" defer></script>
    <script src="{{asset('/js/sales.js')}}" defer></script>
    <script src="{{asset('/js/main.js')}}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" type="javascript"></script>
    </head>
    <header>
        @yield('header')
    </header>
    <body>
        <main>
            @yield('content')
        </main>
    </body>
</html>
