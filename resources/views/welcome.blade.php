<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
</head>
<body class="">
    <div class="content">

        <div class="title">
            <h1>Trivia Guatemala</h1>
        </div>

        @if (Route::has('login'))
            <div class="links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('register') }}" class="linkregister">Jugar ahora</a>
                @endif
            </div>
        @endif

    </div>
</body>
</html>
