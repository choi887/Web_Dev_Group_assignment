@foreach ($events as $event)
    <div class="event-card flex bg-white rounded-xl border shadow-md border-gray-300 overflow-hidden h-48 m-4">
        <div class="w-1/3 relative">
            <img src="{{ asset('storage/' . $event->cover_image_path) }}" alt="Event image"
                class="absolute inset-0 w-full h-full object-cover">
        </div>
        <div class="w-2/3 p-4 flex flex-col justify-between">
            <div class="event-name text-base font-semibold leading-7 text-gray-900">
                {{ $event->name }}
            </div>
            <p class="event-category text-gray-700 text-base">Event category: {{ $event->category->name }}</p>
            <p class="text-gray-700 text-base">Start date: {{ $event->start_date }}</p>
            <p class="text-gray-700 text-base">End date: {{ $event->end_date }}</p>
            <button type="button"
                class="choose-event-button inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline"
                data-event-name="{{ $event->name }}">
                Choose this Event
                <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </button>
        </div>

    </div>
@endforeach
