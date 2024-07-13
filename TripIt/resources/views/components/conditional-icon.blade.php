<span class="bg-blue-100 text-blue-800 text-sm font-large me-2 px-2.5 py-0.5 rounded flex items-center">
    @if ($condition)
        <!-- Tick icon -->
        <svg class="fill-current text-green-500 w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
                d="M16.707 4.293a1 1 0 0 0-1.414 0L8 11.586 4.707 8.293a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.414 0l8-8a1 1 0 0 0 0-1.414z" />
        </svg>
    @else
        <!-- Slash icon -->
        <svg class="fill-current text-red-500 w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
                d="M10 2a8 8 0 1 0 8 8 8 8 0 0 0-8-8zm3.707 11.293a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 1 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10z" />
        </svg>
    @endif
    {{ $text }}
</span>
