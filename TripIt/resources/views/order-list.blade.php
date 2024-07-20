<x-header>
    <x-slot:titleName>
        Package - TripIt
    </x-slot:titleName>
    <section class="bg-white ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl w-full">
            <x-filter item="order" :filters="['date', 'price']">
                @if ($orders->isEmpty())
                    <div class="text-center mt-[10%] py-8">
                        <p class="button-text-color font-semibold text-lg">No packages found.</p>
                    </div>
                @else
                    @foreach ($orders as $order)
                        <div>
                            <a href="#"
                                class="my-4 flex flex-col bg-white border border-gray-100 rounded-lg shadow-md md:flex-row w-full hover:bg-gray-100">
                                @if ($order->type->label() == 'event')
                                    <div
                                        class="relative w-full md:w-2/5 m-0 overflow-hidden rounded-t-lg md:rounded-l-lg md:rounded-tr-none">
                                        <img src="{{ asset('storage/' . $order->event->cover_image_path) }}"
                                            class="object-cover w-full h-50 md:h-full " alt="Owl image" />
                                    </div>

                                    <div class="flex flex-col justify-between leading-normal p-4 w-full md:w-3/5">
                                        <div class="mb-2">
                                            <div class="text-gray-900 font-bold text-xl mb-2 flex ">
                                                <div class="flex-1 button-text-color">
                                                    {{ $order->event->name }}
                                                </div>

                                                <div class="flex-none">
                                                    ${{ $order->event->price }}
                                                </div>
                                            </div>
                                            @if ($order->status->label() == 'ongoing')
                                                <span
                                                    class="inline-flex items-center font-semibold bg-green-200 text-green-800 text-sm px-2.5 py-1 rounded-full ">
                                                    <span
                                                        class="w-2 h-2 me-1 bg-green-500 rounded-full animate-pulse"></span>
                                                    {{ $order->status }}
                                                </span>
                                            @elseif($order->status->label() == 'cancelled')
                                                <span
                                                    class="inline-flex items-center font-semibold bg-red-200 text-red-800 text-sm px-2.5 py-1 rounded-full ">
                                                    <span
                                                        class="w-2 h-2 me-1 bg-red-500 rounded-full animate-pulse"></span>
                                                    {{ $order->status }}
                                                </span>
                                            @else
                                                <span
                                                    class="inline-flex items-center font-semibold bg-blue-200 text-blue-800 text-sm px-2.5 py-1 rounded-full ">
                                                    <span
                                                        class="w-2 h-2 me-1 bg-blue-500 rounded-full animate-pulse"></span>
                                                    {{ $order->status }}
                                                </span>
                                            @endif
                                            <p
                                                class="font-normal
                                                text-gray-600">
                                                Event Date: {{ $order->event->start_date }} to
                                                {{ $order->event->end_date }}
                                            </p>
                                            <p class="font-normal text-gray-600">
                                                Order Date : {{ $order->order_date }}
                                            </p>
                                        </div>
                                        <p class="font-normal text-gray-600 mb-5 line-clamp-2">
                                            {{ $order->event->description }}
                                        </p>

                                        <div class="flex justify-between items-center">
                                            <div class="flex items-center">
                                                <img class="w-10 h-10 rounded-full mr-4"
                                                    src="{{ asset('images/owl.jpg') }}"
                                                    alt="Avatar of Jonathan Reinink">
                                                <div class="text-sm">
                                                    <p class="text-gray-900 leading-none">
                                                        {{ $order->event->created_by }}</p>
                                                    <p class="text-gray-600">{{ $order->event->phone_number }}</p>
                                                </div>

                                            </div>
                                            <div class="flex items-center">
                                                <div
                                                    class="text-sm self-end button-text-color font-semibold flex items-center hover:underline">
                                                    More Details
                                                </div>
                                                <span aria-hidden="true" class="ml-1">→</span>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($order->type->label() == 'package')
                                    <div
                                        class="relative w-full md:w-2/5 m-0 overflow-hidden rounded-t-lg md:rounded-l-lg md:rounded-tr-none">
                                        <img src="{{ asset('storage/' . $order->package->cover_image_path) }}"
                                            class="object-cover w-full h-50 md:h-full" alt="Owl image" />
                                    </div>

                                    <div class="flex flex-col justify-between leading-normal p-4 w-full md:w-3/5">
                                        <div class="mb-2">
                                            <div class="text-gray-900 font-bold text-xl mb-2 flex ">
                                                <div class="flex-1 button-text-color">
                                                    {{ $order->package->name }}
                                                </div>

                                                <div class="flex-none">
                                                    ${{ $order->package->price }}
                                                </div>
                                            </div>
                                            @if ($order->status->label() == 'ongoing')
                                                <span
                                                    class="inline-flex items-center font-semibold bg-green-200 text-green-800 text-sm px-2.5 py-1 rounded-full ">
                                                    <span
                                                        class="w-2 h-2 me-1 bg-green-500 rounded-full animate-pulse"></span>
                                                    {{ $order->status }}
                                                </span>
                                            @elseif($order->status->label() == 'cancelled')
                                                <span
                                                    class="inline-flex items-center font-semibold bg-red-200 text-red-800 text-sm px-2.5 py-1 rounded-full ">
                                                    <span
                                                        class="w-2 h-2 me-1 bg-red-500 rounded-full animate-pulse"></span>
                                                    {{ $order->status }}
                                                </span>
                                            @else
                                                <span
                                                    class="inline-flex items-center font-semibold bg-blue-200 text-blue-800 text-sm px-2.5 py-1 rounded-full ">
                                                    <span
                                                        class="w-2 h-2 me-1 bg-blue-500 rounded-full animate-pulse"></span>
                                                    {{ $order->status }}
                                                </span>
                                            @endif
                                            <p
                                                class="font-normal
                                        text-gray-600">
                                                Package Date: {{ $order->package->start_date }} to
                                                {{ $order->package->end_date }}
                                            </p>
                                            <p class="font-normal text-gray-600">
                                                Order Date : {{ $order->order_date }}
                                            </p>
                                        </div>
                                        <p class="font-normal text-gray-600 mb-5 line-clamp-2">
                                            {{ $order->package->description }}
                                        </p>

                                        <div class="flex justify-between items-center">
                                            <div class="flex items-center">
                                                <img class="w-10 h-10 rounded-full mr-4"
                                                    src="{{ asset('images/owl.jpg') }}"
                                                    alt="Avatar of Jonathan Reinink">
                                                <div class="text-sm">
                                                    <p class="text-gray-900 leading-none">
                                                        {{ $order->package->created_by }}</p>
                                                    <p class="text-gray-600">{{ $order->package->phone_number }}</p>
                                                </div>

                                            </div>
                                            <div class="flex items-center">
                                                <div
                                                    class="text-sm self-end button-text-color font-semibold flex items-center hover:underline">
                                                    More Details
                                                </div>
                                                <span aria-hidden="true" class="ml-1">→</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            </a>
                        </div>
                    @endforeach
                    <!-- Add Pagination Links -->
                    <div class="mt-4">
                        {{ $orders->links('pagination') }}
                    </div>
                @endif
            </x-filter>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('filter_form');
                const autoSubmitInputs = form.querySelectorAll('.auto-submit');

                autoSubmitInputs.forEach(input => {
                    input.addEventListener('change', function() {
                        submitForm();
                    });
                });

                function submitForm() {
                    const formData = new FormData(form);
                    const searchParams = new URLSearchParams(formData);

                    // Remove empty parameters
                    for (const [key, value] of searchParams.entries()) {
                        if (!value) {
                            searchParams.delete(key);
                        }
                    }

                    // Add a loading indicator if desired
                    // document.getElementById('loading-indicator').style.display = 'block';

                    window.location.search = searchParams.toString();
                }
            });
        </script>
    </section>

    <x-footer>

    </x-footer>
</x-header>
