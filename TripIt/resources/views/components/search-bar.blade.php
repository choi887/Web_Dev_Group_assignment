<div id="search-container-for-{{ $item }}">
    <label for="search-input-{{ $item }}"
        class="block mb-2 text-sm font-medium text-black">{{ $item }}</label>
    <input type="text" id="search-input-{{ $item }}" placeholder="Search categories here"
        name="{{ $item }}"
        class="w-full p-2.5  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    <div id="search-results-for-{{ $item }}"
        class="absolute z-50 w-[{{ $dropdownBarSize }}] mt-1 bg-white rounded-lg shadow-lg hidden">
        <ul id="results-list-for-{{ $item }}" class="max-h-60 overflow-auto"></ul>
        <div id="no-results-for-{{ $item }}" class="p-4 text-gray-500 hidden">No results found.</div>
    </div>
</div>
