<div id="createEventModal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5">
                <h3 class="text-lg font-semibold text-black">Add a Event</h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center "
                    data-modal-target="createEventModal" data-modal-toggle="createEventModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form method="POST" action="{{ route('event.add') }}" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">



                    <!-- search category start -->
                    <x-search-bar>
                        <x-slot:item>
                            category
                        </x-slot:item>
                        <x-slot:dropdownBarSize>40%</x-slot:dropdownBarSize>
                    </x-search-bar>
                    <!-- search category end -->
                    <x-search-bar>
                        <x-slot:item>
                            transportation
                        </x-slot:item>
                        <x-slot:dropdownBarSize>40%</x-slot:dropdownBarSize>
                    </x-search-bar>
                    <!-- search transportation end -->
                    <x-search-bar>
                        <x-slot:item>
                            lodging
                        </x-slot:item>
                        <x-slot:dropdownBarSize>40%</x-slot:dropdownBarSize>
                    </x-search-bar>

                    <!-- Checkbox input -->
                    <div class="flex items-center mb-4">
                        <input id="food-checkbox" type="checkbox" name="food" value="1"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 ">
                        <label for="food-checkbox" class="ms-2 text-sm font-medium text-gray-900 ">food provided</label>
                    </div>
                    <div></div>
                    <!-- file submission start -->
                    <label class="block text-sm font-medium text-gray-900 " for="default_size">put your image
                        here in either png or jpeg file
                    </label>
                    <input name="image"
                        class="block col-span-full w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
                        id="default_size" type="file" accept="image/x-png,image/gif,image/jpeg,image/jpg"
                        onchange="loadFile(event)" required>
                    <div class="flex flex-col">
                        <label for="price" class="block mb-2 text-sm font-medium text-black">image preview</label>
                        <div class="w-full "><img id="previewImage"></div>
                    </div>
                    <!-- file submission end -->

                </div>
                <button type="submit"
                    class="text-black inline-flex justify-center border border-black bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                    Add new Event
                </button>
            </form>
        </div>
    </div>
</div>
