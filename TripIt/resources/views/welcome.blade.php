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

        <h2 class="mx-auto mb-4 text-3xl tracking-tight font-extrabold button-text-color max-w-screen-xl">
            Recommended Packages to You
        </h2>

        <div class="mx-auto items-center gap-4 grid md:grid-cols-3 max-w-screen-xl">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-xl">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('images/travel.jpg') }}" alt="Event Image" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>

                    <ul class="mb-3">
                        <li class="flex items-start mb-2">
                            <span class="mt-2 w-3 h-3 me-3 bg-blue-600 rounded-full"></span>
                            <span>Foster creativity in our vibrant open-space</span>
                        </li>
                        <li class="flex items-start mb-2">
                            <span class="mt-2 w-3 h-3 me-3 bg-blue-600 rounded-full"></span>
                            <span>Flexibility for your dynamic schedule</span>
                        </li>
                        <li class="flex items-start mb-2">
                            <span class="mt-2 w-3 h-3 me-3 bg-blue-600 rounded-full"></span>
                            <span>Expand your network in our dynamic community</span>
                        </li>
                        <li class="flex items-start mb-2">
                            <span class="mt-2 w-3 h-3 me-3 bg-blue-600 rounded-full"></span>
                            <span>All branch access</span>
                        </li>
                    </ul>

                    <div class="flex justify-between">
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        <a href="#"
                            class="inline-flex items-center px-4 py-3 text-sm font-medium text-center button-bg-color-2 button-text-color rounded-lg transition hover:bg-gray-300">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-xl">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('images/travel.jpg') }}" alt="Event Image" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>

                    <ul class="mb-3">
                        <li class="flex items-start mb-2">
                            <span class="mt-2 w-3 h-3 me-3 bg-blue-600 rounded-full"></span>
                            <span>Foster creativity in our vibrant open-space</span>
                        </li>
                        <li class="flex items-start mb-2">
                            <span class="mt-2 w-3 h-3 me-3 bg-blue-600 rounded-full"></span>
                            <span>Flexibility for your dynamic schedule</span>
                        </li>
                        <li class="flex items-start mb-2">
                            <span class="mt-2 w-3 h-3 me-3 bg-blue-600 rounded-full"></span>
                            <span>Expand your network in our dynamic community</span>
                        </li>
                        <li class="flex items-start mb-2">
                            <span class="mt-2 w-3 h-3 me-3 bg-blue-600 rounded-full"></span>
                            <span>All branch access</span>
                        </li>
                    </ul>

                    <div class="flex justify-between">
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        <a href="#"
                            class="inline-flex items-center px-4 py-3 text-sm font-medium text-center button-bg-color-2 button-text-color rounded-lg transition hover:bg-gray-300">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-xl">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('images/travel.jpg') }}" alt="Event Image" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>

                    <ul class="mb-3">
                        <li class="flex items-start mb-2">
                            <span class="mt-2 w-3 h-3 me-3 bg-blue-600 rounded-full"></span>
                            <span>Foster creativity in our vibrant open-space</span>
                        </li>
                        <li class="flex items-start mb-2">
                            <span class="mt-2 w-3 h-3 me-3 bg-blue-600 rounded-full"></span>
                            <span>Flexibility for your dynamic schedule</span>
                        </li>
                        <li class="flex items-start mb-2">
                            <span class="mt-2 w-3 h-3 me-3 bg-blue-600 rounded-full"></span>
                            <span>Expand your network in our dynamic community</span>
                        </li>
                        <li class="flex items-start mb-2">
                            <span class="mt-2 w-3 h-3 me-3 bg-blue-600 rounded-full"></span>
                            <span>All branch access</span>
                        </li>
                    </ul>

                    <div class="flex justify-between">
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        <a href="#"
                            class="inline-flex items-center px-4 py-3 text-sm font-medium text-center button-bg-color-2 button-text-color rounded-lg transition hover:bg-gray-300">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mx-auto mt-20 mb-4 text-3xl tracking-tight font-extrabold button-text-color max-w-screen-xl">
            Latest Event
        </h2>

        <div class="mx-auto items-center gap-4 grid md:grid-cols-3 max-w-screen-xl">
            @foreach ($events as $event)
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow h-full">
                    <a href="{{ route('event-specific', ['category' => $event->name, 'event_id' => $event->id]) }}">
                        <img class="rounded-t-lg" src="{{ asset('storage/' . $event->cover_image_path) }}"
                            alt="" />
                    </a>
                    <div class="p-5 flex flex-col justify-between">
                        <a
                            href="{{ route('event-specific', ['category' => $event->name, 'event_id' => $event->id]) }}">
                            <h5 class="flex flex-1 text-2xl font-bold items-center button-text-color">
                                {{ $event->name }}
                                <span
                                    class="ml-4 bg-blue-100 text-blue-800 text-sm font-large me-2 px-2.5 py-0.5 rounded">
                                    {{ $event->category->name }}</span>
                            </h5>

                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">
                            {{ $event->description }}
                        </p>
                        <a href="{{ route('event-specific', ['category' => $event->name, 'event_id' => $event->id]) }}"
                            class="inline-flex self-start items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
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

        <h2 class="mx-auto mt-20 mb-4 text-3xl tracking-tight font-extrabold button-text-color max-w-screen-xl">
            Review to Us
        </h2>
        <div class="mx-auto items-center gap-4 grid md:grid-cols-3 max-w-screen-xl">
            <div
                class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
                <div
                    class="relative flex items-center gap-4 pt-0 pb-8 mx-0 mt-4 overflow-hidden text-gray-700 bg-transparent shadow-none rounded-xl bg-clip-border">
                    <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80"
                        alt="Tania Andrew"
                        class="relative inline-block h-[58px] w-[58px] !rounded-full  object-cover object-center" />
                    <div class="flex w-full flex-col gap-0.5">
                        <div class="flex items-center justify-between">
                            <h5
                                class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                Tania Andrew
                            </h5>
                            <div class="flex items-center gap-0 5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-yellow-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-yellow-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-yellow-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-yellow-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-yellow-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="block font-sans text-base antialiased font-light leading-relaxed text-blue-gray-900">
                            Frontend Lead @ Google
                        </p>
                    </div>
                </div>
                <div class="p-0 mb-6">
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                        "I found solution to all my design needs from Creative Tim. I use
                        them as a freelancer in my hobby projects for fun! And its really
                        affordable, very humble guys !!!"
                    </p>
                </div>
            </div>
            <div
                class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
                <div
                    class="relative flex items-center gap-4 pt-0 pb-8 mx-0 mt-4 overflow-hidden text-gray-700 bg-transparent shadow-none rounded-xl bg-clip-border">
                    <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80"
                        alt="Tania Andrew"
                        class="relative inline-block h-[58px] w-[58px] !rounded-full  object-cover object-center" />
                    <div class="flex w-full flex-col gap-0.5">
                        <div class="flex items-center justify-between">
                            <h5
                                class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                Tania Andrew
                            </h5>
                            <div class="flex items-center gap-0 5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-yellow-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-yellow-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-yellow-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-yellow-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-yellow-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="block font-sans text-base antialiased font-light leading-relaxed text-blue-gray-900">
                            Frontend Lead @ Google
                        </p>
                    </div>
                </div>
                <div class="p-0 mb-6">
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                        "I found solution to all my design needs from Creative Tim. I use
                        them as a freelancer in my hobby projects for fun! And its really
                        affordable, very humble guys !!!"
                    </p>
                </div>
            </div>
            <div
                class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
                <div
                    class="relative flex items-center gap-4 pt-0 pb-8 mx-0 mt-4 overflow-hidden text-gray-700 bg-transparent shadow-none rounded-xl bg-clip-border">
                    <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80"
                        alt="Tania Andrew"
                        class="relative inline-block h-[58px] w-[58px] !rounded-full  object-cover object-center" />
                    <div class="flex w-full flex-col gap-0.5">
                        <div class="flex items-center justify-between">
                            <h5
                                class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                Tania Andrew
                            </h5>
                            <div class="flex items-center gap-0 5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-yellow-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-yellow-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-yellow-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-yellow-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-yellow-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="block font-sans text-base antialiased font-light leading-relaxed text-blue-gray-900">
                            Frontend Lead @ Google
                        </p>
                    </div>
                </div>
                <div class="p-0 mb-6">
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                        "I found solution to all my design needs from Creative Tim. I use
                        them as a freelancer in my hobby projects for fun! And its really
                        affordable, very humble guys !!!"
                    </p>
                </div>
            </div>
        </div>

        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
                    Contact Us</h2>
                <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a
                    technical issue? Want to send feedback about a beta feature? Need details about our Business plan?
                    Let us know.</p>
                <form action="#" class="space-y-8">
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                        <input type="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            placeholder="name@flowbite.com" required>
                    </div>
                    <div>
                        <label for="subject"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                        <input type="text" id="subject"
                            class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            placeholder="Let us know how we can help you" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                            message</label>
                        <textarea id="message" rows="6"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Leave a comment..."></textarea>
                    </div>
                    <button type="submit"
                        class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send
                        message</button>
                </form>
            </div>
        </section>
    </section>

    <x-footer>

    </x-footer>
</x-header>
