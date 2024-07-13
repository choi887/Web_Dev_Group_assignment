<x-header>
    <x-slot:titleName>
        Event - TripIt
    </x-slot:titleName>
    <section class="bg-white ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl w-full">
            <x-filter>
                @foreach ($events as $event)
                    <a href="#"
                        class="my-4 flex flex-col items-center bg-white rounded-lg shadow md:flex-row w-full hover:bg-gray-100">
                        <div
                            class="relative w-full md:w-2/5 m-0 overflow-hidden rounded-t-lg md:rounded-l-lg md:rounded-tr-none">
                            <img src="{{ asset('storage/' . $event->cover_image_path) }}"
                                class="object-cover w-full h-64 md:h-full" alt="Owl image" />
                        </div>

                        <div class="flex flex-col justify-between leading-normal p-4 w-full md:w-3/5">
                            <div class="mb-2">
                                <p class="text-sm text-gray-600 flex items-center">
                                    <svg class="fill-current text-gray-500 w-3 h-3 mr-2"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path
                                            d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                    </svg>
                                    Members only
                                </p>
                                <div class="text-gray-900 font-bold text-xl mb-2">
                                    {{ $event->name }}
                                </div>
                                <p class="font-normal text-gray-600">
                                    {{ $event->description }}
                                </p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-10 h-10 rounded-full mr-4" src="{{ asset('images/owl.jpg') }}"
                                    alt="Avatar of Jonathan Reinink">
                                <div class="text-sm">
                                    <p class="text-gray-900 leading-none">{{ $event->created_by }}</p>
                                    <p class="text-gray-600">{{ $event->phone_number }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </x-filter>
        </div>
    </section>

    <x-footer>

    </x-footer>
</x-header>
