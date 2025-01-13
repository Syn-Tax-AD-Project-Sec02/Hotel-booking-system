<!DOCTYPE html>
<html lang="en">

<x-headers.header_admin />

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <x-navbar />
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <x-sidebar />
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <x-breadcrumbs title="Dashboard" subtitle="Booking" />
                    </div>

                    <div class="col-lg-12 stretch-card">
                        <div class="card">
                            <div class="card-body ">
                                <div class="filter-section ">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="btn-group">
                                            <button class="btn btn-outline-primary active">All rooms (6)</button>
                                            <button class="btn btn-outline-primary">Single</button>
                                            <button class="btn btn-outline-primary">Standard</button>
                                            <button class="btn btn-outline-primary">Deluxe</button>
                                            <button class="btn btn-outline-primary">Scholar</button>
                                            <button class="btn btn-outline-primary">Suite</button>
                                        </div>
                                    </div>
                                    @section('content')
                                        <form class="row g-3 align-items-center">
                                            <div class="col-md-3">
                                                <label for="checkIn" class="form-label">Check in</label>
                                                <input type="date" class="form-control" id="checkIn">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="checkOut" class="form-label">Check out</label>
                                                <input type="date" class="form-control" id="checkOut">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="adults" class="form-label">Adults</label>
                                                <input type="number" class="form-control" id="adults" value="1"
                                                    min="1">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="children" class="form-label">Children</label>
                                                <input type="number" class="form-control" id="children" value="0"
                                                    min="0">
                                            </div>
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary">Check availability</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body ">
                                        <!-- Display success message -->
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        <!-- Display error message -->
                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif

                                        <!-- Display validation errors -->
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class=" d-flex justify-content-between align-items-center">
                                            <h4 class="card-title">All Booking</h4>
                                            <button type="button" class="btn btn-primary btn-rounded shadow"
                                                style="padding: 15PX;" data-bs-toggle="modal" data-bs-target="#modalBooking"
                                                data-bs-whatever="@mdo">Add
                                                Booking</button>
                                            <div class="modal fade" id="modalBooking" tabindex="-1"
                                                aria-labelledby="modalBookingLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content" style="background-color: white;">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalBookingLabel">Add Room</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('bookingListsForm') }}" method="POST"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="mb-4">
                                                                    <label for="FormControlName"
                                                                        class="form-label">Name</label>
                                                                    <input type="text" class="form-control"
                                                                        name="Name" placeholder="Name" aria-label="Name">
                                                                </div>

                                                                <div class="row mb-4">
                                                                    <div class="col-md-6">
                                                                        <label for="FormControlCheckIn"
                                                                            class="form-label">Check-In</label>
                                                                        <input type="date" class="form-control"
                                                                            name="CheckIn" id="CheckIn"
                                                                            placeholder="Check-In" aria-label="CheckIn">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="FormControlCheckOut"
                                                                            class="form-label">Check-Out</label>
                                                                        <input type="date" class="form-control"
                                                                            name="CheckOut" id="CheckOut"
                                                                            placeholder="Check-Out" aria-label="CheckOut">
                                                                    </div>
                                                                </div>

                                                                <div class="mb-4">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Type of Room</label>
                                                                    <select class="form-select"
                                                                        style="height:43px; font-size: 12px;"
                                                                        name="TypeRoom" id="TypeRoom">
                                                                        <option selected>Choose...</option>
                                                                        <option value="Single">Single</option>
                                                                        <option value="Standard">Standard</option>
                                                                        <option value="Deluxe">Deluxe</option>
                                                                        <option value="Scholars">Scholars</option>
                                                                        <option value="Suite">Suite</option>
                                                                    </select>
                                                                </div>

                                                                <div class="mb-4">
                                                                    <label for="FormControlName" class="form-label">Room
                                                                        No</label>
                                                                    <select class="form-control form-select"
                                                                        style="height:43px; font-size: 12px;"
                                                                        name="RoomNo" id="roomNoSelect">
                                                                        <option selected>Choose Room No</option>
                                                                        <!-- Room numbers will be dynamically populated here -->
                                                                    </select>
                                                                </div>

                                                                <div class="row mb-4">
                                                                    <div class="col-md-6">
                                                                        <label for="FormControlCheckIn"
                                                                            class="form-label">Adults</label>
                                                                        <input type="text" class="form-control"
                                                                            name="Adults" id="Adults"
                                                                            placeholder="Adults" aria-label="Adults">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="FormControlCheckOut"
                                                                            class="form-label">Children</label>
                                                                        <input type="text" class="form-control"
                                                                            name="Children" id="Children"
                                                                            placeholder="Children" aria-label="Children">
                                                                    </div>
                                                                </div>




                                                                <div class="mb-4">
                                                                    <label for="FormControlName"
                                                                        class="form-label">Phone</label>
                                                                    <input type="text" class="form-control"
                                                                        name="Phone" placeholder="Phone"
                                                                        aria-label="Phone">
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-rounded">Add</button>
                                                            <button type="button" class="btn btn-secondary btn-rounded"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        </p>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Booking ID</th>
                                                    <th>Name</th>
                                                    <th>Room No</th>
                                                    <th>Room Type</th>
                                                    <th>Check-In</th>
                                                    <th>Check-Out</th>
                                                    <th>Guest</th>
                                                    <th>Phone</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($bookings as $booking)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $booking->BookingID }}</td>
                                                        <td>{{ $booking->Name }}</td>
                                                        <td>{{ $booking->TypeRoom }}</td>
                                                        <td>{{ $booking->RoomNo }}</td>
                                                        <td>{{ $booking->CheckIn }}</td>
                                                        <td>{{ $booking->CheckOut }}</td>
                                                        <td>{{ $booking->Adults }} Adults {{ $booking->Children }}
                                                            Children</td>
                                                        <td>{{ $booking->Phone }}</td>


                                                        <td>
                                                            <!-- Dropdown Trigger -->
                                                            <a class="nav-link" id="dropdownMenuIconButton1"
                                                                href="#" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="mdi mdi-dots-vertical"></i>
                                                            </a>

                                                            <!-- Dropdown Menu -->
                                                            <div class="dropdown-menu navbar-dropdown"
                                                                aria-labelledby="dropdownMenuIconButton1">
                                                                <!-- Edit Option -->
                                                                <a class="dropdown-item" href="#"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modalBookingU{{ $booking->id }}">
                                                                    <i class="mdi mdi-pencil me-2 text-info"></i> Edit
                                                                </a>

                                                                <!-- Divider -->
                                                                <div class="dropdown-divider"></div>

                                                                <!-- Receipt Option -->
                                                                    <a class="dropdown-item" href="#"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modalReceipt{{ $booking->id }}">
                                                                    <i class="mdi mdi-receipt-text me-2 text-success"></i> Receipt
                                                                </a>

                                                                <!-- Divider -->
                                                                <div class="dropdown-divider"></div>

                                                                <!-- Delete Option -->
                                                                <!-- Delete Option -->
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    onclick="event.preventDefault(); document.getElementById('deleteRoomForm{{ $booking->_id }}').submit();">
                                                                    <i class="mdi mdi-delete me-2 text-danger"></i> Delete
                                                                </a>

                                                                <form id="deleteRoomForm{{ $booking->_id }}"
                                                                    action="{{ route('deleteBookingList') }}"
                                                                    method="POST" style="display: none;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="hidden" name="booking_id"
                                                                        value="{{ $booking->_id }}">
                                                                    <!-- Pass the room's _id -->
                                                                </form>
                                                            </div>

                                                            <!-- Modal (Place Outside Dropdown Menu) -->
                                                            <div class="modal fade" id="modalBookingU{{ $booking->id }}"
                                                                tabindex="-1"
                                                                aria-labelledby="modalBookingU{{ $booking->id }}Label"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content"
                                                                        style="background-color: white;">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="modalBookingU{{ $booking->id }}Label">
                                                                                Edit Room</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form
                                                                                action="{{ route('updateBookingList') }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <input type="hidden" name="booking_id"
                                                                                    value="{{ $booking->id }}">

                                                                                <!-- Name -->
                                                                                <div class="mb-4">
                                                                                    <label for="Name{{ $booking->id }}"
                                                                                        class="form-label">Name</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="Name"
                                                                                        id="Name{{ $booking->id }}"
                                                                                        value="{{ $booking->Name }}">
                                                                                </div>

                                                                                <!-- Check-In and Check-Out -->
                                                                                <div class="row mb-4">
                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="CheckIn{{ $booking->id }}"
                                                                                            class="form-label">Check-In</label>
                                                                                        <input type="date"
                                                                                            class="form-control"
                                                                                            name="CheckIn"
                                                                                            id="CheckIn{{ $booking->id }}"
                                                                                            value="{{ $booking->CheckIn }}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="CheckOut{{ $booking->id }}"
                                                                                            class="form-label">Check-Out</label>
                                                                                        <input type="date"
                                                                                            class="form-control"
                                                                                            name="CheckOut"
                                                                                            id="CheckOut{{ $booking->id }}"
                                                                                            value="{{ $booking->CheckOut }}">
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Type of Room -->
                                                                                <div class="mb-4">
                                                                                    <label
                                                                                        for="TypeRoom{{ $booking->id }}"
                                                                                        class="form-label">Type of
                                                                                        Room</label>
                                                                                    <select class="form-select"
                                                                                        name="TypeRoom"
                                                                                        style="height:43px; font-size: 12px;"
                                                                                        id="TypeRoom{{ $booking->id }}">
                                                                                        <option value="Single"
                                                                                            {{ $booking->TypeRoom == 'Single' ? 'selected' : '' }}>
                                                                                            Single</option>
                                                                                        <option value="Standard"
                                                                                            {{ $booking->TypeRoom == 'Standard' ? 'selected' : '' }}>
                                                                                            Standard</option>
                                                                                        <option value="Deluxe"
                                                                                            {{ $booking->TypeRoom == 'Deluxe' ? 'selected' : '' }}>
                                                                                            Deluxe</option>
                                                                                        <option value="Scholars"
                                                                                            {{ $booking->TypeRoom == 'Scholars' ? 'selected' : '' }}>
                                                                                            Scholars</option>
                                                                                        <option value="Suite"
                                                                                            {{ $booking->TypeRoom == 'Suite' ? 'selected' : '' }}>
                                                                                            Suite</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="mb-4">
                                                                                    <label for="RoomNo{{ $booking->id }}"
                                                                                        class="form-label">Room No</label>
                                                                                    <select
                                                                                        class="form-control form-select"
                                                                                        style="height:43px; font-size: 12px;"
                                                                                        name="RoomNo"
                                                                                        id="roomNoSelect{{ $booking->id }}"
                                                                                        data-current-room-no="{{ $booking->RoomNo }}">
                                                                                        <option
                                                                                            value="{{ $booking->RoomNo }}"
                                                                                            selected>{{ $booking->RoomNo }}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>


                                                                                <div class="row mb-4">
                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="Adults{{ $booking->id }}"
                                                                                            class="form-label">Adults</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            name="Adults"
                                                                                            id="Adults{{ $booking->id }}"
                                                                                            value="{{ $booking->Adults }}">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="Children{{ $booking->id }}"
                                                                                            class="form-label">Children</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            name="Children"
                                                                                            id="Children{{ $booking->id }}"
                                                                                            value="{{ $booking->Children }}">
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Phone -->
                                                                                <div class="mb-4">
                                                                                    <label for="Phone{{ $booking->id }}"
                                                                                        class="form-label">Phone</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="Phone"
                                                                                        id="Phone{{ $booking->id }}"
                                                                                        value="{{ $booking->Phone }}">
                                                                                </div>



                                                                                <div class="modal-footer">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Save</button>
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-bs-dismiss="modal">Close</button>
                                                                                </div>

                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Receipt Modal -->
                                                            <div class="modal fade" id="modalReceipt{{ $booking->id }}" tabindex="-1" aria-labelledby="modalReceiptLabel{{ $booking->id }}" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content" style="background-color: #fff; border-radius: 10px; overflow: hidden;">
                                                                        <div class="modal-header" style="background-color: #f8f9fa; border-bottom: 1px solid #ddd;">
                                                                            <h5 class="modal-title fw-bold" id="modalReceiptLabel{{ $booking->id }}">
                                                                                Receipt for Booking #{{ $booking->BookingID }}
                                                                            </h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body" id="receiptContent{{ $booking->id }}" style="padding: 20px; font-family: Arial, sans-serif;">
                                                                            <!-- Receipt Content -->
                                                                            <div class="receipt" style="max-width: 600px; margin: 0 auto; border: 1px solid #ddd; border-radius: 10px; padding: 20px; background-color: #fdfdfd; box-shadow: 0px 4px 8px rgba(0,0,0,0.1);">
                                                                                <!-- Header -->
                                                                                <div style="text-align: center; margin-bottom: 20px;">
                                                                                    <h4 style="margin: 0; font-size: 18px; color: #333;">Customer Receipt</h4>
                                                                                    <p style="margin: 0; font-size: 12px; color: #777;">Your reservation is now confirmed</p>
                                                                                </div>
                                                                                <!-- Guest Details -->
                                                                                <div style="margin-bottom: 20px;">
                                                                                    <p style="margin: 5px 0; font-size: 14px;"><strong>Guest:</strong> {{ $booking->Name }}</p>
                                                                                    <p style="margin: 5px 0; font-size: 14px;"><strong>Phone Number:</strong> {{ $booking->Phone }}</p>
                                                                                </div>
                                                                                <!-- Booking Details -->
                                                                                <div style="margin-bottom: 20px;">
                                                                                    <table style="width: 100%; font-size: 14px; color: #333;">
                                                                                        <tr>
                                                                                            <td><strong>Check-In:</strong></td>
                                                                                            <td style="text-align: right;">{{ $booking->CheckIn }}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><strong>Check-Out:</strong></td>
                                                                                            <td style="text-align: right;">{{ $booking->CheckOut }}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><strong>Room Type:</strong></td>
                                                                                            <td style="text-align: right;">{{ $booking->TypeRoom }}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><strong>Room No:</strong></td>
                                                                                            <td style="text-align: right;">{{ $booking->RoomNo }}</td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                                <!-- Price Details -->
                                                                                <div style="margin-bottom: 20px; border-top: 1px solid #ddd; padding-top: 15px;">
                                                                                    <table style="width: 100%; font-size: 14px; color: #333;">
                                                                                        <tr>
                                                                                            <td><strong>Price Per Night:</strong></td>
                                                                                            <td style="text-align: right;">
                                                                                                <!-- Fetch Rate from the $rooms collection -->
                                                                                                RM{{ $room[$booking->TypeRoom]->Rate ?? 'N/A' }}
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><strong>Service Tax (6%):</strong></td>
                                                                                            <td style="text-align: right;">RM</td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                                <!-- Total -->
                                                                                <div style="border-top: 2px solid #333; padding-top: 10px;">
                                                                                    <table style="width: 100%; font-size: 16px; font-weight: bold; color: #333;">
                                                                                        <tr>
                                                                                            <td>Total:</td>
                                                                                            <td style="text-align: right;">RM{{ $booking->TotalPrice }}</td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer" style="background-color: #f8f9fa; border-top: 1px solid #ddd;">
                                                                            <!-- Print Button -->
                                                                            <button type="button" class="btn btn-success" onclick="printReceipt('receiptContent{{ $booking->id }}')">
                                                                                Print
                                                                            </button>
                                                                            <!-- Download Button -->
                                                                            <button type="button" class="btn btn-primary" onclick="downloadPDF('receiptContent{{ $booking->id }}', 'Receipt_{{ $booking->id }}')">
                                                                                Download PDF
                                                                            </button>
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            
                                                        </td>
                                                    </tr>
                                                    @section('content')
                                                    @endforeach


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content-wrapper ends -->
                        <!-- partial:../../partials/_footer.html -->
                        <x-footers.footer />
                        <!-- partial -->
                    </div>
                    <!-- main-panel ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            <script src="{{ asset('dist/assets/vendors/js/vendor.bundle.base.js') }}"></script><!-- endinject -->
            <!-- Plugin js for this page -->
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <!-- endinject -->
            <script>
                $(document).ready(function() {
                    $('#TypeRoom').on('change', function() {
                        const roomType = $(this).val(); // Selected room type
                        const checkIn = $('#CheckIn').val(); // Check-In date
                        const checkOut = $('#CheckOut').val(); // Check-Out date

                        if (validateDates(checkIn, checkOut)) {
                            filterRoomNumbers(roomType, checkIn, checkOut);
                        } else {
                            alert('Please ensure Check-In and Check-Out dates are valid.');
                        }
                    });

                    // Attach dynamic event for multiple room types
                    $('[id^=TypeRoom]').on('change', function() {
                        const roomType = $(this).val(); // Selected room type
                        const bookingId = $(this).attr('id').replace('TypeRoom', ''); // Extract booking ID
                        updateFilterRoomNumbers(roomType, bookingId);
                    });

                    // Populate room numbers on page load
                    $('[id^=TypeRoom]').each(function() {
                        const roomType = $(this).val(); // Selected room type
                        const bookingId = $(this).attr('id').replace('TypeRoom', ''); // Extract booking ID
                        updateFilterRoomNumbers(roomType, bookingId);
                    });

                    // Function to validate dates
                    function validateDates(checkIn, checkOut) {
                        if (!checkIn || !checkOut) return false; // Both dates must be selected

                        const checkInDate = new Date(checkIn);
                        const checkOutDate = new Date(checkOut);

                        return checkInDate < checkOutDate; // Check-In must be before Check-Out
                    }

                    // Function to filter room numbers for a specific booking ID
                    function updateFilterRoomNumbers(roomType, bookingId) {
                        $.ajax({
                            url: "{{ route('getRoomsByType') }}", // Route to the controller
                            type: 'POST',
                            data: {
                                _token: "{{ csrf_token() }}", // CSRF token
                                typeRoom: roomType // Selected room type
                            },
                            success: function(response) {
                                console.log('Response:', response); // Debug response

                                const roomNoSelect = $(`#roomNoSelect${bookingId}`);
                                roomNoSelect.empty(); // Clear existing options

                                if (response.rooms && response.rooms.length > 0) {
                                    response.rooms.forEach(room => {
                                        roomNoSelect.append(
                                            `<option value="${room.RoomNo}">${room.RoomNo}</option>`
                                        );
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

                    // Function to filter room numbers for the main dropdown
                    function filterRoomNumbers(roomType, checkIn, checkOut) {
                        $.ajax({
                            url: "{{ route('getRoomsByType') }}", // Route to the controller
                            type: 'POST',
                            data: {
                                _token: "{{ csrf_token() }}", // CSRF token
                                typeRoom: roomType, // Selected room type
                                checkIn: checkIn, // Check-In date
                                checkOut: checkOut // Check-Out date
                            },
                            success: function(response) {
                                console.log('Response:', response); // Debug response

                                const roomNoSelect = $('#roomNoSelect');
                                roomNoSelect.empty(); // Clear existing options
                                roomNoSelect.append(
                                    '<option selected>Choose Room No</option>'); // Default option

                                if (response.rooms && response.rooms.length > 0) {
                                    response.rooms.forEach(room => {
                                        roomNoSelect.append(
                                            `<option value="${room.RoomNo}">${room.RoomNo}</option>`
                                        );
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
                });

                function printReceipt(elementId) {
        var content = document.getElementById(elementId).innerHTML;
        var originalContent = document.body.innerHTML;
        document.body.innerHTML = content;
        window.print();
        document.body.innerHTML = originalContent;
    }

                // Function to download the receipt as a PDF
                function downloadPDF(elementId, filename) {
                    var element = document.getElementById(elementId);
                    var opt = {
                        margin:       1,
                        filename:     filename + '.pdf',
                        image:        { type: 'jpeg', quality: 0.98 },
                        html2canvas:  { scale: 2 },
                        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
                    };
                    html2pdf().from(element).set(opt).save();
                }
            </script>
            <script src="{{ asset('dist/assets/js/off-canvas.js') }}"></script>
            <script src="{{ asset('dist/assets/js/misc.js') }}"></script>
            <script src="{{ asset('dist/assets/js/settings.js') }}"></script>
            <script src="{{ asset('dist/assets/js/todolist.js') }}"></script>
            <script src="{{ asset('dist/assets/js/jquery.cookie.js') }}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>


            <!-- Custom js for this page -->
            <!-- End custom js for this page -->
        </body>

        </html>
