<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Verschlüsseltes System</title>

    <!-- Fonts -->

    <!-- Styles -->
    <style>
        #background {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0px;
            top: 0px;
            z-index: 0;
        }

        .stretch {
            width: 100%;
            height: 100%;
        }

        html,
        body {
            margin: 0;
            height: 100%;
            overflow: hidden;
            background-color: black;
        }

        .container {
            width: 100%;
            height: 40%;
        }
    </style>
</head>

<body>
    <div id="background">
        <img src="https://i.pinimg.com/originals/b5/f6/0e/b5f60e19a5057b402648bf109c8aa34b.gif" class="stretch" alt="" />
    </div>

    <div id="app" class="container">
        <event-book onclick="gotoWebsite('{{ url('/') }}')"></event-book>
    </div>
</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', toggleZoomScreen = () => {
        document.body.style.zoom = "70%";
    }, false);

    gotoWebsite = (string) => {
        window.location = string;
    }

    new Audio(
        "https://talkglitz.media/wp-content/uploads/2018/08/Travis_Scott_-_Stop_Trying_To_Be_God_talkglitz.tv.mp3"
    ).play();
</script>
<script src=" {{ mix('/js/app.js') }}"></script>