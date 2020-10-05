<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Registreerimis vorm') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        input.filter{
            margin: auto;
            max-width: 150px;
        }

        .table{
            display: table;
        }

        @media
        only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px)  {


            input.reg{
                width: auto;
                height: auto;
            }

            input.slider{
                width: auto;
                height: auto;
            }

            span.ageNumber{
                width: 15%;
                font-size: 15px;
                margin-left: 170px;
                margin-top: 32px;
                position: absolute;
            }

            table, thead, tbody, th, td, tr {
                display: block;
            }

            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr { border: 1px solid #ccc; }

            td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
                text-align: right;


}

            td:before {
                position: absolute;
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                text-align: left;
            }

            td:nth-of-type(1):before { content: "Ettevõte"; }
            td:nth-of-type(2):before { content: "Ettevõtte nimi"; }
            td:nth-of-type(3):before { content: "Registrikood"; }
            td:nth-of-type(4):before { content: "Nimi"; }
            td:nth-of-type(5):before { content: "Vanus"; }
            td:nth-of-type(6):before { content: "E-mail"; }
            td:nth-of-type(7):before { content: "Muuda"; }
        }

    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand">Registreerimis vorm</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('register') }}">Regisreerimine</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/home') }}">Kasutajate haldus</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
