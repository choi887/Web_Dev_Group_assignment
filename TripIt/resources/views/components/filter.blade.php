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
                        <form id="filter_form_event" class="space-y-10 divide-y divide-gray-200">
                            @if (in_array('category', $filters))
                                <div class="pt-4">
                                    <fieldset>
                                        <legend class="block text-sm font-medium text-gray-900 mb-4">Category</legend>
                                        <div class="space-y-3  pl-2 overflow-hidden overflow-y-auto max-h-44">
                                            @foreach ($categories as $category)
                                                <div class="flex items-center">
                                                    <input id="category-{{ $category->id }}" name="categories[]"
                                                        value="{{ $category->id }}" type="checkbox"
                                                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                                                        {{ in_array($category->id, request('categories', [])) ? 'checked' : '' }}>
                                                    <label for="category-{{ $category->id }}"
                                                        class="ml-3 text-sm text-gray-600">{{ $category->name }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </fieldset>
                                </div>
                            @endif

                            @if (in_array('date', $filters))
                                <div class="pt-4">
                                    <fieldset>
                                        <legend class="block text-sm font-medium text-gray-900">Date Range</legend>
                                        <div class="mt-3">
                                            <input type="date" name="start_date" value="{{ request('start_date') }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                placeholder="Start Date">
                                            <input type="date" name="end_date" value="{{ request('end_date') }}"
                                                class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                placeholder="End Date">
                                        </div>
                                    </fieldset>
                                </div>
                            @endif

                            @if (in_array('food', $filters))
                                <div class="pt-4">
                                    <fieldset>
                                        <legend class="block text-sm font-medium text-gray-900">Logistics Filter
                                        </legend>
                                        <div class="space-y-3 pt-6">
                                            <div class="flex items-center">
                                                <input id="food" name="food" value="1" type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="food-0" class="ml-3 text-sm text-gray-600">Food
                                                    Provided</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="transportation" name="transportation" value="1"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="food-1" class="ml-3 text-sm text-gray-600">Transportation
                                                    Provided</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="lodging" name="transportation" value="1"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="food-1" class="ml-3 text-sm text-gray-600">Lodging
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
                                                <input id="price-1" name="price[]" value="5000-10000" type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="price-1"
                                                    class="ml-3 text-sm text-gray-600">5,000-10,000</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="price-2" name="price[]" value="10000-25000" type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="price-2"
                                                    class="ml-3 text-sm text-gray-600">10,000-25,000</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="price-3" name="price[]" value="25000-50000" type="checkbox"
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
                    <div id="event-list-container" class="col-span-3">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
