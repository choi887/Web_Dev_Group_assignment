<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $titleName }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <script>
        var successMessage = document.getElementById('sucessMessage');
        var errorMessage = document.getElementById('errorMessage');
        if (successMessage) {
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000);
        }
        if (errorMessage) {
            setTimeout(function() {
                document.getElementById('errorMessage').style.display = 'none';
            }, 5000);
        }
    </script>
    <script>
        var loadFile = function(event) {
            var input = event.target;
            var file = input.files[0]; // always the first file
            var output = document.getElementById('previewImage');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // to free memory
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <x-search-bar-script>
        <x-slot:item>
            category
        </x-slot:item>
        <x-slot:route>{{ route('category.search') }}</x-slot:route>
    </x-search-bar-script>
    <x-search-bar-transportation-script>
        <x-slot:item>
            transportation
        </x-slot:item>
        <x-slot:route>{{ route('transportation.search') }}</x-slot:route>
    </x-search-bar-transportation-script>
    <x-search-bar-script>
        <x-slot:item>
            lodging
        </x-slot:item>
        <x-slot:route>{{ route('lodgings.search') }}</x-slot:route>
    </x-search-bar-script>
    <script>
        function validateDecimal(input) {
            const value = input.value;
            const regex = /^\d+(\.\d{0,2})?$/;

            if (!regex.test(value)) {
                input.value = value.slice(0, -1);
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>
