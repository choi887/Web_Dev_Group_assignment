<x-header>
    <x-slot:titleName>
        My Order - TripIt
    </x-slot:titleName>
    <section class="bg-white ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl w-full">
            <x-filter item="order" :filters="['status', 'type']">
                @if ($orders->isEmpty())
                    <div class="text-center mt-[10%] py-8">
                        <p class="button-text-color font-semibold text-lg">No order found.</p>
                    </div>
                @else
                    @foreach ($orders as $order)
                        <div>
                            <a href="#"
                                class="my-4 flex flex-col bg-white border border-gray-100 rounded-lg shadow-md md:flex-row w-full hover:bg-gray-100">
                                <div
                                    class="relative w-full md:w-2/5 m-0 overflow-hidden rounded-t-lg md:rounded-l-lg md:rounded-tr-none">
                                    <img src="{{ asset('storage/' . $order->item->cover_image_path) }}"
                                        class="object-cover w-full h-50 md:h-full " alt="Owl image" />
                                </div>

                                <div class="flex flex-col justify-between leading-normal p-4 w-full md:w-3/5">
                                    <div class="mb-2">
                                        <div class="text-gray-900 font-bold text-xl mb-2 flex ">
                                            <div class="flex-1 button-text-color">
                                                {{ $order->item->name }}
                                            </div>

                                            <div class="flex-none">
                                                ${{ $order->item->price }}
                                            </div>
                                        </div>
                                        <span
                                            class="inline-flex items-center font-semibold {{ $order->bg_color_1 }} {{ $order->text_color }} text-sm px-2.5 py-1 rounded-full ">
                                            <span
                                                class="w-2 h-2 me-1 {{ $order->bg_color_2 }} rounded-full animate-pulse"></span>
                                            {{ $order->status }}
                                        </span>

                                        <p class="font-normal text-gray-600">
                                            Event Date: {{ $order->item->start_date }} to
                                            {{ $order->item->end_date }}
                                        </p>
                                        <p class="font-normal text-gray-600">
                                            Order Date : {{ $order->order_date }}
                                        </p>
                                    </div>
                                    <p class="font-normal text-gray-600 mb-5 line-clamp-2">
                                        {{ $order->item->description }}
                                    </p>

                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center">
                                            <img class="w-10 h-10 rounded-full mr-4"
                                                src="{{ asset('images/owl.jpg') }}" alt="Avatar of Jonathan Reinink">
                                            <div class="text-sm">
                                                <p class="text-gray-900 leading-none">
                                                    {{ $order->item->created_by }}</p>
                                                <p class="text-gray-600">{{ $order->item->phone_number }}</p>
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
    </section>

    <x-footer>

    </x-footer>
</x-header>
