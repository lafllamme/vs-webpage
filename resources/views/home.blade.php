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
        }

        body {
            perspective: 700px;
            margin: 0;
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

        .sub_div {
            position: fixed;
            left: 700px;
            bottom: 180px;
        }

        .sub_div2 {
            position: fixed;
            left: 300px;
            bottom: 180px;
        }

        .sub_div3 {
            position: fixed;
            left: 1200px;
            bottom: 180px;
        }
    </style>
</head>

<body>
    <div id="background">
        <img src="https://i.imgur.com/F0ESAIH.gif" class="stretch" alt="" />
    </div>
    <div id="app">
        <book></book>

        <custom-button class="sub_div" title="Tickets" href="{{url('/')}}"></custom-button>
        <custom-button class="sub_div2" title="Events" href="{{url('/')}}"></custom-button>
        <custom-button class="sub_div3" title="Back" href="{{url('/')}}"></custom-button>


    </div>

</body>

</html>
<script src=" {{ mix('/js/app.js') }}"></script>