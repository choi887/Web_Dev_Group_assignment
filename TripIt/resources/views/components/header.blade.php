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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <title>{{ $titleName }}</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}">
    <link rel="icon" href="{{ asset('images/download.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body class="font-poppins">
    <header class="py-4 min-h-20 border border-grey-100 sticky top-0 z-50 bg-white shadow-md">
        <div class="container mx-auto flex items-center justify-between px-4 ">
            <div class="flex items-center ms-32">
                <a href="{{ route('welcome') }}">
                    <img src="{{ asset('images/download.png') }}" style="height:50px;" alt="">
                </a>

                <nav class="hidden pl-10 md:flex space-x-6 main-color justify-center mt-2">
                    <a href="{{ route('event-list') }}" class="nav-link">Events</a>
                    <a href="{{ route('package-list') }}" class="nav-link">Packages</a>
                    <a href="{{ route('faq') }}" class="nav-link">FAQs</a>
                </nav>
            </div>
            <div class="flex space-x-4 items-center text-white me-32">
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
                                        <x-dropdown-link :href="route('order-list')" :active="request()->routeIs('order-list')">
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
