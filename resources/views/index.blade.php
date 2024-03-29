<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Legacy Roleplay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/all.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/frontpage/css/theme.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">
</head>

<body data-smooth-scroll-offset="77">
    <div class="nav-container">
        <div class="bar bar--sm visible-xs">
            <div class="container">
                <div class="row">
                    <div class="col-3 col-md-2">
                        <a href="/">
                            <img class="logo logo-light" alt="logo" src="/img/logo.png">
                        </a>
                    </div>
                    <div class="col-9 col-md-10 text-right">
                        <a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs hidden-sm">
                            <i class="icon icon--sm stack-interface stack-menu"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <nav id="menu1" class="bar bar-1 hidden-xs bg--dark bar--absolute bar--transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-md-2 hidden-xs">
                        <div class="bar__module">
                            <a href="/">
                                <img class="logo logo-light" alt="logo" src="/img/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                        <div class="bar__module">
                            <ul class="menu-horizontal text-left">
                                <li>
                                    <a class="nav-main" href="{{ "https://legacyroleplay.online/" }}">
                                        <i class="fas fa-comment-alt"></i> Forums
                                    </a>
                                </li>
                                @if (Auth::check())
                                    <li>
                                        <a class="nav-main" href="{{ route('players.index')  }}">
                                            <i class="fas fa-users"></i> Player Profiles
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-main" href="{{ route('players.show', [ 'player' => Auth::user()->player ]) }}">
                                            <i class="fas fa-link"></i> {{ Auth::user()->username }}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-main" href="{{ route('logout') }}">
                                            <i class="fas fa-sign-out-alt"></i> Logout
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <!-- Display a login with steam button -->
                                        <a class="nav-main" href="{{ route('login.steam') }}">
                                            <i class="fas fa-sign-in-alt"></i> Login with steam
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="bar__module">
                            <a class="btn btn--sm btn--primary type--uppercase" href="https://discord.gg/LegacyRP" target="_self">
                                <span class="btn__text">Join Our Discord</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!--End Header--->
    <div class="main-container">
        <section class="cover height-80 imagebg text-center parallax" data-overlay="4">
            <div class="background-image-holder">
                <img alt="background" src="/frontpage/img/main-image.jpg">
            </div>
            <div class="container pos-vertical-center">
                <div class="row">
                    <div class="col-md-10 col-lg-10">
                        <h1 class="type--uppercase"><b>We are Legacy RP</b></h1>
                        <p class="lead">
                            We are a worldwide community of roleplayers for FiveM. Welcome to our home in Los  Santos. We strive to provide
                            a serious roleplay environment through a number of versatile  features, strictly enforced rule sets, a competent
                            staff team, but most importantly an <b>incredible player base.</b>
                        </p>
                        <a class="btn btn--primary type--uppercase" href="https://discord.gg/LegacyRP" target="_self">
                            <span class="btn__text">Join our Discord</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg--dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature feature-2 boxed boxed--border"><i class="fas fa-sync fa-3x"></i>
                            <div class="feature__body">
                                <p>Legacy RP features 4x32 servers with synced inventory.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature feature-2 boxed boxed--border"><i class="fas fa-tachometer-alt fa-3x"></i>
                            <div class="feature__body">
                                <p>Not sure what to put here, but the servers are blazing fast.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature feature-2 boxed boxed--border"><i class="fas fa-code fa-3x"></i>
                            <div class="feature__body">
                                <p>Legacy RP Built with a custom framework.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="switchable feature-large bg--dark">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-md-6"><img alt="Image" class="border--round box-shadow-wide"
                                               src="https://via.placeholder.com/540x360"></div>
                    <div class="col-md-6 col-lg-5">
                        <div class="switchable__text">
                            <h2>The Legacy LSPD SWAT Division</h2>
                            <p class="lead"> Organizing before a raid on the Cartel after detectives discovered the location
                                of the Cartel HQ. Despite extreme planning and preparing, the Cartel was able to defeat the
                                entire LSPD SWAT Division.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg--dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature feature-4 boxed boxed--lg boxed--border">
                            <h4>Here is what you can expect from LegacyRP</h4>
                            <hr>
                            <p> We are a serious roleplay server that where you can work as a transporter, or a mechanic, a
                                drug
                                kingpin, or a detective that brings him to justice. You can be anyone in LegacyRP, as
                                innocent or evil as you'd like. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature feature-4 boxed boxed--lg boxed--border">
                            <h4>A Large Ruleset (Working Title)</h4>
                            <hr>
                            <p> We have a large set of rules that we strictly adhere to. Fill this in. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature feature-4 boxed boxed--lg boxed--border">
                            <h4>We Have a Large Staff Team</h4>
                            <hr>
                            <p> We have a large staff team to handle in game reports. Take cases up into discord and resolve
                                them
                                instantly. Provide basic tech support through discord. Flesh out this section more to
                                describe more
                                of what the staff do to help the community and also that the staff enforce a strict ruleset
                                to
                                maintain roleplay standards. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer-7 text-center-xs bg--primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <span class="type--fine-print">
                            © <span class="update-year"></span>
                            Legacy — All Rights Reserved -
                            <a href="https://github.com/ExpDev07/legacy-rp-admin">https://github.com/ExpDev07/legacy-rp-admin</a>
                        </span>
                    </div>
                    <div class="col-sm-6 text-right text-center-xs">
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{asset ('assets/js/core/jquery.min.js')}}"></script>
    <script src="/frontpage/js/parallax.js"></script>
    <script src="/frontpage/js/smooth-scroll.min.js"></script>
    <script src="/frontpage/js/scripts.js"></script>

</body>
</html>
