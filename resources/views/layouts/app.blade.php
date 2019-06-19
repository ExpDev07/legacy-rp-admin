<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<?php
$bg = array('bg021.jpg', 'bg022.jpg','bg023.jpg', 'bg025.jpg', 'bg026.jpg', 'bg027.jpg', 'bg028.jpg',); // array of filenames

$i = rand(0, count($bg)-1); // generate random number size of the array
$selectedBg = $bg[$i]; // set variable equal to which random filename was chosen
?>
<head>
    <style type="text/css">
        <!-- body {
            background: url("/img/<?= $selectedBg; ?>") center fixed;
            font-family: 'Roboto Condensed',
            sans-serif;
        }
        -->
    </style>
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
    <link href="https://bootswatch.com/4/cyborg/bootstrap.css" rel="stylesheet">
    <link rel='stylesheet' href='{{ asset('/css/bootstrap.min.css') }}' />
</head>

<body>
<div id="app">
    <!-- Header to display on all the pages -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-2 py-3"><a href="/"><img src="/img/logo.png" style="max-height:120px;" class="img-fluid mw-100" alt="Legacy RP"></a></div>
                <div class="col-sm-10 py-3">
                    <div class="row">
                        <div class="col-sm-2">
                            <a href="/" class="nav-main">About<div class="nav-desc">More information about LegacyRP and our community</div></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="https://legacyroleplay.online/server-rules" class="nav-main">Rules<div class="nav-desc">Learn the city rules and how to play on our community</div></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="/how-to-play" class="nav-main">How to Play<div class="nav-desc">Learn about commands, job and get a printable cheat sheet</div></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#" class="nav-main">Forums<div class="nav-desc">Get help and make suggestions in our city forums</div></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="/discord" class="nav-main">Discord<div class="nav-desc">Join in the discussion with thousands of citizens in our Discord</div></a>
                        </div>
                        <!-- Display information based on if user is authenticated or not -->
                        <div class="col-sm-2">
                            @if (Auth::check())
                                <!-- Display some basic user information -->
                                <p><a href="#" class="nav-main">{{ Auth::user()->username }}</a></p>

                                <!-- Display a logout button -->
                                <a href="{{route('logout')}}" class="nav-main">Logout</a>
                            @else
                                <!-- Display a login with steam button -->
                                <a href="{{route('login.steam')}}" class="nav-main">Login<div class="nav-desc">Login with Steam</div></a>
                            @endif
                        </div>
                    </div>
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
