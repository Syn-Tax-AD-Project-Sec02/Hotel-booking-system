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
                        <x-breadcrumbs title="Dashboard" subtitle="Room Lists" />
                    </div>

                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Header with Add Room Button -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="card-title">All Rooms</h4>
                                        <button type="button" class="btn btn-primary btn-rounded shadow"
                                            data-bs-toggle="modal" data-bs-target="#modalAddRoom">Add Room</button>
                                    </div>

                                    <!-- Add Room Modal -->
                                    <div class="modal fade" id="modalAddRoom" tabindex="-1"
                                        aria-labelledby="modalAddRoomLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="background-color: white;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalAddRoomLabel">Add Room</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <!-- Add Room Form Fields -->
                                                        <div class="mb-3">
                                                            <label for="roomNo" class="form-label">Room No</label>
                                                            <input type="text"
                                                                class="form-control @error('RoomNo') is-invalid @enderror"
                                                                id="roomNo" name="RoomNo" placeholder="Room No">
                                                            @error('RoomNo')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="roomType" class="form-label">Type of
                                                                Room</label>
                                                            <select
                                                                class="form-select @error('TypeRoom') is-invalid @enderror"
                                                                id="roomType" name="TypeRoom">
                                                                <option value="">Choose...</option>
                                                                <option value="Single">Single</option>
                                                                <option value="Standard">Standard</option>
                                                                <option value="Deluxe">Deluxe</option>
                                                                <option value="Scholars">Scholars</option>
                                                                <option value="Suite">Suite</option>
                                                            </select>
                                                            @error('TypeRoom')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="roomFloor" class="form-label">Room
                                                                Floor</label>
                                                            <select
                                                                class="form-select @error('RoomFloor') is-invalid @enderror"
                                                                id="roomFloor" name="RoomFloor">
                                                                <option value="">Choose...</option>
                                                                <option value="Floor 1">Floor 1</option>
                                                                <option value="Floor 2">Floor 2</option>
                                                                <option value="Floor 3">Floor 3</option>
                                                                <option value="Floor 4">Floor 4</option>
                                                                <option value="Floor 5">Floor 5</option>
                                                            </select>
                                                            @error('RoomFloor')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="roomBlock" class="form-label">Block</label>
                                                            <select
                                                                class="form-select @error('RoomBlock') is-invalid @enderror"
                                                                id="roomBlock" name="RoomBlock">
                                                                <option value="">Choose...</option>
                                                                <option value="U9">U9</option>
                                                                <option value="S46">S46</option>
                                                            </select>
                                                            @error('RoomBlock')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="status" class="form-label">Status</label>
                                                            <select
                                                                class="form-select @error('Status') is-invalid @enderror"
                                                                id="status" name="Status">
                                                                <option value="">Choose...</option>
                                                                <option value="Available">Available</option>
                                                                <option value="Booked">Booked</option>
                                                            </select>
                                                            @error('Status')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
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

                                    <!-- Error/Success Messages -->
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    @if (session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <!-- Filter Buttons -->
                                    <div class="btn-group mb-4" role="group" aria-label="Filter Rooms">
                                        <button class="btn btn-primary btn-filter-active rounded-pill" id="allBtn"
                                            onclick="filterItems('all', this)">
                                            All Rooms ({{ count($rooms) }})
                                        </button>
                                        <button class="btn btn-filter rounded-pill" id="availableBtn"
                                            onclick="filterItems('Available', this)">
                                            Available Rooms ({{ $rooms->where('Status', 'Available')->count() }})
                                        </button>
                                        <button class="btn btn-filter rounded-pill" id="bookedBtn"
                                            onclick="filterItems('Booked', this)">
                                            Booked ({{ $rooms->where('Status', 'Booked')->count() }})
                                        </button>
                                    </div>

                                    <div class=" d-flex justify-content-end">
                                        <label for="filterDate">Select Date:</label>
                                        <input type="date" class="form-control" style="width:150px; height:20px"
                                            id="filterDate" onchange="fetchRoomStatus()" />
                                    </div>


                                    <!-- Room Table -->
                                    <table class="table table-hover" id="roomStatusTable">
                                        <thead>
                                            <tr>
                                                <th>Room No</th>
                                                <th>Room Type</th>
                                                <th>Room Floor</th>
                                                <th>Block</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rooms as $room)
                                                <tr>
                                                    <td>{{ $room->RoomNo }}</td>
                                                    <td>{{ $room->TypeRoom }}</td>
                                                    <td>{{ $room->RoomFloor }}</td>
                                                    <td>{{ $room->Status }}</td>
                                                    <td>
                                                        <span
                                                            class="badge {{ $room->Status == 'Booked' ? 'bg-danger' : 'bg-success' }}">
                                                            {{ $room->Status }}
                                                        </span>
                                                    </td>

                                                    <td>
                                                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="dropdownMenuIconButton1">
                                                            <!-- Edit Option -->
                                                            
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" 
                                                            data-bs-target="#modalEditRoom{{ $room->id }}">
                                                                <i class="mdi mdi-pencil me-2 text-info"></i> Edit
                                                            </a>
                                                            <!-- Divider -->
                                                            <div class="dropdown-divider"></div>
                                                            <!-- Delete Option -->
                                                            <a class="dropdown-item" href="javascript:void(0);"
                                                                onclick="event.preventDefault(); document.getElementById('deleteRoomForm{{ $room->id }}').submit();">
                                                                <i class="mdi mdi-delete me-2 text-danger"></i> Delete
                                                            </a>
                                                            <form id="deleteRoomForm{{ $room->id }}" action="{{ route('deleteRoomList') }}" method="POST" style="display: none;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="hidden" name="room_id" value="{{ $room->id }}">
                                                            </form>
                                                        </div>
                                                        
                                                        <!-- Modal for Editing Room -->
                                                        <div class="modal fade" id="modalEditRoom{{ $room->id }}" tabindex="-1" aria-labelledby="modalEditRoomLabel{{ $room->id }}" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" style="background-color: white;">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="modalBookingU{{ $room->id }}Label">Edit Room</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="POST" action="{{ route('updateRoomList') }}">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <input type="hidden" name="room_id" value="{{ $room->id }}">
                                                                            <div class="modal-body">
                                                                                <!-- Room Number -->
                                                                                <div class="mb-3">
                                                                                    <label for="roomNo" class="form-label">Room No</label>
                                                                                    <input type="text" class="form-control" id="roomNo" name="RoomNo" value="{{ $room->RoomNo }}">
                                                                                </div>
                                                                                <!-- Type of Room -->
                                                                                <div class="mb-3">
                                                                                    <label for="roomType" class="form-label">Type of Room</label>
                                                                                    <select class="form-select" id="roomType" name="TypeRoom">
                                                                                        <option value="Single" {{ $room->TypeRoom == 'Single' ? 'selected' : '' }}>Single</option>
                                                                                        <option value="Standard" {{ $room->TypeRoom == 'Standard' ? 'selected' : '' }}>Standard</option>
                                                                                        <option value="Deluxe" {{ $room->TypeRoom == 'Deluxe' ? 'selected' : '' }}>Deluxe</option>
                                                                                        <option value="Scholars" {{ $room->TypeRoom == 'Scholars' ? 'selected' : '' }}>Scholars</option>
                                                                                        <option value="Suite" {{ $room->TypeRoom == 'Suite' ? 'selected' : '' }}>Suite</option>
                                                                                    </select>
                                                                                </div>
                                                                                <!-- Floor Selection -->
                                                                                <div class="mb-3">
                                                                                    <label for="roomFloor" class="form-label">Room Floor</label>
                                                                                    <select class="form-select" id="roomFloor" name="RoomFloor">
                                                                                        <option value="Floor 1" {{ $room->RoomFloor == 'Floor 1' ? 'selected' : '' }}>Floor 1</option>
                                                                                        <option value="Floor 2" {{ $room->RoomFloor == 'Floor 2' ? 'selected' : '' }}>Floor 2</option>
                                                                                        <option value="Floor 3" {{ $room->RoomFloor == 'Floor 3' ? 'selected' : '' }}>Floor 3</option>
                                                                                        <option value="Floor 4" {{ $room->RoomFloor == 'Floor 4' ? 'selected' : '' }}>Floor 4</option>
                                                                                        <option value="Floor 5" {{ $room->RoomFloor == 'Floor 5' ? 'selected' : '' }}>Floor 5</option>
                                                                                    </select>
                                                                                </div>
                                                                                <!-- Block Selection -->
                                                                                <div class="mb-3">
                                                                                    <label for="roomBlock" class="form-label">Block</label>
                                                                                    <select class="form-select" id="roomBlock" name="RoomBlock">
                                                                                        <option value="U9" {{ $room->RoomBlock == 'U9' ? 'selected' : '' }}>U9</option>
                                                                                        <option value="S46" {{ $room->RoomBlock == 'S46' ? 'selected' : '' }}>S46</option>
                                                                                    </select>
                                                                                </div>
                                                                                <!-- Status Selection -->
                                                                                <div class="mb-3">
                                                                                    <label for="status" class="form-label">Status</label>
                                                                                    <select class="form-select" id="status" name="Status">
                                                                                        <option value="Available" {{ $room->Status == 'Available' ? 'selected' : '' }}>Available</option>
                                                                                        <option value="Booked" {{ $room->Status == 'Booked' ? 'selected' : '' }}>Booked</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-primary">Update</button>
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <!-- Edit Room Modal -->
                                    @foreach ($rooms as $room)
                                        <div class="modal fade" id="modalEditRoom{{ $room->id }}" tabindex="-1"
                                            aria-labelledby="modalEditRoomLabel{{ $room->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="background-color: white;">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="modalEditRoomLabel{{ $room->id }}">Edit Room</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form method="POST" action="{{ route('updateRoomList') }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="room_id"
                                                            value="{{ $room->id }}">
                                                        <div class="modal-body">
                                                            <!-- Room Number -->
                                                            <div class="mb-3">
                                                                <label for="roomNo" class="form-label">Room
                                                                    No</label>
                                                                <input type="text" class="form-control"
                                                                    id="roomNo" name="RoomNo"
                                                                    value="{{ $room->RoomNo }}">
                                                            </div>
                                                            <!-- Type of Room -->
                                                            <div class="mb-3">
                                                                <label for="roomType" class="form-label">Type of
                                                                    Room</label>
                                                                <select class="form-select" id="roomType"
                                                                    name="TypeRoom">
                                                                    <option value="Single"
                                                                        {{ $room->TypeRoom == 'Single' ? 'selected' : '' }}>
                                                                        Single</option>
                                                                    <option value="Standard"
                                                                        {{ $room->TypeRoom == 'Standard' ? 'selected' : '' }}>
                                                                        Standard</option>
                                                                    <option value="Deluxe"
                                                                        {{ $room->TypeRoom == 'Deluxe' ? 'selected' : '' }}>
                                                                        Deluxe</option>
                                                                    <option value="Scholars"
                                                                        {{ $room->TypeRoom == 'Scholars' ? 'selected' : '' }}>
                                                                        Scholars</option>
                                                                    <option value="Suite"
                                                                        {{ $room->TypeRoom == 'Suite' ? 'selected' : '' }}>
                                                                        Suite</option>
                                                                </select>
                                                            </div>
                                                            <!-- Floor Selection -->
                                                            <div class="mb-3">
                                                                <label for="roomFloor" class="form-label">Room
                                                                    Floor</label>
                                                                <select class="form-select" id="roomFloor"
                                                                    name="RoomFloor">
                                                                    <option value="Floor 1"
                                                                        {{ $room->RoomFloor == 'Floor 1' ? 'selected' : '' }}>
                                                                        Floor 1</option>
                                                                    <option value="Floor 2"
                                                                        {{ $room->RoomFloor == 'Floor 2' ? 'selected' : '' }}>
                                                                        Floor 2</option>
                                                                    <option value="Floor 3"
                                                                        {{ $room->RoomFloor == 'Floor 3' ? 'selected' : '' }}>
                                                                        Floor 3</option>
                                                                    <option value="Floor 4"
                                                                        {{ $room->RoomFloor == 'Floor 4' ? 'selected' : '' }}>
                                                                        Floor 4</option>
                                                                    <option value="Floor 5"
                                                                        {{ $room->RoomFloor == 'Floor 5' ? 'selected' : '' }}>
                                                                        Floor 5</option>
                                                                </select>
                                                            </div>
                                                            <!-- Block Selection -->
                                                            <div class="mb-3">
                                                                <label for="roomBlock"
                                                                    class="form-label">Block</label>
                                                                <select class="form-select" id="roomBlock"
                                                                    name="RoomBlock">
                                                                    <option value="U9"
                                                                        {{ $room->RoomBlock == 'U9' ? 'selected' : '' }}>
                                                                        U9</option>
                                                                    <option value="S46"
                                                                        {{ $room->RoomBlock == 'S46' ? 'selected' : '' }}>
                                                                        S46</option>
                                                                </select>
                                                            </div>
                                                            <!-- Status Selection -->
                                                            <div class="mb-3">
                                                                <label for="status"
                                                                    class="form-label">Status</label>
                                                                <select class="form-select" id="status"
                                                                    name="Status">
                                                                    <option value="Available"
                                                                        {{ $room->Status == 'Available' ? 'selected' : '' }}>
                                                                        Available</option>
                                                                    <option value="Booked"
                                                                        {{ $room->Status == 'Booked' ? 'selected' : '' }}>
                                                                        Booked</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-rounded">Save
                                                                Changes</button>
                                                            <button type="button"
                                                                class="btn btn-secondary btn-rounded"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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
        <script src="{{ asset('dist/assets/js/off-canvas.js') }}"></script>
        <script src="{{ asset('dist/assets/js/misc.js') }}"></script>
        <script src="{{ asset('dist/assets/js/settings.js') }}"></script>
        <script src="{{ asset('dist/assets/js/todolist.js') }}"></script>
        <script src="{{ asset('dist/assets/js/jquery.cookie.js') }}"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {

                const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format
                document.getElementById('filterDate').value = today;

                const allButton = document.getElementById('allBtn');
                const availableButton = document.getElementById('availableBtn');
                const bookedButton = document.getElementById('bookedBtn');
                const filterDate = document.getElementById('filterDate');

                // Trigger filter when a button is clicked
                allButton.addEventListener('click', () => filterItems('all', allButton));
                availableButton.addEventListener('click', () => filterItems('Available', availableButton));
                bookedButton.addEventListener('click', () => filterItems('Booked', bookedButton));

                // Trigger filter when the date is changed
                filterDate.addEventListener('change', function() {
                    const selectedDate = filterDate.value;
                    const selectedStatus = document.querySelector('input[name="status"]:checked')?.value ||
                        'all';

                    // Call filterItems with the selected status and date
                    filterItems(selectedStatus, null, selectedDate);
                });
                filterItems('all', null, today);
            

            $(document).on('submit', 'form', function (e) {
                    e.preventDefault(); // Prevent default form submission
                    const form = $(this);

                    // Use AJAX to submit the form
                    $.ajax({
                        url: form.attr('action'),
                        type: form.attr('method'),
                        data: form.serialize(),
                        success: function (response) {
                            const modalId = form.closest('.modal').attr('id');
                            if (modalId) {
                                $('#' + modalId).modal('hide');
                            }; // Close modal
                            filterItems('all'); // Refresh the list
                        },
                        error: function (xhr, status, error) {
                            console.error('Error updating room:', error);
                            alert('An error occurred while updating the room.');
                        },
                    });
                });
            });

 function filterItems(status, element, selectedDate) {
    console.log('Filtering rooms by status:', status);
    selectedDate = selectedDate || document.getElementById('filterDate').value;

    if (!selectedDate) {
        alert('Please select a date');
        return;
    }

    $.ajax({
        url: "{{ route('filterRooms') }}",
        type: 'POST',
        data: {
            _token: "{{ csrf_token() }}",
            status: status,
            date: selectedDate,
        },
        success: function (response) {
            const tableBody = $("table tbody");
            tableBody.empty();

            if (response.rooms && response.rooms.length > 0) {
                response.rooms.forEach((room) => {
                    const statusBadge = room.Status === 'Booked'
                        ? '<span class="badge bg-danger">Booked</span>'
                        : '<span class="badge bg-success">Available</span>';

                    tableBody.append(`
                        <tr>
                            <td>${room.RoomNo}</td>
                            <td>${room.TypeRoom}</td>
                            <td>${room.RoomFloor}</td>
                            <td>${room.RoomBlock}</td>
                            <td>${statusBadge}</td>
                            <td>
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu navbar-dropdown" aria-labelledby="dropdownMenuIconButton1">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                        data-bs-target="#modalBookingU${room.id}">
                                        <i class="mdi mdi-pencil me-2 text-info"></i> Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        onclick="event.preventDefault(); document.getElementById('deleteRoomForm${room.id}').submit();">
                                        <i class="mdi mdi-delete me-2 text-danger"></i> Delete
                                    </a>
                                    <form id="deleteRoomForm${room.id}" action="{{ route('deleteRoomList') }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="room_id" value="${room.id}">
                                    </form>
                                </div>
                            </td>
                        </tr>
                    `);

                    $('body').append(`
                        <div class="modal fade" id="modalBookingU${room.id}" tabindex="-1" aria-labelledby="modalBookingU${room.id}Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" style="background-color: white;">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalBookingU${room.id}Label">Edit Room - ${room.RoomNo}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('updateRoomList') }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="room_id" value="${room.id}">
                                            <div class="mb-3">
                                                <label for="roomNo${room.id}" class="form-label">Room No</label>
                                                <input type="text" class="form-control" id="roomNo${room.id}" name="RoomNo" value="${room.RoomNo}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="roomType" class="form-label">Type of Room</label>
                                                <select class="form-select" id="roomType" name="TypeRoom">
                                                    <option value="Single" ${room.TypeRoom === 'Single' ? 'selected' : ''}>Single</option>
                                                    <option value="Standard" ${room.TypeRoom === 'Standard' ? 'selected' : ''}>Standard</option>
                                                    <option value="Deluxe" ${room.TypeRoom === 'Deluxe' ? 'selected' : ''}>Deluxe</option>
                                                    <option value="Scholars" ${room.TypeRoom === 'Scholars' ? 'selected' : ''}>Scholars</option>
                                                    <option value="Suite" ${room.TypeRoom === 'Suite' ? 'selected' : ''}>Suite</option>
                                                </select>
                                            </div>
                                              <!-- Floor Selection -->
                                                                                <div class="mb-3">
                                                                                    <label for="roomFloor" class="form-label">Room Floor</label>
                                                                                    <select class="form-select" id="roomFloor" name="RoomFloor">
                                                                                        <option value="Floor 1" {{ $room->RoomFloor == 'Floor 1' ? 'selected' : '' }}>Floor 1</option>
                                                                                        <option value="Floor 2" {{ $room->RoomFloor == 'Floor 2' ? 'selected' : '' }}>Floor 2</option>
                                                                                        <option value="Floor 3" {{ $room->RoomFloor == 'Floor 3' ? 'selected' : '' }}>Floor 3</option>
                                                                                        <option value="Floor 4" {{ $room->RoomFloor == 'Floor 4' ? 'selected' : '' }}>Floor 4</option>
                                                                                        <option value="Floor 5" {{ $room->RoomFloor == 'Floor 5' ? 'selected' : '' }}>Floor 5</option>
                                                                                    </select>
                                                                                </div>
                                                                                <!-- Block Selection -->
                                                                                <div class="mb-3">
                                                                                    <label for="roomBlock" class="form-label">Block</label>
                                                                                    <select class="form-select" id="roomBlock" name="RoomBlock">
                                                                                        <option value="U9" {{ $room->RoomBlock == 'U9' ? 'selected' : '' }}>U9</option>
                                                                                        <option value="S46" {{ $room->RoomBlock == 'S46' ? 'selected' : '' }}>S46</option>
                                                                                    </select>
                                                                                </div>
                                                                                <!-- Status Selection -->
                                                                                <div class="mb-3">
                                                                                    <label for="status" class="form-label">Status</label>
                                                                                    <select class="form-select" id="status" name="Status">
                                                                                        <option value="Available" {{ $room->Status == 'Available' ? 'selected' : '' }}>Available</option>
                                                                                        <option value="Booked" {{ $room->Status == 'Booked' ? 'selected' : '' }}>Booked</option>
                                                                                    </select>
                                                                                </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);
                });
            } else {
                tableBody.append('<tr><td colspan="6" class="text-center">No rooms found</td></tr>');
            }

            highlightSelectedButton(element);
        },
        error: function (xhr, status, error) {
            console.error('Error filtering rooms:', error);
        },
    });
}

            



            function highlightSelectedButton(selectedButton) {
                // Remove active classes from all buttons
                document.querySelectorAll('.btn-group .btn').forEach(button => {
                    button.classList.remove('btn-primary', 'btn-filter-active');
                    button.classList.add('btn-filter');
                });

                // Add active classes to the selected button
                selectedButton.classList.remove('btn-filter');
                selectedButton.classList.add('btn-primary', 'btn-filter-active');
            }
        </script>


        <!-- Custom js for this page -->
        <!-- End custom js for this page -->
</body>

</html>
