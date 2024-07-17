<x-header>
    <x-slot:titleName>
        Package - TripIt
    </x-slot:titleName>
    <section class="bg-white ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl w-full">
            <x-filter item="package" :filters="['date', 'price']">
                <x-slot:filterFormId></x-slot:filterFormId>
                @foreach ($packages as $package)
                    <a href="{{ route('package-specific', ['package_id' => $package->id]) }}"
                        class="my-4 flex flex-col bg-white rounded-lg shadow md:flex-row w-full hover:bg-gray-100">
                        <div
                            class="relative w-full md:w-2/5 m-0 overflow-hidden rounded-t-lg md:rounded-l-lg md:rounded-tr-none">
                            <img src="{{ asset('storage/' . $package->cover_image_path) }}"
                                class="object-cover w-full h-64 md:h-full" alt="Owl image" />
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
                            <p class="font-normal text-gray-600 line-clamp-3">
                                {{ $package->description }}
                            </p>
                            <div class="flex justify-end items-center">
                                <div class="text-sm text-indigo-600 font-semibold flex items-center hover:underline">
                                    More Detail
                                    <span aria-hidden="true" class="ml-1">→</span>
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
