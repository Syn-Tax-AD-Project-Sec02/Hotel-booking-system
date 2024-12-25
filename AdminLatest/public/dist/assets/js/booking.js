$(document).ready(function () {
    // Trigger the function to update room numbers when the "Type of Room" dropdown changes
    $('#TypeRoom').on('change', function () {
        const roomType = $(this).val();  // Get the selected room type
        filterRoomNumbers(roomType);     // Call function to filter room numbers
    });

    // Initial call to populate room numbers for the selected room type on page load
    const initialRoomType = $('#TypeRoom').val();
    filterRoomNumbers(initialRoomType);
});

function filterRoomNumbers(roomType) {
    $.ajax({
        url: "{{ route('getRoomsByType') }}",  // Ensure your route is correct
        type: 'POST',
        data: {
            _token: "{{ csrf_token() }}", // Fetch CSRF token from the meta tag
            typeRoom: roomType              // Pass the selected room type
        },
        success: function(response) {
            console.log('Response:', response); // Log response for debugging

            const roomNoSelect = $('#roomNoSelect');
            roomNoSelect.empty();  // Clear the existing options
            roomNoSelect.append('<option selected>Choose Room No</option>');  // Default option

            // Check if rooms exist in the response and append them
            if (response.rooms && response.rooms.length > 0) {
                response.rooms.forEach(room => {
                    roomNoSelect.append(`<option value="${room.RoomNo}">${room.RoomNo}</option>`);
                });
            } else {
                roomNoSelect.append('<option>No rooms available for this type</option>');
            }
        },
        error: function(error) {
            console.error('Error fetching room numbers:', error);
        }
    });
}