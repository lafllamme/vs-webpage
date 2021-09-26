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
    </style>
</head>

<body>

    <div id="app">
        <sound-cloud></sound-cloud>
    </div>
</body>

</html>

<script src=" {{ mix('/js/app.js') }}">
</script>