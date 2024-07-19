<x-header>
    <x-slot:titleName>
        Event - TripIt
    </x-slot:titleName>
    <section class="bg-white ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl w-full">
            <x-filter item="event" :filters="['category', 'date', 'logistics', 'price']">
                <x-event-list :events="$events" />
            </x-filter>
        </div>
    </section>

    <x-footer>

    </x-footer>
</x-header>
<!-- filter script for event start  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<x-filter-script />
<!--filter script for event end -->
