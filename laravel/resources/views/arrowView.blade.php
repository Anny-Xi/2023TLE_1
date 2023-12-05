<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>Document</title>
</head>
<body>
<h1>VindiQu</h1>

    <img class="listeners-group" src="{{asset('img/employee-listening.jpeg')}}" alt="listeners">
    <img class="microphone" src="{{asset('img/microphone-on.png')}}" alt="microphone">

     <div class="card beginpunt">
        <p>Beginpunt</p>
     </div>

    <div class="card middelpunt">
        <p>Middelpunt</p>
    </div>

    <div class="card eindpunt">
        <p>Eindpunt</p>
    </div>

    <div class="arrows">
        <div class="controller">
            <img class="arrow-up" src="{{asset(('img/arrow_up.png'))}}" alt="up arrow">
            <div class="left-right">
                <img class="arrow-left" src="{{asset(('img/arrow_left.png'))}}" alt="left arrow">
                <img class="arrow-right" src="{{asset(('img/arrow_right.png'))}}" alt="right arrow">
            </div>
            <img class="arrow-down" src="{{asset(('img/arrow_down.png'))}}" alt="down arrow">
        </div>
    </div>
</body>
</html>
