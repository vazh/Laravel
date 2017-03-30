<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>eRAT KSP Nusantara - @yield('title')</title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
    <style>
        html, body {
            height: 100%;
        }

        main {
            height: 100%;
        }

        ul.side-nav.fixed li.logo:hover, ul.side-nav.fixed li.logo #logo-container:hover {
            background-color: transparent;
        }

        ul.side-nav.fixed li.logo {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        header, main, footer {
            padding-left: 300px;
        }

        @media only screen and (max-width: 992px) {
            header, main, footer {
                padding-left: 0;
            }
        }

        #logo-container {
            height: 100px;
        }

        .auto-height {
            max-height: 100%;
            width: auto;
        }

        nav {
            height: 30px;
            line-height: 30px;
        }

        nav i, nav [class^="mdi-"], nav [class*="mdi-"], nav i.material-icons {
            height: 30px;
            line-height: 30px;
        }

        nav .button-collapse i {
            height: 30px;
            line-height: 30px;
        }

        nav .brand-logo {
            font-size: 1.6rem;
        }

        @media only screen and (min-width: 601px){
            nav, nav .nav-wrapper i, nav a.button-collapse, nav a.button-collapse i {
                height: 30px;
                line-height: 30px;
            }
        }

        #pdfViewer {
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <nav class="top-nav hide-on-large-only">
            <div class="nav-wrapper">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                <a href="#" class="brand-logo center">eRAT</a>
            </div>
        </nav>
        <ul id="slide-out" class="side-nav fixed">
            <li class="logo">
                <a id="logo-container">
                    <img src="{{ url('assets/logo/kopnus.jpg') }}" alt="Koperasi Nusantara" class="auto-height">
                </a>
            </li>
            <li><div class="divider"></div></li>
            <li><a class="waves-effect" href="{{ route('report', 'asd') }}">Report</a></li>
            <li><a class="waves-effect" href="{{ route('logout') }}"><i class="material-icons">power_settings_new</i>Logout</a></li>
        </ul>
    </header>
    <main>
        @section('main')
            Main Content
        @show
    </main>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
    <script>
        $('.button-collapse').sideNav();
    </script>
</body>
</html>
