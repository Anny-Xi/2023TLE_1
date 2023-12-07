<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>Wait please</title>


</head>
<body>

<main>
    <div class="live">
        <div id="live-information">
            <h1>Welkom bij het tour van *Locatie*</h1>
            <h2>over 00:10:00 begint het live</h2>
        </div>

    </div>
    <img class="listeners-group" src="{{asset('img/employee-listening.jpeg')}}" alt="listeners">
    <img class="microphone" src="{{asset('img/microphone-on.png')}}" alt="microphone">
    <div class="cards" id="viewer-cards">
        <div class="card" id="test-environment">
            <p>Test hier uw live omgeving</p>
        </div>
    </div>

</main>


</body>
</html>
