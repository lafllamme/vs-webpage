<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verschlüsseltes System</title>

    <!-- Fonts -->

    <!-- Styles -->
    <style>
        html,
        body {
            height: 100%;
            overflow: hidden;
            background: url('https://i.imgur.com/F0ESAIH.gif');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .sub_div_one {
            position: fixed;
            left: -35%;
            bottom: 10%;
            width: 100%;

        }

        .sub_div_two {
            position: fixed;
            left: 0%;
            bottom: 10%;
            width: 100%;
        }

        .sub_div_three {
            position: fixed;
            left: 35%;
            bottom: 10%;
            width: 100%;
        }
    </style>
</head>

<body>

    <div id="app">
        <center>
            <book></book>
            <br>
            <br>
            <br>
            <br>

            <custom-menu></custom-menu>
        </center>
        <custom-button class="sub_div_one" title="Events" onclick="alert('soon!')" href="#"></custom-button>
        <custom-button class="sub_div_three" title="Back" href="{{url('/')}}"></custom-button>

    </div>

</body>

</html>
<script src=" {{ mix('/js/app.js') }}"></script>