<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>{{ $titleName }}</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body class="font-poppins">
    <header class="header-bg py-4 min-h-20">
        <div class="container mx-auto flex items-center justify-between px-4 ">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('images/download.png') }}" style="height:50px;" alt="">
            </a>

            <nav class="hidden pl-10 md:flex space-x-6 main-color justify-center mt-2">
                <a href="#" class="nav-link">All categories</a>
                <a href="#" class="nav-link">Events</a>
                <a href="#" class="nav-link">Packages</a>
                <a href="#" class="nav-link">FAQs</a>
            </nav>
            <div class="flex space-x-4 items-center text-white">
                @if (Route::has('login'))
                    @auth
                        <div class="hidden mt-2 sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md main-color bg-header hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    @if (Auth::user()->role_id !== 1)
                                        <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                            {{ __('Dashboard') }}
                                        </x-dropdown-link>
                                    @else
                                        <x-dropdown-link :href="route('order')" :active="request()->routeIs('order')">
                                            {{ __('My Orders') }}
                                        </x-dropdown-link>
                                    @endif
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>
