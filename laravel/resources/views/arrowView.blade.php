<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="javascript" type="javascript" href="{{ asset('/js/app.js') }}">
    <title>Document</title>
    <style>
        #movableImage {
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
</head>
<body>
<img id="movableImage" src="{{asset(('img/museumone.jpg'))}}" alt="Movable Image">
<script>
    // Get the movable image element
    const movableImage = document.getElementById('movableImage');

    // Set the initial position
    let positionX = 0;
    let positionY = 0;

    // Set the amount of pixels to move on each arrow key press
    const moveAmount = 10;

    // Function to update the position of the image
    const updatePosition = () => {
        movableImage.style.left = `${positionX}px`;
        movableImage.style.top = `${positionY}px`;
    };

    // Event listener for arrow key presses
    document.addEventListener('keydown', (event) => {
        switch (event.key) {
            case 'ArrowUp':
                positionY -= moveAmount;
                break;
            case 'ArrowDown':
                positionY += moveAmount;
                break;
            case 'ArrowLeft':
                positionX -= moveAmount;
                break;
            case 'ArrowRight':
                positionX += moveAmount;
                break;
        }

        // Update the position of the image
        updatePosition();
    });
</script>
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
<br>


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
