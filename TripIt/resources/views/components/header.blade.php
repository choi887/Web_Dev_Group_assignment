<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>{{ $titleName }}</title>
    <style>
           .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        .bg-color {
            background-color: rgba(246, 246, 241, 1);
        }

        .main-color {
            color: #05adff;
        }

        .button-bg-color {
            background-color: rgba(30, 79, 255, 1);
        }

        .button-bg-color-2 {
            background-color: rgba(243, 236, 220, 1);
        }

        .button-text-color {
            color: rgba(30, 79, 255, 1);
        }

        .nav-link {
            position: relative;
            text-decoration: none;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #05adff;
            transform: scaleX(0);
            transition: transform 0.3s ease-in-out;
        }

        .nav-link:hover::after {
            transform: scaleX(1);
        }
    </style>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body class="font-poppins">
    <header class="header-bg py-4 min-h-20">
        <div class="container mx-auto flex items-center justify-between px-4 pt-2">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('images/download.png') }}" style="height:50px;" alt="">
            </a>

            <nav class="hidden pl-10 md:flex space-x-6 main-color justify-center">
                <a href="#" class="nav-link">All categories</a>
                <a href="#" class="nav-link">Events</a>
                <a href="#" class="nav-link">Packages</a>
                <a href="#" class="nav-link">FAQs</a>
            </nav>
            <div class="flex space-x-4 items-center text-white">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="nav-link main-color">Sign in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link main-color">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </header>
    {{ $slot }}
</body>

</html>
