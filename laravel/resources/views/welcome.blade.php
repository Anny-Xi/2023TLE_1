<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">

    </head>
    <body>

    <main>
        <div id="header-logo">
            <img id="login-logo-image" src="{{asset(('img/vindiqu_logo.png'))}}" alt="logo">
        </div>
        <div id="home">
            @if (Route::has('login'))
                <div class="links">
                    @auth
                        <a href="{{ url('/home') }}" class="link-button">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="link-button">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="link-button">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <h1>Welkom bij Vindiqu IP Live</h1>
    </main>


    </body>
</html>
