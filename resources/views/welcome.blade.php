<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

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
    <body class="bg-light">
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="row gy-1">
                <div class="col-12">
                    <img src="{{ asset('img/cover.png') }}" alt="Обложка" width="400" class="mx-auto d-block">
                </div>
                <div class="col">
                    @if (Route::has('login'))
                        <a href="@auth{{ route('home') }}@else{{ route('login') }}@endauth" class="text-muted text-center"><p>@auth()Главная@else()Войти@endauth</p></a>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
