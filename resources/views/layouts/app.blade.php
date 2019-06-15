<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site title -->
    <title>Legacy RP - Admin</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- Header to display on all the pages -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <img src="./img/logo.png" class="img-fluid py-3" alt="Site Logo">
                    </div>
                    <div class="col-sm-3"></div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <!-- Display information based on if user is authenticated or not -->
                    @if (Auth::check())
                        <!-- Display some basic user information -->
                            <img src="{{Auth::user()->avatar}}" alt="Profile Image">
                            <p>{{ Auth::user()->username }}</p>

                            <!-- Display a logout button -->
                            <a href="{{route('logout')}}">Logout</a>
                    @else
                        <!-- Display a login with steam button -->
                            <a href="{{route('auth.steam')}}">Login with Steam</a>
                        @endif
                    </div>
                </div>
            </div>
        </header>

        <!-- Displaying of content -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
