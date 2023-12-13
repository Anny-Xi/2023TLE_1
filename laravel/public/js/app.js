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

    // popup viewers
    let popup = document.getElementById('pop-up');
    let popupViewers = document.getElementById('img-viewers');
    let popupImg = document.getElementById('viewerImage');
    let captionText = document.getElementById('caption');

    popupViewers.onclick = function (){
        console.log('click');
        popup.style.display = 'block';
        popupImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    let span = document.getElementsByClassName('close')[0];
    span.onclick = function (){
        popup.style.display = 'none';
    }
    //end of popup

}
