<form id="form_create" method="POST" action="{{ route('package.add') }}" enctype="multipart/form-data">
    @csrf
    <div class="space-y-12">
        <!-- form info start -->
        <!-- filling in info start -->
        <div class="border-b border-gray-900/10 pb-12 ">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Package Details</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">The Information you enter will be available for our customers
                to purchase please key in the right info according to this form.
            </p>
            <!-- form info end -->
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-8">
                <div class="sm:col-span-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-black">Package Name</label>
                    <div class="mt-2">
                        <input type="text" name="name" id="name"
                            class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                            placeholder="Type Package name" required="">
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="price" class="block mb-2 text-sm font-medium text-black">Price</label>
                    <input type="number" name="price" id="price"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                        required="" min="0" step=".01" pattern="^\d+(\.\d{1,2})?$"
                        oninput="validateDecimal(this)" placeholder="Example: 1000.50">
                </div>
                <div class="sm:col-span-4">
                    <label for="phone_number" class="block mb-2 text-sm font-medium text-black">Phone
                        Number
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
                <div class="col-span-full">
                    <label for="description" class="block mb-2 text-sm font-medium text-black">Description</label>
                    <textarea id="description" rows="4" name="description"
                        class="block p-2.5 w-full text-sm text-black  rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                        placeholder="Write product description here" maxlength="5000"></textarea>
                </div>
            </div>
        </div>
        <!-- choosing event start -->
        <div class="border-b border-gray-900/10 pb-12">
            <div class="flex w-full justify-between ">
                <div>
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Adding Events to your Package</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600 mb-4">Click the button to add more events</p>
                </div>
                <div><button data-modal-target="packageModal" data-modal-toggle="packageModal"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-all"
                        type="button">
                        Add an Event
                    </button>
                </div>
            </div>


            <div class="flex flex-wrap justify-between"><x-package-modal /></div>
            <p class="mt-1 text-sm leading-6 text-gray-600 mb-4">Selected Events are listed below : </p>
            <div id="selected-events-container" class="my-4"></div>
            <input type="hidden" id="selected_events" name="selected_events">
            <!-- choosing event end -->
        </div>
        <!-- filling in info end -->
        <div class="border-b border-gray-900/10 pb-12  ">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Insert Image for Package</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600 mb-1">Insert your images here for your package</p>
            <!-- cover image start -->
            <div class="col-span-full">
                <label for="file-upload" class="block text-sm font-medium leading-6 text-gray-900">Cover
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
        </div>
    </div>
    <!-- form input end -->
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button id="cancelButton" type="button"
            class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
        <button id="submitButton" type="submit"
            class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        <div id="spinner" role="status"
            class="overlay hidden fixed min-h-screen min-w-full flex justify-center items-center  -translate-x-1/2 -translate-y-1/2 top-2/4 left-1/2">
            <svg aria-hidden="true" class="w-10 h-10 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                    fill="currentColor" />
                <path
                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                    fill="currentFill" />
            </svg>
        </div>
    </div>
</form>
