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
              <a class="nav-link" href="pages/tables/booking.html">
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
            <li class="nav-item">
              <a class="nav-link" href="staff.html">
                <span class="menu-title">Staff</span>
                <i class="mdi mdi-account-outline menu-icon"></i>
              </a>
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
                                    <input type="number" class="form-control" id="adults" value="1" min="1">
                                </div>
                                <div class="col-md-3">
                                    <label for="children" class="form-label">Children</label>
                                    <input type="number" class="form-control" id="children" value="0" min="0">
                                </div>
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Check availability</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div></div>
            
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
                        <h4 class="card-title">All Booking</h4>
                        <button type="button" class="btn btn-primary btn-rounded shadow" style="padding: 15PX;" data-bs-toggle="modal" data-bs-target="#modalBooking" data-bs-whatever="@mdo">Add Booking</button>
                        <div class="modal fade" id="modalBooking" tabindex="-1" aria-labelledby="modalBookingLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content"  style="background-color: white;">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalBookingLabel">Add Room</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ route('bookingListsForm') }}" method="POST" >                                  
                                  @csrf                                
                                  
                                  <div class="mb-4">
                                    <label for="FormControlName"  class="form-label">Name</label>
                                    <input type="text" class="form-control" name="Name" placeholder="Name" aria-label="Name">
                                  </div>

                                  <div class="mb-4">
                                    <label for="FormControlName"  class="form-label">Room No</label>
                                    <input type="text" class="form-control" name="RoomNo" placeholder="Room No" aria-label="Room No">
                                  </div>

                                  <div class="mb-4">
                                    <label for="exampleFormControlInput1"  class="form-label">Type of Room</label>
                                    <select class="form-select" style="height:43px; font-size: 12px;" name="TypeRoom" id="inputGroupSelect01">
                                      <option selected>Choose...</option>
                                      <option value="Single">Single</option>
                                      <option value="Standard">Standard</option>
                                      <option value="Deluxe">Deluxe</option>
                                      <option value="Scholars">Scholars</option>
                                      <option value="Suite">Suite</option>
                                    </select>
                                  </div>
                                  <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="FormControlCheckIn" class="form-label">Check-In</label>
                                        <input type="date" class="form-control" name="CheckIn" id="FormControlCheckIn" placeholder="Check-In" aria-label="CheckIn">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="FormControlCheckOut" class="form-label">Check-Out</label>
                                        <input type="date" class="form-control" name="CheckOut" id="FormControlCheckOut" placeholder="Check-Out" aria-label="CheckOut">
                                    </div>
                                    </div>

                                  <div class="mb-4">
                                    <label for="FormControlName"  class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="Phone" placeholder="Phone" aria-label="Phone">
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
                          <th>Booking ID</th>
                          <th>Name</th>
                          <th>Room No</th>
                          <th>Room Type</th>
                          <th>Check-In</th>
                          <th>Check-Out</th>
                          <th>Phone</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($bookings as $booking)
                        <tr>
                          <td>{{ $loop->iteration + ($bookings->currentPage() - 1) * $bookings->perPage() }}</td>
                          <td>{{ $booking->BookingID }}</td> 
                          <td>{{ $booking->Name }}</td>
                          <td>{{ $booking->RoomNo }}</td>
                          <td>{{ $booking->TypeRoom }}</td>
                          <td>{{ $booking->CheckIn }}</td>
                          <td>{{ $booking->CheckOut }}</td>
                          <td>{{ $booking->Phone }}</td>
                          
                          
                          <td>
                            <!-- Dropdown Trigger -->
                            <a class="nav-link" id="dropdownMenuIconButton1" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="mdi mdi-dots-vertical"></i>
                            </a>

                            <!-- Dropdown Menu -->
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="dropdownMenuIconButton1">
                              <!-- Edit Option -->
                              <a class="dropdown-item" href="{{ route('updateBookingList') }}" data-bs-toggle="modal" data-bs-target="#modalBookingU{{ $booking->id }}">
                                <i class="mdi mdi-pencil me-2 text-info"></i> Edit
                              </a>

                              <!-- Divider -->
                              <div class="dropdown-divider"></div>

                              <!-- Delete Option -->
                             <!-- Delete Option -->
                             <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('deleteRoomForm{{ $booking->_id }}').submit();">
                              <i class="mdi mdi-delete me-2 text-danger"></i> Delete
                          </a>
                          
                          <form id="deleteRoomForm{{ $booking->_id }}" action="{{ route('deleteBookingList')}}" method="POST" style="display: none;">
                              @csrf
                              @method('DELETE')
                              <input type="hidden" name="booking_id" value="{{ $booking->_id }}"> <!-- Pass the room's _id -->
                          </form>
                            </div>

                            <!-- Modal (Place Outside Dropdown Menu) -->
                            <div class="modal fade" id="modalBookingU{{ $booking->id }}" tabindex="-1" aria-labelledby="modalBookingU{{ $booking->id }}Label" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content" style="background-color: white;">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="modalBookingU{{ $booking->id }}Label">Edit Room</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('updateBookingList') }}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <input type="hidden" name="booking_id" value="{{ $booking->_id }}">
                  
                                      <!-- Name -->
                                      <div class="mb-4">
                                          <label for="Name{{ $booking->id }}" class="form-label">Name</label>
                                          <input type="text" class="form-control" name="Name" id="Name{{ $booking->id }}" value="{{ $booking->Name }}">
                                      </div>
                  
                                      <!-- Room No -->
                                      <div class="mb-4">
                                          <label for="RoomNo{{ $booking->id }}" class="form-label">Room No</label>
                                          <input type="text" class="form-control" name="RoomNo" id="RoomNo{{ $booking->id }}" value="{{ $booking->RoomNo }}">
                                      </div>
                  
                                      <!-- Type of Room -->
                                      <div class="mb-4">
                                          <label for="TypeRoom{{ $booking->id }}" class="form-label">Type of Room</label>
                                          <select class="form-select" name="TypeRoom" id="TypeRoom{{ $booking->id }}">
                                              <option value="Single" {{ $booking->TypeRoom == 'Single' ? 'selected' : '' }}>Single</option>
                                              <option value="Standard" {{ $booking->TypeRoom == 'Standard' ? 'selected' : '' }}>Standard</option>
                                              <option value="Deluxe" {{ $booking->TypeRoom == 'Deluxe' ? 'selected' : '' }}>Deluxe</option>
                                              <option value="Scholars" {{ $booking->TypeRoom == 'Scholars' ? 'selected' : '' }}>Scholars</option>
                                              <option value="Suite" {{ $booking->TypeRoom == 'Suite' ? 'selected' : '' }}>Suite</option>
                                          </select>
                                      </div>
                  
                                      <!-- Check-In and Check-Out -->
                                      <div class="row mb-4">
                                          <div class="col-md-6">
                                              <label for="CheckIn{{ $booking->id }}" class="form-label">Check-In</label>
                                              <input type="date" class="form-control" name="CheckIn" id="CheckIn{{ $booking->id }}" value="{{ $booking->CheckIn }}">
                                          </div>
                                          <div class="col-md-6">
                                              <label for="CheckOut{{ $booking->id }}" class="form-label">Check-Out</label>
                                              <input type="date" class="form-control" name="CheckOut" id="CheckOut{{ $booking->id }}" value="{{ $booking->CheckOut }}">
                                          </div>
                                      </div>
                  
                                      <!-- Phone -->
                                      <div class="mb-4">
                                          <label for="Phone{{ $booking->id }}" class="form-label">Phone</label>
                                          <input type="text" class="form-control" name="Phone" id="Phone{{ $booking->id }}" value="{{ $booking->Phone }}">
                                      </div>
                                    
                                    
                                  
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  </div>
                                  @endforeach
                                </form>
                                </div>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        

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