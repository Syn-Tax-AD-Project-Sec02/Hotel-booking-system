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
                        <x-breadcrumbs title="Dashboard" subtitle="Room Details" />
                    </div>
   
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body ">
                    <!-- Display success message -->
                  @if(session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
                  @endif

                <!-- Display error message -->
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <!-- Display validation errors -->
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <input type="hidden" name="schedule_id" value=""> 
                @endif
                      <div class=" d-flex justify-content-between align-items-center">
                        <h4 class="card-title">All Schedule</h4>
                        <button type="button" class="btn btn-primary btn-rounded shadow" style="padding: 15PX;" data-bs-toggle="modal" data-bs-target="#modalBooking" data-bs-whatever="@mdo">Add Schedule</button>
                        <div class="modal fade" id="modalBooking" tabindex="-1" aria-labelledby="modalBookingLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content"  style="background-color: white;">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalBookingLabel">Add Schedule</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ route('ScheduleListForm') }}" method="POST" >                                  
                                  @csrf 
                                  <div class="mb-4">
                                    <label for="FormControlName" class="form-label">Staff ID</label>
                                    <input type="text" class="form-control" name="staff_id" placeholder="Staff ID" aria-label="Staff ID">
                                </div>
                                <div class="mb-4">
                                    <label for="FormControlName" class="form-label">Staff Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Full Name" aria-label="Full Name">
                                </div>
                                <div class="mb-4">
                                    <label for="FormControlName" class="form-label">Room No</label>
                                    <input type="text" class="form-control" name="room_no" placeholder="Room No" aria-label="Room No">
                                </div>
                                <div class="mb-4">
                                    <label for="date_time" class="form-label">Date/Time</label>
                                    <input type="datetime-local" class="form-control" name="date_time" placeholder="date_time" aria-label="Date/Time">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleFormControlSelect1" class="form-label">Services</label>
                                    <select class="form-select" style="height:43px; font-size: 12px;" name="services" id="services">
                                        <option selected>Choose...</option>
                                        <option value="Housekeeping">Housekeeping</option>
                                        <option value="Maintenance">Maintenance</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleFormControlSelect1" class="form-label">Status</label>
                                    <select class="form-select" style="height:43px; font-size: 12px;" name="status" id="status">
                                        <option selected>Choose...</option>
                                        <option value="Pending">Pending</option>
                                        <option value="In Progress">In Progress</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-rounded">Add</button>
                                <button type="button" class="btn btn-secondary btn-rounded" data-bs-dismiss="modal">Cancel</button>                        
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
                          <th>Staff Id</th>
                          <th>Staff Name</th>
                          <th>Room No</th>
                          <th>Date/Time</th>
                          <th>Services</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>                      
                      </thead>
                      <tbody>
                        @foreach ($schedules->sortBy('scheduleID') as $schedule)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $schedule->staffID }}</td>
                            <td>{{ $schedule->name }}</td>
                            <td>{{ $schedule->room_no }}</td>
                            <td>{{ $schedule->date_time }}</td>
                            <td>{{ $schedule->services }}</td>
                            <td>{{ $schedule->status }}</td>
                            <td>
                                <!-- Dropdown Trigger -->
                                <a class="nav-link" id="dropdownMenuIconButton1" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                    
                                <!-- Dropdown Menu -->
                                <div class="dropdown-menu navbar-dropdown" aria-labelledby="dropdownMenuIconButton1">
                                    <!-- Edit Option -->
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalBookingU{{ $schedule->_id }}">
                                        <i class="mdi mdi-pencil me-2 text-info"></i> Edit
                                    </a>
                    
                                    <!-- Divider -->
                                    <div class="dropdown-divider"></div>
                    
                                    <!-- Delete Option -->
                                    <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('deleteScheduleForm{{ $schedule->_id }}').submit();">
                                        <i class="mdi mdi-delete me-2 text-danger"></i> Delete
                                    </a>
                    
                                    <form id="deleteScheduleForm{{ $schedule->_id }}" action="{{ route('deleteScheduleList') }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="schedule_id" value="{{ $schedule->_id }}">
                                    </form>
                                </div>
                            </td>
                        </tr>
                    
                        <!-- Modal for Editing -->
                        <div class="modal fade" id="modalBookingU{{ $schedule->_id }}" tabindex="-1" aria-labelledby="modalBookingULabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" style="background-color: white;">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalBookingULabel">Edit Schedule</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="{{ route('updateScheduleList') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="schedule_id" value="{{ $schedule->_id }}">
                    
                                            <div class="mb-4">
                                                <label for="name" class="form-label">Staff Name</label>
                                                <input type="text" class="form-control" name="name" id="name" value="{{ $schedule->name }}">
                                            </div>
                                            <div class="mb-4">
                                                <label for="room_no" class="form-label">Room No</label>
                                                <input type="text" class="form-control" name="room_no" id="room_no" value="{{ $schedule->room_no }}">
                                            </div>
                                            <div class="mb-4">
                                                <label for="date_time" class="form-label">Date/Time</label>
                                                <input type="datetime-local" class="form-control" name="date_time" id="date_time" value="{{ $schedule->date_time }}">
                                            </div>
                                            <div class="mb-4">
                                                <label for="services" class="form-label">Services</label>
                                                <select class="form-select" name="services" id="services">
                                                    <option value="Housekeeping" {{ $schedule->services == 'Housekeeping' ? 'selected' : '' }}>Housekeeping</option>
                                                    <option value="Maintenance" {{ $schedule->services == 'Maintenance' ? 'selected' : '' }}>Maintenance</option>
                                                </select>
                                            </div>
                                            <div class="mb-4">
                                                <label for="status" class="form-label">Status</label>
                                                <select class="form-select" name="status" id="status">
                                                    <option value="Pending" {{ $schedule->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="In Progress" {{ $schedule->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                                                    <option value="Completed" {{ $schedule->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('dist/assets/vendors/js/vendor.bundle.base.js')}}"></script><!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('dist/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('dist/assets/js/misc.js')}}"></script>
    <script src="{{asset('dist/assets/js/settings.js')}}"></script>
    <script src="{{asset('dist/assets/js/todolist.js')}}"></script>
    <script src="{{asset('dist/assets/js/jquery.cookie.js')}}"></script>  <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>