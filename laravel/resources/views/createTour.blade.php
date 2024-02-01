<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>

<main>
    <div class="list-button left">
        <a id="link" href="{{ route('logout') }}"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            Log uit
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <div id="header-logo">
        <img id="login-logo-image" src="{{asset(('img/vindiqu_logo.png'))}}" alt="logo">

    </div>
    <div class="list-button right">
        <a id="link" href="{{ route('home') }}">
            Terug naar Home
        </a>
    </div>
    <div id="home">
        <h1>Plan een nieuw tour</h1>

        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
            @csrf


            <div class="row mb-3">
                <label for="nameMuseum"
                       class="col-md-4 col-form-label text-md-end">{{ __('Naam museum') }}</label>

                <div class="col-md-6">
                    <input id="nameMuseum" type="text"
                           class="form-control @error('nameMuseum') is-invalid @enderror" name="nameMuseum"
                           value="{{ old('nameMuseum') }}">

                    @error('nameMuseum')

                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="nameLocation"
                       class="col-md-4 col-form-label text-md-end">{{ __('Naam Location') }}</label>

                <div class="col-md-6">
                    <input id="nameLocation" type="text"
                           class="form-control @error('nameLocation') is-invalid @enderror" name="nameLocation"
                           value="{{ old('nameLocation') }}">

                    @error('nameLocation')

                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="startTime"
                       class="col-md-4 col-form-label text-md-end">{{ __('Datum tijd van de tour') }}</label>

                <div class="col-md-6">
                    <input id="startTime" type="datetime-local"
                           class="form-control @error('startTime') is-invalid @enderror"
                           name="startTime" value="{{ old('startTime') }}">

                    @error('startTime')

                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="endTime"
                       class="col-md-4 col-form-label text-md-end">{{ __('Eind tijd') }}</label>

                <div class="col-md-6">
                    <input id="endTime" type="datetime-local"
                           class="form-control @error('endTime') is-invalid @enderror"
                           name="endTime" value="{{ old('endTime') }}">

                    @error('endTime')

                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Plan jouw tour') }}
                    </button>
                </div>
            </div>
        </form>

    </div>
</main>


</body>
</html>
