<x-app-layout>
    <x-slot:titleName>
        Dashboard - TripIt
    </x-slot:titleName>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <section>
        <x-sucess-notification></x-sucess-notification>
        <x-fail-notification></x-fail-notification>
        <div class="flex">
            <x-sidebar-create></x-sidebar-create>
            <div class="max-w-screen-xl w-full mt-4  lg:px-12 overflow-hidden">
                <!-- content container start -->
                <div class="  grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3">
                    <div class="items-center justify-between p-4   rounded-lg shadow-xl sm:flex  sm:p-6 ">
                        <div class="w-full">
                            <h3 class="text-base font-semibold text-gray-900">
                                New products
                            </h3>
                            <span class="text-2xl font-bold leading-none text-black sm:text-3xl ">2,340</span>
                            <p class="flex items-center text-base font-normal text-gray-500 ">
                                <span class="flex items-center mr-1.5 text-md text-green-400 ">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                        </path>
                                    </svg>
                                    12.5%
                                </span>
                                Since last month
                            </p>
                        </div>
                        <div class="mt-4">
                            <div class="flex items-end space-x-2">
                                <div class="h-10 w-4 bg-blue-600 shadow-xl border border-blue-400"></div>
                                <div class="h-14 w-4 bg-blue-600"></div>
                                <div class="h-8 w-4 bg-blue-600"></div>
                                <div class="h-6 w-4 bg-blue-600"></div>
                                <div class="h-10 w-4 bg-blue-600"></div>
                                <div class="h-14 w-4 bg-blue-600"></div>
                                <div class="h-8 w-4 bg-blue-600"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- content container end -->

        </div>
        </div>


    </section>
</x-app-layout>
