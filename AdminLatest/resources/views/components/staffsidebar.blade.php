<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('dist/assets/images/faces/face1.jpg') }}" alt="profile" />
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
            <a class="nav-link" href="{{ url('staff/dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/staff-booking') }}">
                <span class="menu-title">Booking</span>
                <i class="mdi mdi-calendar-edit-outline menu-icon"></i>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <span class="menu-title">Guest</span>
                <i class="mdi mdi-clipboard-check-multiple-outline menu-icon"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/guest-list') }}">Guest List</a>
                    </li>
                </ul>
            </div>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-title">Room</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/staff-room-details') }}">Room Details</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/staff-room-lists') }}">Room List</a>
                    </li> --}}
                </ul>
            </div>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#staff-dropdown" aria-expanded="false"
                aria-controls="staff-dropdown">
                <span class="menu-title">Staff</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-outline menu-icon"></i>
            </a>
            <div class="collapse" id="staff-dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/staff-schedule') }}">Schedule</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/generate-report') }}">
                <span class="menu-title">Report</span>
                <i class="mdi mdi-tag-outline menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/contact/index') }}">
                <span class="menu-title">Contact Us</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li> --}}
    </ul>
</nav>
