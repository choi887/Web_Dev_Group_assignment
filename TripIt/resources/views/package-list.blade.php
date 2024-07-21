<x-header>
    <x-slot:titleName>
        Package - TripIt
    </x-slot:titleName>
    <section class="bg-white ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl w-full">
            <x-filter item="package" :filters="['date', 'price']">
                @if ($packages->isEmpty())
                    <div class="text-center mt-[10%] py-8">
                        <p class="button-text-color font-semibold text-lg">No packages found.</p>
                    </div>
                @else
                    @foreach ($packages as $package)
                        <div><a href="{{ route('package-specific', ['package_id' => $package->id]) }}"
                                class="my-4 flex flex-col bg-white rounded-lg border border-gray-100 shadow-md md:flex-row w-full hover:bg-gray-100">
                                <div
                                    class="relative w-full md:w-2/5 m-0 overflow-hidden rounded-t-lg md:rounded-l-lg md:rounded-tr-none">
                                    <img src="{{ asset('storage/' . $package->cover_image_path) }}"
                                        class="object-cover w-full h-50 md:h-full" alt="Owl image" />
                                </div>

                                <div class="flex flex-col justify-between leading-normal p-4 w-full md:w-3/5">
                                    <div class="mb-2">
                                        <div class="text-gray-900 font-bold text-xl mb-2 flex ">
                                            <div class="flex-1 button-text-color">
                                                {{ $package->name }}
                                            </div>
                                            <div class="flex-none">

                                            </div>
                                            <div class="flex-none">
                                                ${{ $package->price }}
                                            </div>
                                        </div>
                                        <p class="font-normal text-gray-600">
                                            Date: {{ $package->start_date }} to {{ $package->end_date }}
                                        </p>
                                    </div>
                                    <p class="font-normal text-gray-600 mb-5 line-clamp-3">
                                        {{ $package->description }}
                                    </p>
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center">
                                            <img class="w-10 h-10 rounded-full mr-4" src="{{ asset('images/owl.jpg') }}"
                                                alt="Avatar of Jonathan Reinink">
                                            <div class="text-sm">
                                                <p class="text-gray-900 leading-none">{{ $package->created_by }}</p>
                                                <p class="text-gray-600">{{ $package->phone_number }}</p>
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
                            </a></div>
                    @endforeach

                    <!-- Add Pagination Links -->
                    <div class="mt-4">
                        {{ $packages->links('pagination') }}
                    </div>
                @endif
            </x-filter>
        </div>
    </section>

    <x-footer>

    </x-footer>
</x-header>
