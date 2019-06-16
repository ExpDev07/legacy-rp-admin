<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <?php
    $bg = array('bg01.jpg', 'bg03.jpg', 'bg04.jpg', 'bg06.jpg', 'bg011.jpg', 'bg012.jpg', 'bg013.jpg', 'bg015.jpg', 'bg016.jpg', 'bg017.jpg', 'bg018.jpg', 'bg019.jpg', 'bg020.png' ); // array of filenames

    $i = rand(0, count($bg)-1); // generate random number size of the array
    $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
    ?>
    <style type="text/css">
        <!-- body {
            background: url(img/<?php echo $selectedBg; ?>) center;
            font-family: 'Roboto Condensed',
            sans-serif;
            background-attachment: fixed;
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
                <div class="col-sm-2 py-2"><img src="./img/logo.png" class="img-fluid py-2" alt="Legacy RP"></div>
                    <div class="col-sm-10 py-3">
                        <div class="row">
                            <div class="col-sm-2"><p><a href="#" class="nav-main" alt="About Legacy RP">About LegacyRP</a></p><p class="nav-desc">More information about legacy RP and our community</p></div>
                            <div class="col-sm-2"><p><a href="#" class="nav-main" alt="Legacy RP Rules">LegacyRP Rules</a></p><p class="nav-desc">Learn the city rules and how to play on our community</p></div>
                            <div class="col-sm-2"><p><a href="#" class="nav-main" alt="Rules and How to Play">How to Play</a></p><p class="nav-desc">Learn about commands, jobs, and get a printable cheat sheet</p></div>
                            <div class="col-sm-2"><p><a href="#" class="nav-main" alt="City Forums">City Forums</a></p><p class="nav-desc">Get help and make suggestions in our city forums</p></div>
                            <div class="col-sm-2"><p><a href="#" class="nav-main" alt="City Discord">City Discord</a></p><p class="nav-desc">Join in the discussion with thousands of citizens in our Discord</p></div>
                            <div class="col-sm-2"><p>
                                <!-- Display information based on if user is authenticated or not -->
                            @if (Auth::check())
                                <!-- Display some basic user information -->
                                    <img src="{{Auth::user()->avatar}}" alt="Profile Image">
                                    <p>{{ Auth::user()->username }}</p>

                                    <!-- Display a logout button -->
                                    <a href=" class="nav-main"{{route('logout')}}">Logout</a>
                            @else
                                <!-- Display a login with steam button -->
                                    <a href="{{route('auth.steam')}}" class="nav-main">Login with Steam</a></p>
                                @endif
                            <p class="nav-desc">Login with steam to (I can't think of a description)</p></div>
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
