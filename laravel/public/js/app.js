window.addEventListener('load', init);

function init(){

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


        if (positionX <= imageValueX) {
            positionX = imageValueX;
        } else if (positionX > 0) {
            positionX = 0;
        }
        if (positionY <= imageValueY) {
            positionY = imageValueY;
        } else if (positionY > 0) {
            positionY = 0;
        }

        updatePosition();
    });

}


