<!-- resources/views/components/filter.blade.php -->
@props(['item', 'filters'])

<div class="bg-white">
    <div>
        <main class="mx-auto px-4 py-4 ">
            <div class="border-b border-gray-200 pb-10">
                <h1 class="text-4xl font-bold tracking-tight button-text-color">New {{ ucfirst($item) }}s</h1>
                <p class="mt-4 text-base text-gray-500">Check out the latest release of our new {{ $item }}s!</p>
            </div>

            <div class="pt-4 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
                <aside>
                    <h2 class="sr-only">Filters</h2>

                    <!-- Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state. -->
                    <button type="button" class="inline-flex items-center lg:hidden">
                        <span class="text-sm font-medium text-gray-700">Filters</span>
                        <svg class="ml-1 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                        </svg>
                    </button>

                    <div class="hidden lg:block">
                        <form id="{{ $filterFormId }}" class="space-y-10 divide-y divide-gray-200">
                            @if (in_array('category', $filters))
                                <div class="pt-4">
                                    <fieldset>
                                        <legend class="block text-sm font-medium text-gray-900">Category</legend>
                                        <div class="space-y-3 pt-6">
                                            <div class="flex items-center">
                                                <input id="category-0" name="category[]" value="hiking" type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="category-0"
                                                    class="ml-3 text-sm text-gray-600">Hiking</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="category-1" name="category[]" value="golf" type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="category-1" class="ml-3 text-sm text-gray-600">Golf</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="category-2" name="category[]" value="scuba-diving"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="category-2" class="ml-3 text-sm text-gray-600">Scuba
                                                    Diving</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            @endif

                            @if (in_array('date', $filters))
                                <div class="pt-4">
                                    <fieldset>
                                        <legend class="block text-sm font-medium text-gray-900">Date</legend>
                                        <div id="date-range-picker" date-rangepicker class="mt-3 items-center">
                                            <div class="relative">
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                    </svg>
                                                </div>
                                                <input id="datepicker-range-start" name="start" type="text"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                                                    placeholder="Start Date">
                                            </div>
                                            <span class="mx-4 text-gray-500">to</span>
                                            <div class="relative">
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                    </svg>
                                                </div>
                                                <input id="datepicker-range-end" name="end" type="text"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                                                    placeholder="End Date">
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            @endif

                            @if (in_array('food', $filters))
                                <div class="pt-4">
                                    <fieldset>
                                        <legend class="block text-sm font-medium text-gray-900">Food</legend>
                                        <div class="space-y-3 pt-6">
                                            <div class="flex items-center">
                                                <input id="food-0" name="food[]" value="provided" type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="food-0"
                                                    class="ml-3 text-sm text-gray-600">Provided</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="food-1" name="food[]" value="not_provided"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="food-1" class="ml-3 text-sm text-gray-600">Not
                                                    Provided</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            @endif

                            @if (in_array('price', $filters))
                                <div class="pt-4">
                                    <fieldset>
                                        <legend class="block text-sm font-medium text-gray-900">Price</legend>
                                        <div class="space-y-3 pt-6">
                                            <div class="flex items-center">
                                                <input id="price-0" name="price[]" value="<5000" type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="price-0"
                                                    class="ml-3 text-sm text-gray-600">&lt;5,000</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="price-1" name="price[]" value="5000-10000"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="price-1"
                                                    class="ml-3 text-sm text-gray-600">5,000-10,000</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="price-2" name="price[]" value="10000-25000"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="price-2"
                                                    class="ml-3 text-sm text-gray-600">10,000-25,000</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="price-3" name="price[]" value="25000-50000"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="price-3"
                                                    class="ml-3 text-sm text-gray-600">25,000-50,000</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="price-4" name="price[]" value="50000-100000"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="price-4"
                                                    class="ml-3 text-sm text-gray-600">50,000-100,000</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="price-5" name="price[]" value=">100000" type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="price-5"
                                                    class="ml-3 text-sm text-gray-600">&gt;100,000</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            @endif
                        </form>
                    </div>
                </aside>

                <!-- Product grid -->
                <div class="mt-6 lg:col-span-2 lg:mt-0 xl:col-span-3">
                    <!-- Your content -->
                    <div class="col-span-3">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
