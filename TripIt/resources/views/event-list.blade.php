<x-header>
    <x-slot:titleName>
        Event - TripIt
    </x-slot:titleName>
    <section class="bg-white ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl">
            <a href="#"
                class="flex flex-col items-center bg-white rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
                <div class="relative w-2/5 m-0 overflow-hidden rounded-r-none rounded-xl shrink-0">
                    <img src="{{ asset('images/owl.jpg') }}" class="object-cover w-full h-auto" />
                </div>

                <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-2">
                        <p class="text-sm text-gray-600 flex items-center">
                            <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                            </svg>
                            Members only
                        </p>
                        <div class="text-gray-900 font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                        <p class="font-normal text-gray-600 ">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit.
                            Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="{{ asset('images/owl.jpg') }}"
                            alt="Avatar of Jonathan Reinink">
                        <div class="text-sm">
                            <p class="text-gray-900 leading-none">Jonathan Reinink</p>
                            <p class="text-gray-600">Aug 18</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div
            class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold button-text-color">Event List A
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

        <hr class="h-px max-w-screen-xl mb-8 bg-gray-200 border-0 dark:bg-gray-700">
    </section>

    <x-footer>

    </x-footer>
</x-header>
