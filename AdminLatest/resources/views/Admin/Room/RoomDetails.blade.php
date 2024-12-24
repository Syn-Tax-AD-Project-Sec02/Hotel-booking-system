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
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/staff-list') }}">
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
                          <li class="breadcrumb-item active" aria-current="page">Booking</li>
                      </ol>
                  </nav>
              </div>
            </div>
            
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body ">

                    @if(session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                  @endif

                  @if($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                    
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
                                <form action="{{ route('RoomDetailsForm') }}" method="POST" enctype="multipart/form-data" >                                  
                                 @csrf
                                 <div class="mb-4">
                                  <label for="Image" class="form-label">Room Image</label>
                                  <input type="file" class="form-control" name="Image[]" id="Image" accept="image/*" multiple>

                              </div> 
                                  <div class="mb-4">
                                    <label for="exampleFormControlInput1" style="padding-left: 15px" class="form-label">Type of Room</label>
                                    <select class="form-select" name="TypeRoom" style=" 50px; height:43px; font-size: 12px;" id="inputGroupSelect01">
                                      <option selected>Choose...</option>
                                      <option value="Single">Single</option>
                                      <option value="Standard">Standard</option>
                                      <option value="Deluxe">Deluxe</option>
                                      <option value="Scholars">Scholars</option>
                                      <option value="Suite">Suite</option>
                                    </select>
                                  </div>
                                    <label for="FormControlName" style="padding-left: 15px" class="form-label">Facilities</label>
                                    {{-- <textarea class="form-control" name="Facilities" id="exampleFormControlTextarea1" rows="3"></textarea> --}}
                                    <div>
                                      <input type="checkbox" name="facilities[]" value="1 Master Bedroom with Queen Size Bed">
                                      <label for="facility1">🛌 1 Master Bedroom with Queen Size Bed</label>
                                    </div>
                                    <div>
                                      <input type="checkbox" id="facility2" name="facilities[]" value="2 Standard Bedroom with Single Beds">
                                      <label for="facility2">🛌 2 Standard Bedroom with Single Beds</label>
                                    </div>
                                    <div>
                                      <input type="checkbox" id="facility3" name="facilities[]" value="Bedroom with 1 Queen-sized Bed">
                                      <label for="facility3">🛏️ Bedroom with 1 Queen-sized Bed</label>
                                    </div>
                                    <div>
                                      <input type="checkbox" id="facility4" name="facilities[]" value="Air Conditioned">
                                      <label for="facility4">❄️ Air Conditioned</label>
                                    </div>
                                    <div>
                                    <input type="checkbox" id="facility15" name="facilities[]" value="Fan">
                                    <label for="facility15">🌀 Fan</label>
                                  </div>
                                  <div>
                                      <input type="checkbox" id="facility5" name="facilities[]" value="Free Wi-Fi">
                                      <label for="facility5">📶 Free Wi-Fi</label>
                                  </div>
                                  <div>
                                      <input type="checkbox" id="facility6" name="facilities[]" value="Bathroom with Water Heater">
                                      <label for="facility6">🚿 Bathroom with Water Heater</label>
                                  </div>
                                  <div>
                                      <input type="checkbox" id="facility7" name="facilities[]" value="Complimentary Toiletries">
                                      <label for="facility7">🧴 Complimentary Toiletries</label>
                                  </div>                                  <div class="mb-4">

                                  <div>
                                      <input type="checkbox" id="facility8" name="facilities[]" value="Flat Screen LCD/LED TV">
                                      <label for="facility8">📺 Flat Screen LCD/LED TV</label>
                                  </div>
                                  <div>
                                      <input type="checkbox" id="facility9" name="facilities[]" value="Iron & Ironing Board">
                                      <label for="facility9">🧹 Iron & Ironing Board</label>
                                  </div>
                                  <div>
                                      <input type="checkbox" id="facility10" name="facilities[]" value="Prayer Mat">
                                      <label for="facility10">🕌 Prayer Mat</label>
                                  </div>
                                  <div>
                                      <input type="checkbox" id="facility11" name="facilities[]" value="Microwave">
                                      <label for="facility11">🍴 Microwave</label>
                                  </div>
                                  <div>
                                      <input type="checkbox" id="facility12" name="facilities[]" value="Refrigerator">
                                      <label for="facility12">❄️ Refrigerator</label>
                                  </div>
                                  <div>
                                      <input type="checkbox" id="facility13" name="facilities[]" value="Room Service">
                                      <label for="facility13">🛎️ Room Service</label>
                                  </div>
                                  <div>
                                      <input type="checkbox" id="facility14" name="facilities[]" value="Towels">
                                      <label for="facility14">🧼 Towels</label>
                                  </div>
                                  </div>
                                  <div class="mb-4">
                                    <label for="FormControlName" style="padding-left: 15px" class="form-label">Rate</label>
                                    <input type="text" class="form-control" name="Rate" placeholder="Rate" aria-label="Rate">
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
                          <th>Image</th>
                          <th>Room Type</th>
                          <th>Facilities</th>
                          <th>Rate</th>
                          <th>Availbility</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($rooms as $room)
                        <tr>
                          <td>{{ $loop->iteration + ($rooms->currentPage() - 1) * $rooms->perPage() }}</td>
                          <td style="width: 250px; text-align: center; vertical-align: middle;">
                            @if($room->ImagePath)
                            @php
                            $imagePaths = json_decode($room->ImagePath, true) ?? [];
                        @endphp
                        @if(count($imagePaths) > 0)
                        <div class="current-images" style="display: flex; flex-wrap: wrap; gap: 10px;">
                            @foreach($imagePaths as $index => $imagePath)
                                <div class="image-thumbnail" style="position: relative;">
                                    <img src="{{ asset('storage/' . $imagePath) }}" alt="Room Image" 
                                         style="width: 100px; height: 80px; object-fit: cover; border-radius: 5px;">
                                    <!-- Delete Button -->
                                    <form method="POST" action="{{ route('deleteImage') }}" style="position: absolute; top: 0; right: 0;">
                                      @csrf
                                      @method('DELETE')

                                      <input type="hidden" name="room_id" value="{{ $room->_id }}">
                                      <input type="hidden" name="imageIndex" value="{{ $index }}">

                                  
                                      <button type="submit" style="background: red; color: white; border: none; padding: 5px 8px; font-size: 12px; cursor: pointer;">
                                          X
                                      </button>
                                  </form>
                                  
                                  
                                  
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No images available</p>
                    @endif
                    </div>
                @else
                    <p>No images available</p>
                @endif
                        </td>
                        
                        
                          <td>{{ $room->TypeRoom }}</td>
                          <td>
                            @if($room->Facilities)
                                @php
                                    // Decode the JSON array into PHP array
                                    $facilities = json_decode($room->Facilities, true);
                                @endphp
                        
                                @if($facilities && count($facilities) > 0)
                                    @foreach($facilities as $facility)
                                        <p>{{ $facility }}</p>  <!-- Display each facility -->
                                    @endforeach
                                @else
                                    No facilities listed
                                @endif
                            @else
                                No facilities listed
                            @endif
                        </td>
                          <td>RM{{ $room->Rate }}</td>
                          <td>{{ $room->Availbility }}</td>
                          <td>
                            <!-- Dropdown Trigger -->
                            <a class="nav-link" id="dropdownMenuIconButton1" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="mdi mdi-dots-vertical"></i>
                            </a>

                            <!-- Dropdown Menu -->
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="dropdownMenuIconButton1">
                              <!-- Edit Option -->
                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalBookingU{{ $room->id }}">
                                <i class="mdi mdi-pencil me-2 text-info"></i> Edit
                              </a>

                              <!-- Divider -->
                              <div class="dropdown-divider"></div>

                              <!-- Delete Option -->
                              <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('deleteRoomForm{{ $room->_id }}').submit();">
                                <i class="mdi mdi-delete me-2 text-danger"></i> Delete
                            </a>
                            
                            <form id="deleteRoomForm{{ $room->_id }}" action="{{ route('deleteRoomDetails') }}" method="POST" style="display: none;">
                              @csrf
                              @method('DELETE')
                              <input type="hidden" name="room_id" value="{{ $room->_id }}">
                          </form>
                            </div>

                            <!-- Modal (Place Outside Dropdown Menu) -->
                            <div class="modal fade" id="modalBookingU{{ $room->id }}" tabindex="-1" aria-labelledby="modalBookingU{{ $room->id }}Label" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content" style="background-color: white;">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="modalBookingU{{ $room->id }}Label">Edit Room</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('updateRoomDetails') }}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <input type="hidden" name="room_id" value="{{ $room->id }}">
                                      <!-- Input Fields -->
                                      <div class="mb-4">
                                        <label for="Image" class="form-label">Room Image</label>
                                        <input type="file" class="form-control" name="Image[]" id="Image" accept="image/*" multiple>

                                      </div>
                                      <div class="mb-4">
                                        <label for="TypeRoom{{ $room->id }}" class="form-label">Type of Room</label>
                                        <select class="form-select" name="TypeRoom" id="TypeRoom{{ $room->id }}">
                                          <option value="Single" {{ $room->TypeRoom == 'Single' ? 'selected' : '' }}>Single</option>
                                          <option value="Standard" {{ $room->TypeRoom == 'Standard' ? 'selected' : '' }}>Standard</option>
                                          <option value="Deluxe" {{ $room->TypeRoom == 'Deluxe' ? 'selected' : '' }}>Deluxe</option>
                                          <option value="Scholars" {{ $room->TypeRoom == 'Scholars' ? 'selected' : '' }}>Scholars</option>
                                          <option value="Suite" {{ $room->TypeRoom == 'Suite' ? 'selected' : '' }}>Suite</option>
                                        </select>
                                      </div>
                                       <!-- Other Fields -->
                                       <div class="mb-4">
                                        <label for="Facilities{{ $room->id }}" class="form-label">Facilities</label>
                                        @php
                                            // Decode the JSON array into PHP array or use an empty array if null
                                            $facilities = json_decode($room->Facilities, true) ?? [];
                                        @endphp
                                        <div>
                                            <input type="checkbox" name="facilities[]" value="1 Master Bedroom with Queen Size Bed" 
                                            {{ in_array("1 Master Bedroom with Queen Size Bed", $facilities) ? 'checked' : '' }}>
                                            <label for="facility1">🛌 1 Master Bedroom with Queen Size Bed</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="facilities[]" value="2 Standard Bedroom with Single Beds" 
                                            {{ in_array("2 Standard Bedroom with Single Beds", $facilities) ? 'checked' : '' }}>
                                            <label for="facility2">🛌 2 Standard Bedroom with Single Beds</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="facilities[]" value="Bedroom with 1 Queen-sized Bed" 
                                            {{ in_array("Bedroom with 1 Queen-sized Bed", $facilities) ? 'checked' : '' }}>
                                            <label for="facility3">🛏️ Bedroom with 1 Queen-sized Bed</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="facilities[]" value="Air Conditioned" 
                                            {{ in_array("Air Conditioned", $facilities) ? 'checked' : '' }}>
                                            <label for="facility4">❄️ Air Conditioned</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="facilities[]" value="Fan" 
                                            {{ in_array("Fan", $facilities) ? 'checked' : '' }}>
                                            <label for="facility5">🌀 Fan</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="facilities[]" value="Free Wi-Fi" 
                                            {{ in_array("Free Wi-Fi", $facilities) ? 'checked' : '' }}>
                                            <label for="facility6">📶 Free Wi-Fi</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="facilities[]" value="Bathroom with Water Heater" 
                                            {{ in_array("Bathroom with Water Heater", $facilities) ? 'checked' : '' }}>
                                            <label for="facility7">🚿 Bathroom with Water Heater</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="facilities[]" value="Complimentary Toiletries" 
                                            {{ in_array("Complimentary Toiletries", $facilities) ? 'checked' : '' }}>
                                            <label for="facility8">🧴 Complimentary Toiletries</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="facilities[]" value="Flat Screen LCD/LED TV" 
                                            {{ in_array("Flat Screen LCD/LED TV", $facilities) ? 'checked' : '' }}>
                                            <label for="facility9">📺 Flat Screen LCD/LED TV</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="facilities[]" value="Iron & Ironing Board" 
                                            {{ in_array("Iron & Ironing Board", $facilities) ? 'checked' : '' }}>
                                            <label for="facility10">🧹 Iron & Ironing Board</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="facilities[]" value="Prayer Mat" 
                                            {{ in_array("Prayer Mat", $facilities) ? 'checked' : '' }}>
                                            <label for="facility11">🕌 Prayer Mat</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="facilities[]" value="Microwave" 
                                            {{ in_array("Microwave", $facilities) ? 'checked' : '' }}>
                                            <label for="facility12">🍴 Microwave</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="facilities[]" value="Refrigerator" 
                                            {{ in_array("Refrigerator", $facilities) ? 'checked' : '' }}>
                                            <label for="facility13">❄️ Refrigerator</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="facilities[]" value="Room Service" 
                                            {{ in_array("Room Service", $facilities) ? 'checked' : '' }}>
                                            <label for="facility14">🛎️ Room Service</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="facilities[]" value="Towels" 
                                            {{ in_array("Towels", $facilities) ? 'checked' : '' }}>
                                            <label for="facility15">🧼 Towels</label>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                      <label for="Rate{{ $room->id }}" class="form-label">Rate</label>
                                      <input type="text" class="form-control" name="Rate" id="Rate{{ $room->id }}" value="{{ $room->Rate }}">
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