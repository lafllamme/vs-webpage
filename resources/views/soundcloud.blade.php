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

        .sub_div_one {
            position: fixed;
            left: 35%;
            bottom: 10%;
            width: 100%;
        }
    </style>
</head>

<body>

    <div id="app">
        <sound-cloud></sound-cloud>
        <custom-button class="sub_div_one" title="Back" href="{{url('/home')}}"></custom-button>

    </div>
</body>

</html>

<script src=" {{ mix('/js/app.js') }}">
</script>