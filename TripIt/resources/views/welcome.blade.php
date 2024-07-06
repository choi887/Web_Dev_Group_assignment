<x-header>
    <x-slot:titleName>
        Welcome page - TripIt
    </x-slot:titleName>
    <section class="bg-white ">
        <div
            class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold button-text-color">Why choose TripIt ?
                </h2>
                <p class="mb-6 font-light text-lg main-color">TripIt helps you to connect
                    with
                    communities of people who share your interests when you join an event or package hosted by us
                    without any hassle.</p>
                <div class="mt-10 space-x-4">
                    <a href="#"
                        class=" button-bg-color text-white px-4 py-3 rounded-2xl transition hover:bg-blue-700">See
                        Packages</a>
                    <a href="#"
                        class="button-bg-color-2 button-text-color px-4 py-3 rounded-2xl transition hover:bg-gray-300">See
                        Events</a>
                </div>
            </div>

            <img class="w-full hidden dark:block" src="{{ asset('images/travel.jpg') }}" alt="dashboard image">
        </div>
    </section>

    <x-footer>

    </x-footer>
</x-header>
