<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trivia Guatemala</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('../css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="">
        <div class="welcome">
            <div class="welcome-1">
                <h1>Trivia Guatemala</h1>
            </div>

            @if (Route::has('login'))
                <div class="welcome-2">
                    @auth
                        <a href="{{ url('/home') }}" class="">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="">Inicio Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="">Registrarme</a>
                        @endif
                    @endif
                </div>
            @endif
        </div>
    </body>
</html>
