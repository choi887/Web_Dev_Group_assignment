<form method="POST" action="{{ route('event.add') }}" enctype="multipart/form-data">
    @csrf
    <div class="space-y-12">
        <!-- form info start -->
        <!-- filling in info start -->
        <div class="border-b border-gray-900/10 pb-12 ">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Event Details</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">The Information you enter will be available for our customers
                to purchase please key in the right info according to this form.</p>
            <!-- form info end -->
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-8">
                <div class="sm:col-span-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-black">name</label>
                    <div class="mt-2">
                        <input type="text" name="name" id="name"
                            class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                            placeholder="Type Event name" required="">
                    </div>
                </div>
                <!-- name end -->
                <div class="sm:col-span-4">
                    <label for="phone_number" class="block mb-2 text-sm font-medium text-black">phone
                        number
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-black " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 19 18">
                                <path
                                    d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
                            </svg>
                        </div>
                        <input type="text" id="phone_number" name="phone_number"
                            class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 sm:w- "
                            placeholder="123-456-7890" required />
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="price" class="block mb-2 text-sm font-medium text-black">price</label>
                    <input type="number" name="price" id="price"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                        required="" min="0" step=".01" pattern="^\d+(\.\d{1,2})?$"
                        oninput="validateDecimal(this)" placeholder="Example: 1000.50">
                </div>
                <!-- phone end -->
                <x-category-dropdown />
                <!-- dropdown end -->
                <!-- checkboxes start -->
                <div class="col-span-full flex justify-between">
                    <div class="sm:col-span-2">
                        <input type="hidden" name="food" value="0">
                        <input id="food-checkbox" type="checkbox" name="food" value="1"
                            class="w-4 h-4 text-blue-600  border-gray-300 rounded focus:ring-blue-600 focus:ring-1 ">
                        <label for="food" class="ms-2 text-sm font-medium text-gray-900 ">food provided</label>
                    </div>
                    <div class="sm:col-span-2">
                        <input type="hidden" name="transportation" value="0">
                        <input id="transportation-checkbox" type="checkbox" name="transportation" value="1"
                            class="w-4 h-4 text-blue-600  border-gray-300 rounded focus:ring-blue-600 focus:ring-1 ">
                        <label for="transportation" class="ms-2 text-sm font-medium text-gray-900 ">transportation
                            provided</label>
                    </div>
                    <div class="sm:col-span-2">
                        <input type="hidden" name="lodging" value="0">
                        <input id="lodging-checkbox" type="checkbox" name="lodging" value="1"
                            class="w-4 h-4 text-blue-600  border-gray-300 rounded focus:ring-blue-600 focus:ring-1 ">
                        <label for="lodging" class="ms-2 text-sm font-medium text-gray-900 ">lodging
                            provided</label>
                    </div>
                </div>
                <!--checkboxes end -->
                <div class="col-span-full">
                    <label for="description" class="block mb-2 text-sm font-medium text-black">description</label>
                    <textarea id="description" rows="4" name="description"
                        class="block p-2.5 w-full text-sm text-black  rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                        placeholder="Write product description here" maxlength="5000"></textarea>
                </div>
            </div>
        </div>
        <!-- filling in info end -->
        <div class="border-b border-gray-900/10 pb-12 ">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Insert Image for Event</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Insert your images here for your events</p>
            <!-- cover image start -->
            <div class="col-span-full">
                <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover
                    photo</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center mx-2">
                        <svg id="image_upload_svg" class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="mt-4">
                            <img id="image-preview" class="mx-auto h-40 w-40 object-cover rounded-md" src=""
                                alt="Image Preview" hidden>
                        </div>
                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                            <label for="file-upload"
                                class="relative cursor-pointer rounded-md bg-white font-semibold text-blue-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2 hover:text-blue-500">
                                <span>Upload a file</span>
                                <input id="file-upload" name="cover_image" type="file" class="sr-only"
                                    accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>

                    </div>
                </div>
            </div>
            <!-- cover image end -->
            <!-- Multiple Images Upload Section start -->
            <div class="col-span-full mt-4">
                <label for="multiple-photos" class="block text-sm font-medium leading-6 text-gray-900">Upload
                    Additional Images </label>
                <!-- show uploaded img start -->
                <div class="col-span-full">
                    <div id="multiple-image-preview" class="my-4 flex flex-grow flex-wrap gap-2"></div>
                </div>
                <!-- show uploaded img end -->
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                        <svg id="svgIcon" class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                            <label for="multiple-file-upload"
                                class="relative cursor-pointer rounded-md bg-white font-semibold text-blue-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2 hover:text-blue-500">
                                <span>Upload files</span>
                                <input id="multiple-file-upload" name="multiple_file_upload[]" type="file"
                                    class="sr-only"accept="image/x-png,image/gif,image/jpeg,image/jpg" required
                                    multiple>
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB each</p>
                    </div>
                </div>

            </div>
            <!-- Multiple Images Upload Section end -->
        </div>
        <!-- form input end -->
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button id="cancelButton" type="button"
            class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
        <button type="submit"
            class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
</form>
