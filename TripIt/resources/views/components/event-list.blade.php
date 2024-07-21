<div>
    @if ($events->isEmpty())
        <div class="text-center mt-[10%] py-8">
            <p class="button-text-color font-semibold text-lg">No events found.</p>
        </div>
    @else
        @foreach ($events as $event)
            <div class="event-list-container">
                <a href="{{ route('event-specific', ['category' => $event->category->name, 'event_id' => $event->id]) }}"
                    class="my-4 flex flex-col bg-white rounded-lg shadow-md border border-gray-100 md:flex-row w-full hover:bg-gray-100">
                    <div
                        class="relative w-full md:w-2/5 m-0 overflow-hidden rounded-t-lg md:rounded-l-lg md:rounded-tr-none">
                        <img src="{{ asset('storage/' . $event->cover_image_path) }}"
                            class="object-cover w-full h-50 md:h-full" alt="Owl image" />
                    </div>

                    <div class=" flex flex-col justify-between leading-normal p-4 w-full md:w-3/5">
                        <div class="mb-2">
                            <div class="text-gray-900 font-bold text-xl mb-2 flex ">
                                <div class="flex-1 button-text-color">
                                    {{ $event->name }}
                                    <span
                                        class="ml-4 bg-blue-100 text-blue-800 text-sm font-large me-2 px-2.5 py-0.5 rounded">
                                        {{ $event->category->name }}</span>
                                </div>
                                <div class="flex-none">

                                </div>
                                <div class="flex-none">
                                    ${{ $event->price }}
                                </div>
                            </div>
                            <p class="font-normal text-gray-600">
                                Date: {{ $event->start_date }} to {{ $event->end_date }}
                            </p>
                            <p class="font-normal text-gray-600 line-clamp-2">
                                {{ $event->description }}
                            </p>
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
            {{ $events->links('pagination') }}
        </div>
    @endif
</div>
