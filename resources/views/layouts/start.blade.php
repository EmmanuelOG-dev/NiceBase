<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nicebase</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
        
    </head>
    <body class="font-sans bg-black height:100vh ">
        <div id="welcome" class="text-white">
            <!-- bg img -->
            <img id="background" class="bg-image shadow-inner" src="{{ asset('../images/page_streetbike.jpg') }}">
            <header class="py-3 text-white bg-black bg-opacity-75 text-center fixed-top shadow-lg">
                <h1>Nicebase</h1>
            </header>

            <main>
                @yield('content')
            </main>

            <footer class="py-3 text-white bg-black bg-opacity-75 text-center fixed-bottom shadow-lg">
                <a>&copy; 2024 Nicebase. All rights reserved.</a>
            </footer>
        </div>
    </body>
</html>
