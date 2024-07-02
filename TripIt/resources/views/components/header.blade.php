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

        .header-bg {
            background-color: rgba(48, 84, 178, 1);
        }

        .bg-color {
            background-color: rgba(246, 246, 241, 1);
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
    </style>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body class="font-poppins">
    <header class="header-bg py-4 min-h-20">
        <div class="container mx-auto flex items-center justify-between px-4 pt-2">
            <a href="{{ route('welcome') }}" class="text-white text-2xl font-bold">
                TripIt
            </a>

            <nav class="hidden pl-10 md:flex space-x-6 text-white justify-center">
                <a href="#" class="nav-link">All categories</a>
                <a href="#" class="nav-link">Events</a>
                <a href="#" class="nav-link">Packages</a>
                <a href="#" class="nav-link">FAQs</a>
            </nav>
            <div class="flex space-x-4 items-center text-white">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link">Sign in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </header>
    {{ $slot }}
</body>

</html>
