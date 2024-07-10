<script>
    $(document).ready(function() {
        const searchInput = $('#search-input-{{ $item }}');
        const searchResults = $('#search-results-for-{{ $item }}');
        const resultsList = $('#results-list-for-{{ $item }}');
        const noResults = $('#no-results-for-{{ $item }}');

        searchInput.on('input', function() {
            const query = $(this).val().trim();

            if (query.length === 0) {
                searchResults.addClass('hidden');
                return;
            }

            $.ajax({
                url: '{{ $route }}',
                method: 'GET',
                data: {
                    query: query
                },
                success: function(data) {
                    resultsList.empty();
                    if (data.length > 0) {
                        data.forEach(function(category) {
                            resultsList.append(`
                            <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">${category.company}</li>
                        `);
                        });
                        resultsList.removeClass('hidden');
                        noResults.addClass('hidden');
                    } else {
                        resultsList.addClass('hidden');
                        noResults.removeClass('hidden');
                    }
                    searchResults.removeClass('hidden');
                },
                error: function(xhr, status, error) {
                    console.error("An error occurred: " + error);
                }
            });
        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('#search-container-for-{{ $item }}').length) {
                searchResults.addClass('hidden');
            }
        });

        resultsList.on('click', 'li', function() {
            searchInput.val($(this).text());
            searchResults.addClass('hidden');
        });
    });
</script>
