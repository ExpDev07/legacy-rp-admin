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
    <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet"/>
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>

<body class="dark-edition">
    <div id="app">
        <div class="wrapper ">
            <div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('/assets/img/sidebar-2.jpg') }}">
                <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

                Tip 2: you can also add an image using data-image tag
                -->

                <div class="d-flex justify-content-center m-4">
                    <a href="/players" class="simple-text logo-normal">
                        <img src="/img/logo.png" style="max-width:115px; opacity: .50;  filter: alpha(opacity=50);"/>
                    </a>
                </div>
                <hr class="style-two mt-4 mb-2">
                <div class="sidebar-wrapper">
                    @yield('navigation')
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
                            <form class="navbar-form" method="GET" action="{{ route('players.index') }}">
                                <div class="input-group no-border">
                                    <input type="text" name="query" class="form-control" placeholder="Search for player">
                                    <button type="submit" class="btn btn-default btn-round btn-just-icon">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->

                <!-- Content -->
                <div class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>

                <!-- Footer -->
                <footer class="footer">
                    <div class="container-fluid">
                        <i class="far fa-copyright"></i> Legacy Roleplay - <a href="https://github.com/ExpDev07/legacy-rp-admin">https://github.com/ExpDev07/legacy-rp-admin</a>
                    </div>
                </footer>
            </div>
        </div>

        <!-- Core JS Files -->
        <script src="{{asset ('/assets/js/core/jquery.min.js')}}"></script>
        <script src="/assets/js/core/bootstrap-material-design.min.js"></script>
        <script src="https://unpkg.com/default-passive-events"></script>

        <!-- Chartist JS -->
        <script src="/assets/js/plugins/chartist.min.js"></script>

        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="/assets/js/material-dashboard.js?v=2.1.0"></script>
    </div>
</body>

</html>
