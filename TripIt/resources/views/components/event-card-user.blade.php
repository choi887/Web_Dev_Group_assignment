<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow h-full flex flex-col">
    <a href="{{ route('event-specific', ['category' => $event->name, 'event_id' => $event->id]) }}">
        <img class="rounded-t-lg h-48 w-full object-cover" src="{{ asset('storage/' . $event->cover_image_path) }}"
            alt="" />
    </a>
    <div class="p-5 flex flex-col justify-between flex-1">
        <div>
            <a href="{{ route('event-specific', ['category' => $event->name, 'event_id' => $event->id]) }}">
                <h5 class="flex flex-1 text-2xl font-bold items-center button-text-color">
                    {{ $event->name }}
                    <span class="ml-4 bg-blue-100 text-blue-800 text-sm font-large me-2 px-2.5 py-0.5 rounded">
                        {{ $event->category->name }}
                    </span>
                </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-4">
                {{ $event->description }}
            </p>
        </div>
        <a href="{{ route('event-specific', ['category' => $event->name, 'event_id' => $event->id]) }}"
            class="inline-flex self-start items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
            Read more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
</div>
