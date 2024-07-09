<div class="rounded-xl border bg-gradient-to-r from-sky-500 to-blue-600 shadow-xl border-grey-100">
    <div class="p-8 flex flex-col justify-between">

        <h4 class="font-semibold text-lg text-white leading-tight ">
            Create a new {{ $entityName }}
        </h4>
        <div class="text-white font-small mt-1">
            {{ $text }}
        </div>
        <div class="w-full flex justify-center pt-4 pr-10">
            <button type="button" id="create{{ $entityName }}ModalButton"
                data-modal-target="create{{ $entityName }}Modal" data-modal-toggle="create{{ $entityName }}Modal"
                class="flex items-center justify-center text-white border border-white hover:bg-primary-800 focus:ring-2 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 ">
                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                </svg>
                Add {{ $entityName }}
            </button>
        </div>
    </div>
</div>
