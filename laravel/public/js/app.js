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

    // image move with arrows on screen

    let arrowUp = document.getElementById('up');
    let arrowLeft = document.getElementById('left');
    let arrowRight = document.getElementById('right');
    let arrowDown = document.getElementById('down');


    // add eventlistener for arrows on screen
    arrowUp.addEventListener('click',() => {
        positionY += moveAmount;

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
    })

    arrowDown.addEventListener('click', () => {
        positionY -= moveAmount;

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
    })

    arrowLeft.addEventListener('click', () => {
        positionX += moveAmount;

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

    arrowRight.addEventListener('click', () => {
        positionX -= moveAmount;

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

    popupImg.onclick = function (){
        console.log('click');
        popup.style.display = 'block';
        popupViewers.src = this.src;
        captionText.innerHTML = this.alt;
    }
    let span = document.getElementsByClassName('close')[0];
    span.onclick = function (){
        popup.style.display = 'none';
    }
    //end of popup


    // quiz


    let modal = document.getElementById('myModal');
    let starImg = document.getElementById('quiz');
    let popupContent = document.getElementById('quizContent');
    let quizQuestion = document.getElementById('quizQuestions');

    starImg.onclick = function () {
        modal.style.display = 'block';
        popupContent.innerHTML = quizQuestion.innerHTML;
        console.log("click on image")

    };

    let spanQuiz = document.getElementsByClassName('closeQuiz')[0];
    spanQuiz.onclick = function () {
        modal.style.display = 'none';
    };

    // quizQuestion.onsubmit = function () {
    //     let variable = document.querySelector('input[name="variable"]:checked').value;
    //
    //     if (variable === '100') {
    //         debugger;
    //         popupContent.innerHTML += '<p>Het antwoord is correct!</p>';
    //     } else {
    //         popupContent.innerHTML += '<p>Onjuist!</p>';
    //     }
    //
    //     return false;
    // };
}
