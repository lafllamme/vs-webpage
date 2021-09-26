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

        .compact-form {
            width: 20%;
        }
    </style>
</head>

<body>
    <div id="background">
        <img src="https://i.pinimg.com/originals/b5/f6/0e/b5f60e19a5057b402648bf109c8aa34b.gif" class="stretch" alt="" />
    </div>

    <div id="app" class="contact-form">
        <event-book onclick="gotoWebsite('{{ url('/') }}')"></event-book>
    </div>
</body>

</html>
<script>
    gotoWebsite = (string) => {
        window.location = string;
    }
</script>
<script src=" {{ mix('/js/app.js') }}"></script>