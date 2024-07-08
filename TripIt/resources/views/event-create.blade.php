<x-app-layout>
    <x-slot:titleName>
        Create Event Page - TripIt
    </x-slot:titleName>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Event page') }}
        </h2>
    </x-slot>
    <section class="mt-8">
        <x-sucess-notification></x-sucess-notification>
        <x-fail-notification></x-fail-notification>
        <div class=" mx-auto max-w-screen-xl px-4 py-4 lg:px-12 overflow-hidden">
            <!-- content container start -->
            <div class="flex flex-col bg-white shadow-md px-10 pb-10 relative sm:rounded-lg overflow-hidden">
                <div class="my-4 p-2">
                    <h5 class="font-semibold text-xl text-gray-800 leading-tight">
                        Creating Event Panel
                    </h5>
                </div>
                <div class="grid grid-cols-1 bg-transparent gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-2 2xl:gap-7.5">
                    <!-- Card Item Start -->
                    <x-create-event-box>
                        <x-slot:entityName>
                            Category
                        </x-slot:entityName>
                        <x-slot:text>
                            The event is required to have a category linked to
                            it. Make sure it is linked correctly at the final form.
                        </x-slot:text>
                    </x-create-event-box>
                    <!-- Card Item End -->
                    <!-- Card Item Start -->
                    <x-create-event-box>
                        <x-slot:entityName>
                            Transportation
                        </x-slot:entityName>
                        <x-slot:text>
                            If you are providing transportation please create a new
                            Transportation record and link it to the final form or just choose none later on.
                        </x-slot:text>
                    </x-create-event-box>
                    <!-- Card Item End -->
                    <!-- Card Item Start -->
                    <x-create-event-box>
                        <x-slot:entityName>
                            Lodging
                        </x-slot:entityName>
                        <x-slot:text>
                            If you are providing lodging please create a new
                            lodging record and link it to the final form or just choose none later on.
                        </x-slot:text>
                    </x-create-event-box>
                    <!-- Card Item end -->
                    <!-- Card Item Start -->
                    <x-create-event-box>
                        <x-slot:entityName>
                            Event
                        </x-slot:entityName>
                        <x-slot:text>
                            This should be your final step to create an event. Click on the button to create one.
                        </x-slot:text>
                    </x-create-event-box>
                    <!-- Card Item End -->
                </div>
                <div class="my-4 p-2 flex justify-center">
                    <a href="{{ route('event.list') }}"
                        class=" flex flex-row font-semibold text-xl text-gray-800 leading-tight hover:underline">
                        Check out your event list <span class="pt-[2px]"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>

                    </a>
                </div>
            </div>
            <!-- content container end -->

        </div>

    </section>
    <!-- modals start -->
    <x-create-category-modal></x-create-category-modal>
    <x-create-event-modal></x-create-event-modal>
    <!-- modals end -->
</x-app-layout>
