<x-header>
    <x-slot:titleName>
        Event - TripIt
    </x-slot:titleName>
    <section class="bg-white ">
        <nav aria-label="Breadcrumb">
            <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <li>
                    <div class="flex items-center">
                        <a href="{{ route('welcome') }}" class="mr-2 text-sm font-medium text-gray-900">Home</a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true"
                            class="h-5 w-4 text-gray-300">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <a href="{{ route('event-list') }}" class="mr-2 text-sm font-medium text-gray-900">Events</a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true"
                            class="h-5 w-4 text-gray-300">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <a href="#"
                            class="mr-2 text-sm font-medium text-gray-900">{{ $event->category->name }}</a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true"
                            class="h-5 w-4 text-gray-300">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                    </div>
                </li>

                <li class="text-sm">
                    <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">
                        {{ $event->name }}
                    </a>
                </li>
            </ol>
        </nav>

        <div class="py-8 px-4 mx-auto max-w-screen-xl w-full">
            <div href="#" class="my-4 flex flex-col bg-white rounded-lg shadow md:flex-row w-full">
                <div class="flex flex-col justify-between leading-normal p-4 w-full md:w-3/5">
                    <div class="mb-2">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold button-text-color flex">
                            <div class="flex flex-1 items-center button-text-color">
                                {{ $event->name }}
                                <span
                                    class="ml-4 bg-blue-100 text-blue-800 text-sm font-large me-2 px-2.5 py-0.5 rounded">
                                    {{ $event->category->name }}</span>
                            </div>
                            <div class="flex-none self-end text-2xl">
                                ${{ $event->price }}
                            </div>
                        </h2>
                    </div>
                    <p class="font-bold text-2xl text-blue-600">
                        Date: {{ $event->start_date }} to {{ $event->end_date }}
                    </p>
                    <p class="mb-6 font-light text-lg main-color">
                        {{ $event->description }}
                    </p>
                    <div class="flex flex-row mb-5">
                        <x-conditional-icon :condition="$event->food" text="Food"></x-conditional-icon>
                        <x-conditional-icon :condition="$event->transportation" text="Transportation"></x-conditional-icon>
                        <x-conditional-icon :condition="$event->lodging" text="Lodging"></x-conditional-icon>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img class="w-10 h-10 rounded-full mr-4" src="{{ asset('images/owl.jpg') }}"
                                alt="Avatar of Jonathan Reinink">
                            <div class="text-sm">
                                <p class="text-gray-900 leading-none">{{ $event->created_by }}</p>
                                <p class="text-gray-600">{{ $event->phone_number }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative w-full md:w-2/5 m-0 overflow-hidden rounded-r-lg">
                    <img src="{{ asset('storage/' . $event->cover_image_path) }}"
                        class="object-cover w-full h-64 md:h-full" alt="Owl image" />
                </div>
            </div>

            <h2 class="mx-auto mt-20 mb-4 text-3xl tracking-tight font-extrabold button-text-color max-w-screen-xl">
                Gallery
            </h2>

            <!-- Image gallery -->
            <div class="mx-auto mt-6 max-w-7xl px-8 flex justify-between">
                @foreach ($event->gallery as $image)
                    <div class="w-100 h-64 sm:overflow-hidden sm:rounded-lg">
                        <img src="{{ asset('storage/' . $image->image_path) }}"
                            alt="Model wearing plain white basic tee." class="h-full w-full object-cover object-center">
                    </div>
                @endforeach
            </div>

            <h2 class="mx-auto mt-20 mb-4 text-3xl tracking-tight font-extrabold button-text-color max-w-screen-xl">
                Similar Events
            </h2>

            <!-- Image gallery -->
            @foreach ($similarEvents as $similarEvent)
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <a
                        href="{{ route('event-specific', ['category' => $similarEvent->name, 'event_id' => $similarEvent->id]) }}">
                        <img class="rounded-t-lg" src="{{ asset('storage/' . $similarEvent->cover_image_path) }}"
                            alt="" />
                    </a>
                    <div class="p-5">
                        <a
                            href="{{ route('event-specific', ['category' => $similarEvent->name, 'event_id' => $similarEvent->id]) }}">
                            <h5 class="flex flex-1 text-2xl font-bold items-center button-text-color">
                                {{ $similarEvent->name }}
                                <span
                                    class="ml-4 bg-blue-100 text-blue-800 text-sm font-large me-2 px-2.5 py-0.5 rounded">
                                    {{ $similarEvent->category->name }}</span>
                            </h5>

                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $similarEvent->description }}
                        </p>
                        <a href="{{ route('event-specific', ['category' => $similarEvent->name, 'event_id' => $similarEvent->id]) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <x-footer>

    </x-footer>
</x-header>
