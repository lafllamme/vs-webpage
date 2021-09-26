<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verschlüsseltes System</title>

    <!-- Fonts -->

    <!-- Styles -->
    <style>
        body {
            background-color: black;
        }

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

        .img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <div id="background">
        <img src="https://i.pinimg.com/originals/b5/f6/0e/b5f60e19a5057b402648bf109c8aa34b.gif" class="stretch" alt="" />
    </div>

    <div id="app">
        <event-book></event-book>
    </div>
</body>

</html>
<script src=" {{ mix('/js/app.js') }}"></script>