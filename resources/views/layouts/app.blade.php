<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <?php
    $bg = array('bg01.jpg', 'bg03.jpg', 'bg04.jpg', 'bg05.jpg', 'bg06.jpg', 'bg08.jpg', 'bg011.jpg', 'bg012.jpg', 'bg013.jpg', 'bg015.jpg', 'bg016.jpg', 'bg017.jpg', 'bg018.jpg', 'bg019.jpg', 'bg020.png' ); // array of filenames

    $i = rand(0, count($bg)-1); // generate random number size of the array
    $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
    ?>
        <style type="text/css">
            <!-- body {
                background: url(img/<?php echo $selectedBg; ?>) center;
                font-family: 'Roboto Condensed', sans-serif;
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
                    <div class="col-sm-2 py-2"><img src="./img/logo.png" class="img-fluid py-2"></div>
                    <div class="col-sm-2 py-5"><a href="#" class="nav-main">About LegacyRP</a></div>
                    <div class="col-sm-2 py-5"><a href="#" class="nav-main">LegacyRP Rules</a></div>
                    <div class="col-sm-2 py-5"><a href="#" class="nav-main">How to Play</a></div>
                    <div class="col-sm-2 py-5"><a href="#" class="nav-main">City Forums</a></div>
                    <div class="col-sm-2 py-5"><a href="#" class="nav-main">Player Administration</a></div>
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
