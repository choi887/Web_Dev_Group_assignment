<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $titleName }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}">
    <link rel="icon" href="{{ asset('images/download.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen ">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <script>
        var successMessage = document.getElementById('sucessMessage');
        var errorMessage = document.getElementById('errorMessage');
        if (successMessage) {
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000);
        }
        if (errorMessage) {
            setTimeout(function() {
                document.getElementById('errorMessage').style.display = 'none';
            }, 5000);
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const eventForm = document.getElementById('form_create');
            const submitButton = document.getElementById('submitButton');
            const spinner = document.getElementById('spinner');

            eventForm.addEventListener('submit', function(e) {

                // Show spinner and disable the button
                spinner.classList.remove('hidden');
                submitButton.disabled = true;

                // Timeout to hide spinner after 5 seconds
                setTimeout(() => {
                    spinner.classList.add('hidden');
                    submitButton.disabled = false;
                }, 20000);
            });
        });
    </script>
    <script>
        var loadFile = function(event) {
            var input = event.target;
            var file = input.files[0]; // always the first file
            var output = document.getElementById('previewImage');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // to free memory
            }
        }
    </script>

    <script>
        document.getElementById('file-upload').addEventListener('change', function(event) {
            const file = event.target.files[0]; // keep targeting the first one only
            const preview = document.getElementById('image-preview');
            const svg = document.getElementById('image_upload_svg');
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.hidden = false;
                    svg.style.display = 'none';
                }
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
                preview.hidden = true;
            }


        });
    </script>
    <script>
        document.getElementById('multiple-file-upload').addEventListener('change', function(event) {
            const files = event.target.files;
            const previewContainer = document.getElementById('multiple-image-preview');
            const svgIcon = document.getElementById('svgIcon');

            if (files.length > 0) {
                svgIcon.style.display = 'none';
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = ' h-32 w-32 object-cover rounded-md';
                        previewContainer.appendChild(img);
                    }
                    reader.readAsDataURL(file);
                }
            }
        });
    </script>
    <!-- date disable script start -->
    <script>
        document.getElementById('start_date').addEventListener('change', function() {
            const startDate = this.value;
            const endDateInput = document.getElementById('end_date');

            // Set the minimum date for the end date input
            endDateInput.min = startDate;
        });
    </script>
    <!-- date disable script end -->
    <script>
        document.getElementById('cancelButton').addEventListener('click', function() {
            location.reload();
        });
    </script>
    <script>
        function validateDecimal(input) {
            const value = input.value;
            const regex = /^\d+(\.\d{0,2})?$/;

            if (!regex.test(value)) {
                input.value = value.slice(0, -1);
            }
        }
    </script>
    <!-- scripts for category start -->
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const dropdownButton = document.getElementById('dropdownButton');
            const dropdownMenu = document.getElementById('dropdownMenu');
            const categoryInput = document.getElementById('category');

            dropdownButton.addEventListener('click', (event) => {
                event.preventDefault();
                dropdownMenu.classList.toggle(
                    'hidden'); // if hidden and add hidden again it will overwrite and not be hidden
            });

            document.querySelectorAll('#dropdownMenu li').forEach(item => {
                item.addEventListener('click', (event) => {
                    dropdownButton.textContent = item.textContent;
                    categoryInput.value = item.getAttribute('data-value');
                    dropdownMenu.classList.add('hidden');
                });
            });

            document.addEventListener('click', (event) => {
                if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>
    <!-- scripts for category end -->
    <!-- scripts for package start -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chooseEventButtons = document.querySelectorAll('.choose-event-button');
            const selectedEventsInput = document.getElementById('selected_events');
            const selectedEventsContainer = document.getElementById('selected-events-container');

            // This will store the selected events as an array of objects
            let selectedEvents = [];
            // Configure Toastr options (optional)
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            chooseEventButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const eventName = this.getAttribute('data-event-name');

                    // Check if the event is already selected
                    const eventExists = selectedEvents.find(event => event.name == eventName);
                    if (!eventExists) {
                        // Add the selected event to the array
                        selectedEvents.push({
                            name: eventName
                        });

                        // Update the hidden input field with the JSON string of selected events
                        selectedEventsInput.value = JSON.stringify(
                            selectedEvents); // remember to decode at contoller
                        selectedEventsContainer.innerHTML = ''; //clears any previous field
                        selectedEvents.forEach(
                            event => { // Loops through selectedEvents array and add each event name to the container
                                const eventElement = document.createElement('p');
                                eventElement.textContent = event.name;
                                selectedEventsContainer.appendChild(eventElement);
                            });
                        // Show success notification
                        toastr.success(`${eventName} has been selected.`,
                            'Event Added');
                    } else {
                        toastr.warning(`${eventName} is already selected.`, 'Already Selected');
                    }
                });
            });
        });
    </script>

    <!-- scripts for package end -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</body>

</html>
