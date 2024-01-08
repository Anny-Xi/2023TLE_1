<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>Wait please</title>

    <script>
        window.addEventListener('load', timer);

        function timer() {
            let tourDateTime = @json($tourDateTime);

            // Set the date we're counting down to
            const countDownDate = new Date(tourDateTime).getTime();

            // Update the count down every 1 second
            const x = setInterval(function () {

                const time = document.getElementById("time");
                const live = document.getElementById("join-live");

                // Get today's date and time
                const now = new Date().getTime();

                // Find the distance between now and the count down date
                const distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="demo"
                time.innerHTML = "Nog " + days + "d " + hours + "h "
                    + minutes + "m " + seconds + "s ";

                // If the count down is over, write some text
                if (distance < 0) {
                    clearInterval(x);
                    time.innerHTML = "Live is al begonnen";
                }
                if (distance < -7200) {
                    clearInterval(x);
                    time.innerHTML = "Live is al afgelopen";
                    live.innerHTML = "Ga terug naar tour lijst"
                    live.href = '{{ route('home')}}'
                }
            }, 1000);
        }


        // test popup
        document.addEventListener("DOMContentLoaded", function() {
            let testModal = document.getElementById("myModal");
            let testButton = document.getElementById("test-environment");
            let testSpan = document.querySelector(".testClose");

            testButton.onclick = function () {
                testModal.style.display = "block";
                console.log('click');
            }

            testSpan.onclick = function () {
                testModal.style.display = "none";
            }
        });


    </script>


</head>
<body>

<main>
    <div class="live" id="live-waiting">
        <div id="live-information">
            <h1>Welkom bij het tour van {{$tour->location_museum}}</h1>
            <h1>Live begint op {{$tour->start_time}}</h1>
            <h2 id="time"></h2>
        </div>

    </div>

    <div class="buttons-wait">

        <div class="button-wait" id="test-environment">
            <p>Test hier uw live omgeving</p>
        </div>

        <a class="button-wait" id="join-live" href='{{ route('liveView', $tour->id)}}'>
            <p>Ga naar het live ruimte</p>
        </a>
    </div>

    {{--                        the modal--}}
    <div id="myModal" class="testModal">
        {{--                    the modal content--}}
        <div class="testModal-content" >
            <span class="testClose">&times;</span>
            <h1 class="testPopup-title">Test Hier Uw Live Omgeving</h1>
            <h3 class="testPopup-cameraText"> Test hier uw camera</h3>
            <h3 class="testPopup-soundText"> Test hier uw geluid</h3>
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
        </div>
    </div>

    <a id="back-home" href="{{ route('home')}}">
        Terug naar Home
    </a>

</main>
</body>
</html>
