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
        <link href="{{ asset('css/all.css') }}" rel="stylesheet">
        <link href="https://bootswatch.com/4/cyborg/bootstrap.css" rel="stylesheet">

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
                                    <a href="/" class="nav-main">
                                        <i class="far fa-eye"></i> About<div class="nav-desc d-none d-sm-block">More information about LegacyRP and our community</div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="https://legacyroleplay.online/server-rules" class="nav-main d-none d-sm-block"><span class="glyphicon glyphicon-education"></span> Rules<div class="nav-desc">Learn the city rules and how to play on our community</div></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="#" class="nav-main"><span class="glyphicon glyphicon-console"></span> How to Play<div class="nav-desc d-none d-sm-block">Learn about commands, job and get a printable cheat sheet</div></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="https://legacyroleplay.online/categories" class="nav-main"><span class="glyphicon glyphicon-list-alt"></span> Forums<div class="nav-desc d-none d-sm-block">Get help and make suggestions in our city forums</div></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="/players" class="nav-main"><span class="glyphicon glyphicon-user"></span> Player Profiles<div class="nav-desc d-none d-sm-block">See detailed player and character profiles</div></a>
                                </div>
                                <!-- Display information based on if user is authenticated or not -->
                                <div class="col-sm-2">
                                    @if (Auth::check())
                                        <!-- Display some basic user information -->
                                        <a href="{{ route('players.show', [ 'player' => Auth::user()->player ]) }}" class="nav-main"><span class="glyphicon glyphicon-link"></span> {{ Auth::user()->username }}<br/>
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
