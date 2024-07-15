<x-app-layout>
    <x-slot:titleName>
        Create Package Page - TripIt
    </x-slot:titleName>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Package page') }}
        </h2>
    </x-slot>
    <section class="">
        <x-sucess-notification></x-sucess-notification>
        <x-fail-notification></x-fail-notification>
        <div class="flex">
            <x-sidebar-create></x-sidebar-create>
            <div class="max-w-screen-xl mx-10 lg:px-12 overflow-hidden">
                <!-- content container start -->
                <div class="flex flex-col mt-8 bg-white  mx-8 px-10 pb-10 relative sm:rounded-lg overflow-hidden">
                    <div class="my-4 ">
                        <h5 class="font-semibold text-xl button-text-color leading-tight">
                            Creating a Package
                        </h5>
                    </div>
                    <div class=" bg-transparent ">
                        <!-- Card Item Start -->
                        <x-create-package-forms />
                    </div>
                </div>
                <!-- content container end -->
            </div>
        </div>
    </section>
</x-app-layout>
