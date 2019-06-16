<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<?php
$bg = array('bg04.jpg', 'bg019.jpg', 'bg020.png', 'bg021.png', 'bg022.png','bg023.png', 'bg024.png', 'bg025.png', 'bg026.png', 'bg027.png', 'bg028.png', 'bg029.png' ); // array of filenames

$i = rand(0, count($bg)-1); // generate random number size of the array
$selectedBg = $bg[$i]; // set variable equal to which random filename was chosen
?>
<head>
    <style type="text/css">
        <!-- body {
            background: url("img/<?= $selectedBg; ?>") center fixed;
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
</head>

<body>
<div id="app">
    <!-- Header to display on all the pages -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-2 py-3"><a href="/"><img src="./img/logo.png" style="max-height:120px;" class="img-fluid mw-100" alt="Legacy RP"></a></div>
                <div class="col-sm-10 py-3">
                    <div class="row">
                        <div class="col-sm-2">
                            <a href="/about" class="nav-main">About LegacyRP<p class="nav-desc d-none d-sm-block">More information about legacy RP and our community</p></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="/rules" class="nav-main">LegacyRP Rules<p class="nav-desc d-none d-sm-block">Learn the city rules and how to play on our community</p></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="/howtoplay" class="nav-main">How to Play<p class="nav-desc d-none d-sm-block">Learn about commands, jobs, and get a printable cheat sheet</p></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#" class="nav-main">City Forums<p class="nav-desc d-none d-sm-block">Get help and make suggestions in our city forums</p></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="/discord" class="nav-main">City Discord<p class="nav-desc d-none d-sm-block">Join in the discussion with thousands of citizens in our Discord</p></a>
                        </div>
                        <div class="col-sm-2">
                            <!-- Display information based on if user is authenticated or not -->
                            @if (Auth::check())
                                <!-- Display some basic user information -->
                                <img class="img-fluid rounded-circle d-none d-sm-block" style="max-height:40px;" src="{{Auth::user()->avatar}}" alt="Profile Image">
                                <p class="nav-desc d-none d-sm-block">{{ Auth::user()->username }}</p>

                                <!-- Display a logout button -->
                                <a href="{{route('logout')}}" class="nav-main">Logout</a>
                            @else
                                <!-- Display a login with steam button -->
                                <a href="{{route('auth.steam')}}" class="nav-main">Login with Steam</a>
                                <p class="nav-desc">Login with steam to (I can't think of a description)</p>
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
