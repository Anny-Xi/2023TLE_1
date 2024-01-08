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
    @if(session('message'))
        <div class="alert alert-{{ session('status') }} alert-dismissible fade show mt-3" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="live">
        <p id="placeholder">here comes live</p>
        <img id="movableImage" src="{{asset(('img/museumone.jpg'))}}" alt="Movable Image">
    </div>

    <div class="quiz" id="quiz">
        <img id="quizImage" src="{{asset(('img/star.png'))}}" alt="quiz start star">
    </div>

    <!-- popup quiz -->


    <div id="myModal" class="modal">
        <!-- The Close Button -->
        <span class="closeQuiz">&times;</span>

        <div class="quizContent" id="quizContent">
            <form id="quizQuestions">
                <h2>Wat is het grootste dier dat op aarde voorkomt en kan lengtes behalen van 33 meter?</h2>
                <label for="var_string"><input type="radio" name="variable" value="100" id="var_string"/>Blauwe
                    Vinvis</label>
                <label for="var_join"><input type="radio" name="variable" value="0" id="var_join"/>Olifant</label>
                <label for="var_info"><input type="radio" name="variable" value="0" id="var_info"/>Giraffe</label>
                <label for="var_condition"><input type="radio" name="variable" value="0"
                                                  id="var_condition"/>T-rex</label>
                <button type="submit" value="Submit">Submit</button>
            </form>
        </div>
    </div>


    <img id="viewerImage" class="listeners-group" src="{{asset('img/employee-listening.jpeg')}}" alt="bezoekers">

    <!-- The modal -->
    <div id="pop-up" class="popup">
        <!-- close button -->
        <span class="close">&times;</span>
        <!-- popup image -->
        <img class="popupImage" id="img-viewers">
        <!-- popup text -->
        <div id="caption"></div>
    </div>


    <img class="microphone" src="{{asset('img/microphone-on.png')}}" alt="microphone">

{{--    @if(\Illuminate\Support\Facades\Auth::check()&&\Illuminate\Support\Facades\Auth::user()->is_admin)--}}
        <div class="cards @if(!\Illuminate\Support\Facades\Auth::user()->is_damin) hidden @endif">
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

        <div class="arrows @if(!\Illuminate\Support\Facades\Auth::user()->is_damin) hidden @endif">
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

{{--    @endif--}}


        <a id="back-home" href="{{ route('home')}}">
            Terug naar Home
        </a>

</main>


</body>
</html>
