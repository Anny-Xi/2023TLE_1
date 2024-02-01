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
    <div class="list-button right @if(!Auth::user()->is_admin) hidden @endif">
        <a id="link" href="{{ route('create') }}">
            Plan nieuw tour
        </a>
    </div>
    <div id="home">
        <h1>Tours</h1>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Start om</th>
                <th>Eindigt om</th>
                <th>Tour locatie</th>
                <th>Bezoeker locatie</th>
            </tr>
            </thead>
            <tbody>


            @foreach ($tours as $tour)
                <tr>
                    <td>{{ $tour->start_time }}</td>
                    <td>{{ $tour->end_time }}</td>
                    <td>{{ $tour->location_museum }}</td>
                    <td>{{ $tour->location_client }}</td>
                    <td>
                        <a href='{{ route('waiting', $tour->id)}}'
                           class="btn btn-info">Join the tour</a>
                    </td>

                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
</main>


</body>
</html>
