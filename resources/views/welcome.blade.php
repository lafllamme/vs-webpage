<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* 
** Change this if you need to modify
** the amount of lines displayed
*/
        /*
** Leave these unless you want
** to open a whole can of worms
*/
        /*
** Set up the experiment
*/
        html {
            background-color: black;
            height: 100%;
        }

        body {
            color: #FFFFFF;
            display: flex;
        }

        /*
** Apply styles to the parent element
*/
        .Words {
            margin: 0 auto;
            padding: 80px 0;
            font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
            font-size: 68px;
            font-weight: 900;
            letter-spacing: -2px;
            text-transform: uppercase;
            transform: translate3d(0, 0, 0);
            -webkit-font-smoothing: antialiased;
            -webkit-font-kerning: normal;
            -webkit-text-size-adjust: 100%;
        }

        /*
** Apply common styles to each line of text
*/
        .Words-line {
            height: 50px;
            overflow: hidden;
            position: relative;
        }

        .Words-line:nth-child(odd) {
            transform: skew(60deg, -30deg) scaleY(0.66667);
        }

        .Words-line:nth-child(even) {
            transform: skew(0deg, -30deg) scaleY(1.33333);
        }

        .Words-line:nth-child(1) {
            left: 29px;
        }

        .Words-line:nth-child(2) {
            left: 58px;
        }

        .Words-line:nth-child(3) {
            left: 87px;
        }

        .Words-line:nth-child(4) {
            left: 116px;
        }

        .Words-line:nth-child(5) {
            left: 145px;
        }

        .Words-line:nth-child(6) {
            left: 174px;
        }

        .Words-line:nth-child(7) {
            left: 203px;
        }

        /*
** Fine-grained text styles
*/
        p {
            height: 50px;
            line-height: 45px;
            padding: 0 10px;
            transition: all 0.4s ease-in-out;
            transform: translate3d(0, 0, 0);
            vertical-align: top;
            white-space: nowrap;
        }

        /*
** The hover interaction
*/
        .Words:hover p {
            transform: translate3d(0, -50px, 0);
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <ul class="Words">
            <li class="Words-line">
                <p>&nbsp;</p>
                <p>Keep the Spirit</p>
            </li>
            <li class="Words-line">
                <p>Keep the Spirit</p>
                <p>Keep the Vibes</p>
            </li>
            <li class="Words-line">
                <p>Keep the Vibes
                <p>
                <p>The Community</p>
            </li>
            <li class="Words-line">
                <p>The Community</p>
                <p>by</p>
            </li>
            <li class="Words-line">
                <p>by</p>
                <p>Verschluesseltes</p>
            </li>
            <li class="Words-line">
                <p>Verschluesseltes</p>
                <p>System</p>
            </li>
            <li class="Words-line">
                <p>System</p>
                <p>&nbsp;</p>
            </li>
        </ul>
        <div id="app">
            <example-component></example-component>
        </div>

    </div>
    </div>
    </div>
</body>

</html>
<script src="{{ mix('/js/app.js') }}"></script>