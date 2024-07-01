<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.partials.head')
</head>

<body>
    <div>
        <!-- wrap @s -->
        <div class="nk-wrap">
            @include('client.partials.header')
            <!-- content @s -->
            <div class="main" id="main">
                @yield('content')
            </div>
            <!-- content @e -->
            @include('client.partials.footer')
        </div>
        <!-- wrap @e -->
    </div>

    @include('client.partials.modals')
    @yield('modals')
    <!-- JavaScript -->
    @include('client.partials.scripts')
    @yield('scripts')
</body>

</html>
