<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>Live</title>
    <script src="{{asset('js/app.js')}}" defer></script>
    <script src="{{asset('js/mic_test.js')}}" defer></script>


</head>
<body>

<main>
    <div class="live">
        <p id="placeholder">here comes live</p>
        <img id="movableImage" src="{{asset(('img/museumone.jpg'))}}" alt="Movable Image">
    </div>

    <img class="listeners-group" src="{{asset('img/employee-listening.jpeg')}}" alt="listeners">
    <img class="microphone" src="{{asset('img/microphone-on.png')}}" alt="microphone">

    {{-- slider start--}}
    <div class="sound">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z"
            />
        </svg>

        <div class="sound-icon">
            <input type="range"/>
        </div>
    </div>
    {{-- slider end--}}
    <div class="cards">
        <div class="card" id="start">
            <p>Beginpunt</p>
        </div>

        <div class="card" id="middle">
            <p>Middelpunt</p>
        </div>

        <div class="card" id="end">
            <p>Eindpunt</p>
        </div>
    </div>

    <div class="arrows">
        <div class="arrow" id="up">
            <img class="arrow-image" src="{{asset(('img/arrow_up.png'))}}" alt="up arrow">
        </div>
        <div class="arrow" id="left">
            <img class="arrow-image" src="{{asset(('img/arrow_left.png'))}}" alt="left arrow">
        </div>
        <div class="arrow" id="right">
            <img class="arrow-image" src="{{asset(('img/arrow_right.png'))}}" alt="right arrow">
        </div>
        <div class="arrow" id="down">
            <img class="arrow-image" src="{{asset(('img/arrow_down.png'))}}" alt="down arrow">
        </div>

    </div>

</main>


</body>
</html>
