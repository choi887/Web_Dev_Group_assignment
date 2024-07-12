<div class=" sm:col-span-4">
    <div class="relative">
        <label for="category" class="block mb-2 text-sm font-medium text-black">Choose your category</label>
        <div class="relative">
            <button id="dropdownButton"
                class="flex justify-between items-center border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600  w-full p-2.5 overflow-y-auto">
                <span>Select a category</span>
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <div id="dropdownMenu"
                class="absolute z-50 w-full bg-white border border-gray-300 rounded-lg shadow-lg max-h-60 overflow-y-auto hidden">
                <ul class="py-1 text-gray-700">
                    @foreach ($categories as $category)
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer" data-value="{{ $category->id }}">
                            {{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <input type="hidden" name="category_id" id="category">
    </div>
</div>
