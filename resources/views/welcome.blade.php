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

<body id="body">
    <!--    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
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
        @endif -->


    <div id="app">
        <welcome onclick="gotoWebsite('{{ url('/home/') }}')"></welcome>
        <eye onclick="gotoWebsite('{{ url('/home/') }}')"></eye>
    </div>


</body>

</html>
<script>
    gotoWebsite = (string) => {
        window.location = string;
    }
    setInterval(redirect = () => {
        // const app = document.getElementById('body');
        // console.log(app);
        // app.addEventListener('scroll', (event) => {
        //     console.log('it works');
        // })
        window.location.replace("/home");

    }, 8000)
</script>
<script src=" {{ mix('/js/app.js') }}">
</script>