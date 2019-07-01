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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet"/>
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>

<body class="dark-edition">
<div id="app">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="{{asset('/assets/img/sidebar-2.jpg')}}">
            <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

            Tip 2: you can also add an image using data-image tag
        -->

            <div class="logo d-flex justify-content-center">
                <a href="/players" class="simple-text logo-normal">
                    <img src="/img/logo.png" style="max-width:115px; opacity: .50;  filter: alpha(opacity=50);"/>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item {{ (request()->is('players')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('players.index', [ 'player' => $player ]) }}">
                            <i class="fas fa-chart-network"></i>
                            <p><i class="fas fa-address-book"></i>
                                <small>PLAYER INDEX</small></p>
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->is([ 'players/', Auth::user()->player ])) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('players.show', [ 'player' => Auth::user()->player ]) }}">
                            <i class="fas fa-chart-network"></i>
                            <p><i class="fas fa-user-circle"></i>
                                <small>MY PLAYER DASHBOARD</small></p>
                        </a>
                    </li>
                    @if (!is_null($player->characterOne))
                    <div class="logo">
                        <a href="{{ route('players.show', [ 'player' => Auth::user()->player ]) }}" class="simple-text logo-normal">
                            <small>Staff Section for <br/> Player: <strong>{{ $player->name }}</strong></small>
                        </a>
                    </div>
                        <li class="nav-item {{ (request()->is('players/**/warnings**')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('players.warnings.index', [ 'player' => $player ]) }}">
                                <i class="fas fa-chart-network"></i>
                                <p><i class="fas fa-exclamation-triangle"></i></i>
                                    <small>PLAYER WARNINGS</small></p>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->is('players/**/logs**')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('players.logs.index', [ 'player' => $player ]) }}">
                                <i class="fas fa-chart-network"></i>
                                <p><i class="fas fa-clipboard-list"></i>
                                    <small>VIEW LOGS</small></p>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->is('players/**/ban/**')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('players.ban.create', [ 'player' => $player ]) }}">
                                <i class="fas fa-chart-network"></i>
                                <p><i class="fas fa-user-slash"></i>
                                    <small>BAN PLAYER</small></p>
                            </a>
                        </li>
                    @endif
                    <!-- your sidebar here -->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Player or Character Search">
                                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                                    <i class="fas fa-search"></i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <i class="far fa-copyright"></i> LegacyRP
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{asset ('/assets/js/core/jquery.min.js')}}"></script>
    <script src="/assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Chartist JS -->
    <script src="/assets/js/plugins/chartist.min.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/assets/js/material-dashboard.js?v=2.1.0"></script>
</body>

</html>
