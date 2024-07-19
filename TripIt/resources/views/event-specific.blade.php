<x-header>
    <x-slot:titleName>
        Event - TripIt
    </x-slot:titleName>
    <section class="bg-white ">
        <nav aria-label="Breadcrumb">
            <ol role="list"
                class="mx-auto flex max-w-2xl items-center space-x-2 px-4 mt-6 sm:px-6 lg:max-w-7xl lg:px-8">
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
                        <a href="{{ route('event-list') }}" class="mr-2 text-sm font-medium text-gray-900">Back to
                            Events </a>
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

        <div class="pb-8 px-4 mx-auto max-w-screen-xl w-full">
            <div href="#" class="my-4 flex flex-col bg-white rounded-lg  md:flex-row w-full">
                <div class="flex flex-col justify-between leading-normal p-5 w-full  md:w-3/5">
                    <div class="mb-2">
                        <h2 class=" text-3xl tracking-tight font-extrabold button-text-color flex">
                            <div class="flex flex-1 items-center button-text-color">
                                {{ $event->name }}
                                <span
                                    class="ml-4 bg-blue-100 text-blue-800 text-sm font-large me-2 px-2.5 py-0.5 rounded">
                                    {{ $event->category->name }}
                                </span>
                            </div>
                            <div class="flex-none self-end text-xl text-gray-800 mr-12">
                                ${{ $event->price }}
                            </div>
                        </h2>
                    </div>
                    <p class="font-semibold text-md text-blue-600 ">
                        Date: {{ $event->start_date }} to {{ $event->end_date }}
                    </p>
                    <p class="font-semibold text-md text-blue-600 mb-2 leading-relaxed ">
                        Address: {{ $event->address }}
                    </p>

                    <p
                        class=" pt-4 text-md main-color border-t border-grey-300 tracking-wide leading-relaxed line-clamp-3 ">
                        {{ $event->description }}
                    </p>
                    <button data-modal-target="description-modal" data-modal-toggle="description-modal"
                        class="flex justify-start main-color hover:underline font-semibold my-2 w-max">See More
                        <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                    </button>



                    <!-- Modal toggle -->

                    <!-- Main modal -->
                    <div id="description-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow ">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t mt-2 ">
                                    <h3 class="text-xl font-semibold text-gray-900 ">
                                        Description
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        data-modal-hide="description-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 md:p-6 space-y-4">
                                    <p class="text-base leading-relaxed  tracking-wide text-gray-700 ">
                                        {{ $event->description }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

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
                        <div class="flex items-center">
                            @if (Auth::user())
                                <button data-modal-target="join-now-modal" data-modal-toggle="join-now-modal"
                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                                    type="button">
                                    Join Now
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2 animate-bounce" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </button>
                            @else
                                <a href="{{ route('login') }}"
                                    class="animate-bounce-left-right text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                                    Join Now
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            @endif
                        </div>

                        <!-- Main modal -->
                        <div id="join-now-modal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                        <h3 class="text-xl font-semibold text-gray-900">
                                            Join Now
                                        </h3>
                                        <button type="button" id="join-now-button"
                                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                            data-modal-hide="join-now-modal">
                                            <svg class="w-3 h-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5">
                                        @if (Auth::user())
                                            <form action="{{ route('join-event') }}" class="space-y-4"
                                                method="POST">
                                                @csrf
                                                <input type="hidden" name="event_id" value="{{ $event->id }}">
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                <div>
                                                    <label for="number_pax"
                                                        class="block mb-2 text-sm font-medium text-gray-900">
                                                        Number of pax
                                                    </label>
                                                    <input type="number" name="number_pax" id="number_pax"
                                                        min="1" max="10"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                        placeholder="maximum 10 pax per order" required />
                                                </div>
                                                <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                                    Submit
                                                </button>
                                            </form>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>

                        @if (session('success'))
                            <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    html: `<div style="min-height: 50px;">{{ session('success') }}</div>`,
                                    showConfirmButton: false,
                                    showCloseButton: true,
                                });
                            </script>
                        @endif

                        @if (session('error'))
                            <script>
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    html: `<div style="min-height: 50px;">{{ session('error') }}</div>`,
                                    showConfirmButton: false,
                                    showCloseButton: true,
                                });
                            </script>
                        @endif

                    </div>
                </div>
                <!-- event image -->
                <div class="relative w-full md:w-2/5 m-0 overflow-hidden ">
                    <img src="{{ asset('storage/' . $event->cover_image_path) }}"
                        class="object-cover w-full h-64 md:h-full rounded-lg" alt="Owl image" />
                </div>
            </div>

            <h2 class="mx-auto mt-20 mb-4 text-3xl tracking-tight font-extrabold button-text-color max-w-screen-xl">
                Gallery
            </h2>

            <!-- Image gallery -->

            <div class="mx-auto mt-6 max-w-7xl px-2 flex gap-20 justify-center">
                <div class="slideshow-container overflow-hidden relative">
                    <div class="slideshow-track">
                        <!-- Add your slideshow items here -->
                        @foreach ($event->gallery as $image)
                            <div class="slideshow-item w-100 h-64 sm:overflow-hidden sm:rounded-lg">
                                <img src="{{ asset('storage/' . $image->image_path) }}"
                                    alt="Model wearing plain white basic tee."
                                    class="h-full w-full object-cover object-center">
                            </div>
                        @endforeach

                        <!-- Add more items as needed -->
                    </div>
                    <button id="prev-button" class="slideshow-button prev ">&#10094;</button>
                    <button id="next-button" class="slideshow-button next">&#10095;</button>
                </div>

            </div>

            <h2 class="mx-auto mt-20 mb-4 text-3xl tracking-tight font-extrabold button-text-color max-w-screen-xl">
                Similar Events
            </h2>

            <!-- Similar Events -->
            @if ($similarEvents->isEmpty())
                <div class="text-center mt-[10%] py-8 max-w-screen-xl mx-auto">
                    <p class="button-text-color font-semibold text-lg">No similar events found.</p>
                </div>
            @else
                <div class="mx-auto items-center gap-4 grid md:grid-cols-3 max-w-screen-xl">
                    @foreach ($similarEvents as $similarEvent)
                        <x-card :item="$similarEvent" type="event" />
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <x-footer></x-footer>

</x-header>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.querySelector('.slideshow-track');
        const items = document.querySelectorAll('.slideshow-item');
        const prevButton = document.getElementById('prev-button');
        const nextButton = document.getElementById('next-button');

        const itemWidth = items[0].offsetWidth + 15;
        const itemsPerScreen = 3; // can adjust to show num of card
        let currentIndex = 0;

        function updateSlideshow() {
            const offset = -currentIndex * itemWidth;
            track.style.transform = `translateX(${offset}px)`;
        }

        function moveNext() {
            if (currentIndex < items.length - itemsPerScreen) {
                currentIndex++;
                updateSlideshow();
            }
        }

        function movePrev() {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlideshow();
            }
        }

        nextButton.addEventListener('click', moveNext);
        prevButton.addEventListener('click', movePrev);
    });
</script>
