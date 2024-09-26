<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nicebase</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
        
    </head>
    <body class="font-sans bg-dark height:100vh">
        <div class="text-white">
            <header class="py-3 text-white bg-black bg-opacity-75 text-center fixed-top shadow-lg">
                <h1>Nicebase</h1>
            </header>

            <main>
                <!-- start bg img -->
                <img id="background" class="bg-image shadow-inner" src="{{ asset('../images/page_streetbike.jpg') }}">
                <!-- end bg img -->
                <div class="text-center bg-black bg-opacity-75 centered-card card shadow-lg">
                @if (Route::has('login'))
                    <nav class="card-body d-grid gap-3">
                        @auth
                            <a
                                href="{{ url('/home') }}"
                                class="btn btn-light mx-2 shadow-lg"
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="btn btn-light mx-2 shadow-lg"
                            >
                                {{ __('Login') }}
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="btn btn-light mx-2 shadow-lg"
                                >
                                    {{ __('Register') }}
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
                </div>
                @yield('content')
            </main>

            <footer class="py-3 text-white bg-black bg-opacity-75 text-center fixed-bottom shadow-lg">
                <a>&copy; 2024 Nicebase. All rights reserved.</a>
            </footer>
        </div>
    </body>
</html>
