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

    <img id="viewerImage" class="listeners-group" src="{{asset('img/employee-listening.jpeg')}}" alt="listeners">

    <!-- The modal -->
    <div id="pop-up" class="popup">
        <!-- close button -->
        <span class="close">&times;</span>
        <!-- popup image -->
        <img class="popupImage" id="img-viewers" >
        <!-- popup text -->
        <div id="caption"></div>
    </div>

    <img class="microphone" src="{{asset('img/microphone-on.png')}}" alt="microphone">


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
