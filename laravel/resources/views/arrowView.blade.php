<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>Live</title>


</head>
<body>

<main>
    <div class="live">
        <p id="placeholder">here comes live</p>
        <img id="movableImage" src="{{asset(('img/museumone.jpg'))}}" alt="Movable Image">
    </div>
    <img class="listeners-group" src="{{asset('img/employee-listening.jpeg')}}" alt="listeners">
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

<script>
    // Get the movable image element
    const movableImage = document.getElementById('movableImage');
    console.log(movableImage.naturalWidth + ' px ' + movableImage.naturalHeight + ' px');

    let imageValueX = 0 - movableImage.naturalWidth + movableImage.clientWidth;
    let imageValueY = 0 - movableImage.naturalHeight + movableImage.clientHeight;

    // Set the initial position
    let positionX = 0;
    let positionY = 0;

    // Set the amount of pixels to move on each arrow key press
    const moveAmount = 10;

    // Function to update the position of the image
    const updatePosition = () => {
        movableImage.style.objectPosition = `${positionX}px ${positionY}px`;
    };

    // Event listener for arrow key presses
    document.addEventListener('keydown', (event) => {
        switch (event.key) {
            case 'ArrowUp':
                positionY += moveAmount;
                console.log(positionY);
                break;
            case 'ArrowDown':
                positionY -= moveAmount;
                console.log(positionY);
                break;
            case 'ArrowLeft':
                positionX += moveAmount;
                console.log(positionX);
                break;
            case 'ArrowRight':
                positionX -= moveAmount;
                console.log(positionX);
                break;
        }

        // Update the position of the image


        if (positionX <= imageValueX){
            positionX = imageValueX;
        }else if(positionX>0){
            positionX = 0;
        }
        if (positionY <= imageValueY){
            positionY = imageValueY;
        }else if (positionY>0){
            positionY = 0;
        }

        updatePosition();
    });
</script>

</body>
</html>
