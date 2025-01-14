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
                @endif
                      <div class=" d-flex justify-content-between align-items-center">
                        <h4 class="card-title">All Staff</h4>
                        <button type="button" class="btn btn-primary btn-rounded shadow" style="padding: 15PX;" data-bs-toggle="modal" data-bs-target="#modalBooking" data-bs-whatever="@mdo">Add Staff</button>
                        <div class="modal fade" id="modalBooking" tabindex="-1" aria-labelledby="modalBookingLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content"  style="background-color: white;">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalBookingLabel">Add Staff</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ route('StaffListForm') }}" method="POST" >                                  
                                  @csrf 
                                  <div class="mb-4">
                                    <label for="FormControlName"  class="form-label">Staff Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="email" aria-label="email">
                                  </div>                               
                                  <div class="mb-4">
                                    <label for="FormControlName"  class="form-label">Staff Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Full Name" aria-label="Full Name">
                                  </div>
                                  <div class="mb-4">
                                    <label for="exampleFormControlInput1" class="form-label">Position</label>
                                    <select class="form-select" style=" height:43px; font-size: 12px;" name="position" id="inputGroupSelect01">
                                      <option selected>Choose...</option>
                                      <option value="Manager">Manager</option>
                                      <option value="Marketing">Marketing</option>
                                      <option value="Receptionist">Receptionist</option>
                                      <option value="Maintenance">Maintenance</option>
                                      <option value="Housekeeper">Housekeeper</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" aria-label="Phone Number">
                                  </div>

                                  <div class="mb-4">
                                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                                    <textarea class="form-control" name="address" id="address" placeholder="Full Address" aria-label="address"></textarea>
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
                          <th>Staff Email</th>
                          <th>Staff Name</th>
                          <th>Position</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($staffs->sortBy('staffID') as $staff)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $staff->staffID}}</td>
                          <td>{{ $staff->email}}</td>
                          <td>{{ $staff->name }}</td>
                          <td>{{ $staff->position }}</td>
                          <td>{{ $staff->phone }}</td>
                          <td>{{ $staff->address }}</td>
                          <td>
                            <!-- Dropdown Trigger -->
                            <a class="nav-link" id="dropdownMenuIconButton1" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            

                            <!-- Dropdown Menu -->
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="dropdownMenuIconButton1">
                              <!-- Edit Option -->
                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalBookingU{{ $staff->_id }}">
                                <i class="mdi mdi-pencil me-2 text-info"></i> Edit
                              </a>

                              <!-- Divider -->
                              <div class="dropdown-divider"></div>

                              <!-- Delete Option -->
                             <!-- Delete Option -->
                             <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('deleteStaffForm{{ $staff->_id }}').submit();">
                              <i class="mdi mdi-delete me-2 text-danger"></i> Delete
                          </a>
                          
                          <form id="deleteStaffForm{{ $staff->_id }}" action="{{ route('deleteStaffList') }}" method="POST" style="display: none;">
                              @csrf
                              @method('DELETE')
                              <input type="hidden" name="staff_id" value="{{ $staff->_id }}"> <!-- Pass the room's _id -->
                          </form>
                            </div>

                            <!-- Modal (Place Outside Dropdown Menu) -->
                            <div class="modal fade" id="modalBookingU{{ $staff->id }}" tabindex="-1" aria-labelledby="modalBookingU{{ $staff->id }}Label" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content" style="background-color: white;">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="modalBookingU{{ $staff->id }}Label">Edit Staff</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('updateStaffList') }}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <input type="hidden" name="staff_id" value="{{ $staff->id }}">
                                      <!-- Input Fields -->
                                        
                                      <div class="mb-4">
                                        <label for="email{{ $staff->email }}" class="form-label">email</label>
                                        <input type="text" class="form-control" name="email" id="email{{ $staff->email }}" value="{{ $staff->email }}">
                                      </div>
                                      <div class="mb-4">
                                        <label for="name{{ $staff->id }}" class="form-label">Staff Name</label>
                                        <input type="text" class="form-control" name="name" id="name{{ $staff->id }}" value="{{ $staff->name }}">
                                      </div>
                                       <!-- Other Fields -->
                                       <div class="mb-4">
                                        <label for="position{{ $staff->id }}" class="form-label">Position</label>
                                        <select class="form-select" name="position" id="position{{ $staff->id }}">
                                          <option value="Manager" {{ $staff->position == 'Manager' ? 'selected' : '' }}>Manager</option>
                                          <option value="Marketing" {{ $staff->position == 'Marketing' ? 'selected' : '' }}>Marketing</option>
                                          <option value="Receptionist" {{ $staff->position == 'Receptionist' ? 'selected' : '' }}>Receptionist</option>
                                          <option value="Maintenance" {{ $staff->position == 'Maintenance' ? 'selected' : '' }}>Maintenance</option>
                                          <option value="Housekeeper" {{ $staff->position == 'Housekeeper' ? 'selected' : '' }}>Housekeeper</option>
                                        </select>
                                      </div>

                                     <div class="mb-4">
                                        <label for="phone{{ $staff->id }}" class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone{{ $staff->id }}" value="{{ $staff->phone }}">
                                      </div>

                                      <div class="mb-4">
                                        <label for="address{{ $staff->id }}" class="form-label">Address</label>
                                        <textarea class="form-control" name="address" id="address{{ $staff->id }}">{{ $staff->address }}</textarea>
                                    </div>
                                    
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  </div>
                                  
                                </form>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
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