<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- SB Admin Styles -->
    <link href="{{ asset('css/sb-admin-styles.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
</head>
<body>
    <div id="app">

        @yield('topbar')

        <div id="layoutSidenav">

            @yield('sidebar')

            <div id="layoutSidenav_content">

                <main class="bg-light">
                    <div class="container-fluid px-4">
                        @yield('content')
                    </div>
                </main>

                @yield('footer')
            </div>
        </div>

    </div>
    <!-- SB Admin Scripts -->
    <script src="{{ asset('js/sb-admin-scripts.js') }}" defer></script>
</body>
</html>
