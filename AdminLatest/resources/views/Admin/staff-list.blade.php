<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Scholars Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <meta property="og:url" content="https://keenthemes.com/products/oswald-html-pro" />
		<meta property="og:site_name" content="Keenthemes | Oswald HTML Free" />
		<link rel="canonical" href="https://preview.keenthemes.com/axel-html-free" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">
    <!-- Include SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.js"></script>

  

    
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('dist/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('dist/assets/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <a class="navbar-brand brand-logo" href="{{ url('index') }}"><img src="{{ asset('dist/assets/images/LOGO-UTM.png') }}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('index') }}"><img src="{{ asset('dist/assets/images/logo-mini.svg') }}" alt="logo" /></a>
      </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{ asset('dist/assets/images/faces/face1.jpg') }}" alt="image">
                  <span class="availability-status online"></span>
              </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">David Greymaax</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="{{ route('changePassForm') }}">
                    <i class="mdi mdi-cached me-2 text-success"></i> Change Password </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('/') }}">
                    <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
            </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{ asset('dist/assets/images/faces/face2.jpg') }}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{ ('assets/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-cog"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
           
            
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{ ('assets/images/faces/face1.jpg')}}" alt="profile" />
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">David Grey. H</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.dashboard.index')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/booking') }}">
                <span class="menu-title">Booking</span>
                <i class="mdi mdi-calendar-edit-outline menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <span class="menu-title">Guest</span>
                <i class="mdi mdi-clipboard-check-multiple-outline menu-icon"></i>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Room</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/room-details') }}">Room Details</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/room-list') }}">Room List</a>
                  </li>
                </ul>
              </div>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="{{ url('/staff-list') }}">
                <span class="menu-title">Staff</span>
                <i class="mdi mdi-account-outline menu-icon"></i>
              </a>
            </li> --}}
            <li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#staff-dropdown" aria-expanded="false" aria-controls="staff-dropdown">
        <span class="menu-title">Staff</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-account-outline menu-icon"></i>
    </a>
    <div class="collapse" id="staff-dropdown">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/staff-list') }}">Staff List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/schedule') }}">Schedule</a>
            </li>
        </ul>
    </div>
</li>

            <li class="nav-item">
              <a class="nav-link" href="rate.html">
                <span class="menu-title">Rate</span>
                <i class="mdi mdi-tag-outline menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                  <a href="../dist/index.html" class="text-gray-500">
                    <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
                  </a>
                </li>
                <!--end::Item-->
                <div class="breadcrumb-container">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Room</li>
                      </ol>
                  </nav>
              </div>
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
                                      <option value="Maintenance & cleaning">Maintenance & cleaning</option>
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
                                          <option value="Maintenance & Cleaning" {{ $staff->position == 'Maintenance & Cleaning' ? 'selected' : '' }}>Maintenance & Cleaning</option>
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