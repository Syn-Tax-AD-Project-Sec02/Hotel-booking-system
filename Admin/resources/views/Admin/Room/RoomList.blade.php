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
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
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
              <a class="nav-link" href="{{ url('/')}}">
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
              <a class="nav-link" href="room.html">
                <span class="menu-title">Room</span>
                <i class="mdi mdi-bookmark-outline menu-icon"></i>
              </a>
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
            
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body ">
                    
                      <div class=" d-flex justify-content-between align-items-center">
                        <h4 class="card-title">All Room</h4>
                        <button type="button" class="btn btn-primary btn-rounded shadow" style="padding: 15PX;" data-bs-toggle="modal" data-bs-target="#modalBooking" data-bs-whatever="@mdo">Add Room</button>
                        <div class="modal fade" id="modalBooking" tabindex="-1" aria-labelledby="modalBookingLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content"  style="background-color: white;">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalBookingLabel">Add Room</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form>                                  
                                  <div class="mb-4">
                                    <label for="FormControlName"  class="form-label">Room No</label>
                                    <input type="text" class="form-control" name="RoomNo" placeholder="Room No" aria-label="Room No">
                                  </div>
                                  <div class="mb-4">
                                    <label for="exampleFormControlInput1"  class="form-label">Type of Room</label>
                                    <select class="form-select" style="height:43px; font-size: 12px;" name="TypeRoom" id="inputGroupSelect01">
                                      <option selected>Choose...</option>
                                      <option value="1">Single</option>
                                      <option value="2">Standard</option>
                                      <option value="3">Deluxe</option>
                                      <option value="4">Scholars</option>
                                      <option value="5">Suite</option>
                                    </select>
                                  </div>
                                  <div class="mb-4">
                                    <label for="exampleFormControlInput1" class="form-label">Room Floor</label>
                                    <select class="form-select" style=" height:43px; font-size: 12px;" name="RoomFloor" id="inputGroupSelect01">
                                      <option selected>Choose...</option>
                                      <option value="1">Floor 1</option>
                                      <option value="2">Floor 2</option>
                                      <option value="3">Floor 3</option>
                                      <option value="4">Floor 4</option>
                                      <option value="5">Floor 5</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1" class="form-label">Block</label>
                                    <select class="form-select" style=" height:43px; font-size: 12px;" name="RoomBlock" id="inputGroupSelect01">
                                      <option selected>Choose...</option>
                                      <option value="1">U9</option>
                                      <option value="2">S46</option>
                                    </select>
                                </div>
                                  <div class="mb-4">
                                    <label for="FormControlStatus"  class="form-label">Status</label>
                                    <select class="form-select" style="height:43px; font-size: 12px;" name="Status" id="inputGroupSelect01">
                                      <option selected>Choose...</option>
                                      <option value="1">Booked</option>
                                      <option value="2">Available</option>
                                    </select>
                                  </div>

                               
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-primary btn-rounded">Add</button>
                                <button type="button" class="btn btn-secondary btn-rounded" data-bs-dismiss="modal">Cancel</button>                        
                              </div> 
                            </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <div class="container mt-4">
                        <!-- Filter Buttons -->
                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-filter-active btn-primary rounded-pill me-2 " onclick="filterItems('all')">All room(100)</button>
                            <button type="button" class="btn btn-filter rounded-pill me-2" onclick="filterItems('available')">Available room(20)</button>
                            <button type="button" class="btn btn-filter rounded-pill me-2" onclick="filterItems('booked')">Booked(80)</button>
                        </div>
                    </div>
                    
                    </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Room No</th>
                          <th>Room Type</th>
                          <th>Room Floor</th>
                          <th>Block</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#001</td>
                          <td>Single</td>
                          <td>Floor 1</td>
                          <td>U9</td>
                          <td><label class="badge badge-danger">Booked</label></td>
                          <td>
                            <a class="nav-link" id="dropdownMenuIconButton1" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="dropdownMenuIconButton1">
                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalBooking">
                                <i class="mdi mdi-pencil me-2 text-info"></i> Edit </a>
                                <div class="modal fade" id="modalBooking" tabindex="-1" aria-labelledby="modalBookingLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content"  style="background-color: white;">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="modalBookingLabel">Add Room</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <form>                                  
                                              <div class="mb-4">
                                                <label for="FormControlName" style="padding-left: 15px" class="form-label">Room No</label>
                                                <input type="text" class="form-control" style="border-radius: 50px;" placeholder="Room No" aria-label="Full Name">
                                              </div>
                                              <div class="mb-4">
                                                <label for="exampleFormControlInput1" style="padding-left: 15px" class="form-label">Type of Room</label>
                                                <select class="form-select" style="border-radius: 50px; height:43px; font-size: 12px;" id="inputGroupSelect01">
                                                  <option selected>Choose...</option>
                                                  <option value="1">Single</option>
                                                  <option value="2">Standard</option>
                                                  <option value="3">Deluxe</option>
                                                  <option value="4">Scholars</option>
                                                  <option value="5">Suite</option>
                                                </select>
                                              </div>
                                              <div class="mb-4">
                                                <label for="exampleFormControlInput1" style="padding-left: 15px" class="form-label">Room Floor</label>
                                                <select class="form-select" style="border-radius: 50px; height:43px; font-size: 12px;" id="inputGroupSelect01">
                                                  <option selected>Choose...</option>
                                                  <option value="1">Floor 1</option>
                                                  <option value="2">Floor 2</option>
                                                  <option value="3">Floor 3</option>
                                                  <option value="4">Floor 4</option>
                                                  <option value="5">Floor 5</option>
                                                </select>
                                            </div>
                                            <div class="mb-4">
                                                <label for="exampleFormControlInput1" style="padding-left: 15px" class="form-label">Block</label>
                                                <select class="form-select" style="border-radius: 50px; height:43px; font-size: 12px;" id="inputGroupSelect01">
                                                  <option selected>Choose...</option>
                                                  <option value="1">U9</option>
                                                  <option value="2">S46</option>
                                                </select>
                                            </div>
                                              <div class="mb-4">
                                                <label for="FormControlStatus" style="padding-left: 15px" class="form-label">Status</label>
                                                <select class="form-select" style="border-radius: 50px; height:43px; font-size: 12px;" id="inputGroupSelect01">
                                                  <option selected>Choose...</option>
                                                  <option value="1">Booked</option>
                                                  <option value="2">Available</option>
                                                </select>
                                              </div>
            
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-primary btn-rounded">Add</button>
                                            <button type="button" class="btn btn-secondary btn-rounded" data-bs-dismiss="modal">Cancel</button>
                                            
                                          </div>
                                        </div>
                                      </div>
                                </div>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">
                                <i class="mdi mdi-delete me-2 text-danger"></i> Delete </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                            <td>#002</td>
                            <td>Deluxe</td>
                            <td>Floor 1</td>
                            <td>U9</td>
                            <td><label class="badge badge-danger">Booked</label></td>
                          <td>
                            <a class="nav-link" id="dropdownMenuIconButton1" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="dropdownMenuIconButton1">
                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalBooking">
                                <i class="mdi mdi-pencil me-2 text-info"></i> Edit </a>
                                <div class="modal fade" id="modalBooking" tabindex="-1" aria-labelledby="modalBookingLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content"  style="background-color: white;">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="modalBookingLabel">Edit Room</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <form>                                  
                                          <div class="mb-4">
                                            <label for="FormControlName" style="padding-left: 15px" class="form-label">Full Name</label>
                                            <input type="text" class="form-control"  placeholder="Full Name" aria-label="Full Name">
                                          </div>
                                          <div class="mb-4">
                                            <label for="exampleFormControlInput1" style="padding-left: 15px" class="form-label">Type of Room</label>
                                            <select class="form-select" style="border-radius: 50px; height:43px; font-size: 12px;" id="inputGroupSelect01">
                                              <option selected>Choose...</option>
                                              <option value="1">Single</option>
                                              <option value="2">Deluxe</option>
                                              <option value="3">Scholars</option>
                                            </select>
                                          </div>
                                          <div class="row mb-4">
                                            <div class="col">
                                              <label for="FormControlArrDate" style="padding-left: 15px" class="form-label">Arrival Date</label>
                                              <input type="date" class="form-control" style="border-radius: 50px;"  aria-label="Arrival Date">
                                            </div>
                                            <div class="col">
                                              <label for="FormControlDepDate" style="padding-left: 15px" class="form-label">Departure Date</label>
                                              <input type="date" class="form-control" style="border-radius: 50px;"  aria-label="Departure Date">
                                            </div>
                                          </div>
                                          <div class="mb-4">
                                            <label for="FormControlStatus" style="padding-left: 15px" class="form-label">Status</label>
                                            <select class="form-select" style="border-radius: 50px; height:43px; font-size: 12px;" id="inputGroupSelect01">
                                              <option selected>Choose...</option>
                                              <option value="1">Pay</option>
                                              <option value="2">Pending</option>
                                            </select>
                                          </div>
        
                                        </form>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-rounded">Add</button>
                                        <button type="button" class="btn btn-secondary btn-rounded" data-bs-dismiss="modal">Cancel</button>
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">
                                <i class="mdi mdi-delete me-2 text-danger"></i> Delete </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                            <td>#003</td>
                            <td>Scholars</td>
                            <td>Floor 1</td>
                            <td>U9</td>
                            <td><label class="badge badge-danger">Booked</label></td>
                          <td>
                            <a class="nav-link" id="dropdownMenuIconButton1" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="dropdownMenuIconButton1">
                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalBooking">
                                <i class="mdi mdi-pencil me-2 text-info"></i> Edit </a>
                                <div class="modal fade" id="modalBooking" tabindex="-1" aria-labelledby="modalBookingLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content"  style="background-color: white;">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="modalBookingLabel">Edit Booking</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <form>                                  
                                          <div class="mb-4">
                                            <label for="FormControlName" style="padding-left: 15px" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" style="border-radius: 50px;" placeholder="Full Name" aria-label="Full Name">
                                          </div>
                                          <div class="mb-4">
                                            <label for="exampleFormControlInput1" style="padding-left: 15px" class="form-label">Type of Room</label>
                                            <select class="form-select" style="border-radius: 50px; height:43px; font-size: 12px;" id="inputGroupSelect01">
                                              <option selected>Choose...</option>
                                              <option value="1">Single</option>
                                              <option value="2">Deluxe</option>
                                              <option value="3">Scholars</option>
                                            </select>
                                          </div>
                                          <div class="row mb-4">
                                            <div class="col">
                                              <label for="FormControlArrDate" style="padding-left: 15px" class="form-label">Arrival Date</label>
                                              <input type="date" class="form-control" style="border-radius: 50px;"  aria-label="Arrival Date">
                                            </div>
                                            <div class="col">
                                              <label for="FormControlDepDate" style="padding-left: 15px" class="form-label">Departure Date</label>
                                              <input type="date" class="form-control" style="border-radius: 50px;"  aria-label="Departure Date">
                                            </div>
                                          </div>
                                          <div class="mb-4">
                                            <label for="FormControlStatus" style="padding-left: 15px" class="form-label">Status</label>
                                            <select class="form-select" style="border-radius: 50px; height:43px; font-size: 12px;" id="inputGroupSelect01">
                                              <option selected>Choose...</option>
                                              <option value="1">Pay</option>
                                              <option value="2">Pending</option>
                                            </select>
                                          </div>
        
                                        </form>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-rounded">Add</button>
                                        <button type="button" class="btn btn-secondary btn-rounded" data-bs-dismiss="modal">Cancel</button>
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">
                                <i class="mdi mdi-delete me-2 text-danger"></i> Delete </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                            <td>#004</td>
                            <td>Scholars</td>
                            <td>Floor 1</td>
                            <td>U9</td>
                          <td><label class="badge badge-success">Available</label></td>
                          <td>
                            <a class="nav-link" id="dropdownMenuIconButton1" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="dropdownMenuIconButton1">
                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalBooking">
                                <i class="mdi mdi-pencil me-2 text-info"></i> Edit </a>
                                <div class="modal fade" id="modalBooking" tabindex="-1" aria-labelledby="modalBookingLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content"  style="background-color: white;">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="modalBookingLabel">Edit Booking</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <form>                                  
                                          <div class="mb-4">
                                            <label for="FormControlName" style="padding-left: 15px" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" style="border-radius: 50px;" placeholder="Full Name" aria-label="Full Name">
                                          </div>
                                          <div class="mb-4">
                                            <label for="exampleFormControlInput1" style="padding-left: 15px" class="form-label">Type of Room</label>
                                            <select class="form-select" style="border-radius: 50px; height:43px; font-size: 12px;" id="inputGroupSelect01">
                                              <option selected>Choose...</option>
                                              <option value="1">Single</option>
                                              <option value="2">Deluxe</option>
                                              <option value="3">Scholars</option>
                                            </select>
                                          </div>
                                          <div class="row mb-4">
                                            <div class="col">
                                              <label for="FormControlArrDate" style="padding-left: 15px" class="form-label">Arrival Date</label>
                                              <input type="date" class="form-control" style="border-radius: 50px;"  aria-label="Arrival Date">
                                            </div>
                                            <div class="col">
                                              <label for="FormControlDepDate" style="padding-left: 15px" class="form-label">Departure Date</label>
                                              <input type="date" class="form-control" style="border-radius: 50px;"  aria-label="Departure Date">
                                            </div>
                                          </div>
                                          <div class="mb-4">
                                            <label for="FormControlStatus" style="padding-left: 15px" class="form-label">Status</label>
                                            <select class="form-select" style="border-radius: 50px; height:43px; font-size: 12px;" id="inputGroupSelect01">
                                              <option selected>Choose...</option>
                                              <option value="1">Pay</option>
                                              <option value="2">Pending</option>
                                            </select>
                                          </div>
        
                                        </form>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-rounded">Add</button>
                                        <button type="button" class="btn btn-secondary btn-rounded" data-bs-dismiss="modal">Cancel</button>
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">
                                <i class="mdi mdi-delete me-2 text-danger"></i> Delete </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                            <td>#005</td>
                            <td>Suite</td>
                            <td>Floor 1</td>
                            <td>U9</td>
                          <td><label class="badge badge-success">Available</label></td>
                          <td>
                              <a class="nav-link" id="dropdownMenuIconButton1" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                              </a>
                              <div class="dropdown-menu navbar-dropdown" aria-labelledby="dropdownMenuIconButton1">
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalBooking">
                                  <i class="mdi mdi-pencil me-2 text-info"></i> Edit </a>
                                  <div class="modal fade" id="modalBooking" tabindex="-1" aria-labelledby="modalBookingLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content"  style="background-color: white;">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="modalBookingLabel">Edit Booking</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <form>                                  
                                            <div class="mb-4">
                                              <label for="FormControlName" style="padding-left: 15px" class="form-label">Full Name</label>
                                              <input type="text" class="form-control" style="border-radius: 50px;" placeholder="Full Name" aria-label="Full Name">
                                            </div>
                                            <div class="mb-4">
                                              <label for="exampleFormControlInput1" style="padding-left: 15px" class="form-label">Type of Room</label>
                                              <select class="form-select" style="border-radius: 50px; height:43px; font-size: 12px;" id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                <option value="1">Single</option>
                                                <option value="2">Deluxe</option>
                                                <option value="3">Scholars</option>
                                              </select>
                                            </div>
                                            <div class="row mb-4">
                                              <div class="col">
                                                <label for="FormControlArrDate" style="padding-left: 15px" class="form-label">Arrival Date</label>
                                                <input type="date" class="form-control" style="border-radius: 50px;"  aria-label="Arrival Date">
                                              </div>
                                              <div class="col">
                                                <label for="FormControlDepDate" style="padding-left: 15px" class="form-label">Departure Date</label>
                                                <input type="date" class="form-control" style="border-radius: 50px;"  aria-label="Departure Date">
                                              </div>
                                            </div>
                                            <div class="mb-4">
                                              <label for="FormControlStatus" style="padding-left: 15px" class="form-label">Status</label>
                                              <select class="form-select" style="border-radius: 50px; height:43px; font-size: 12px;" id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                <option value="1">Pay</option>
                                                <option value="2">Pending</option>
                                              </select>
                                            </div>
          
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-primary btn-rounded">Add</button>
                                          <button type="button" class="btn btn-secondary btn-rounded" data-bs-dismiss="modal">Cancel</button>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                  <i class="mdi mdi-delete me-2 text-danger"></i> Delete </a>
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