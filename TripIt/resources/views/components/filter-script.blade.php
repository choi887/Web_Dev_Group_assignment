<script>
    $(document).ready(function() {
        function updateEvents() {
            var formData = $('#filter_form_event').serialize();
            $.ajax({
                url: "{{ route('event-list') }}",
                type: 'GET',
                data: formData,
                success: function(response) {
                    $('#event-list-container').html(response);
                },
                error: function(xhr) {
                    console.log('Error:', xhr);
                }
            });
        }

        // Trigger update on form input change
        $('#filter_form_event input').on('change', function() {
            updateEvents();
        });

        // Prevent default form submission
        $('#filter_form_event').on('submit', function(e) {
            e.preventDefault();
            updateEvents();
        });
    });
</script>
