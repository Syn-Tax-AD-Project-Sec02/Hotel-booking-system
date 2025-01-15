<!DOCTYPE html>
<html lang="en">

<x-headers.header_index />

<body>
    <!-- Navigation -->
    <x-staffnavbar />
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <x-staffsidebar />
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <x-breadcrumbs title="Dashboard" subtitle="Overview" />
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 stretch-card grid-margin position-relative">
                        <a href="{{ route('bookingStaffListsForm') }}" class="stretched-link"></a>
                        <div class="card bg-gradient-danger card-img-holder text-black">
                            <div class="card-body">
                                <img src="{{ asset('dist/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                                <h4 class="fs-6">Total Booking <i class="mdi mdi-chart-line mdi-24px float-end"></i></h4>
                                <h2 class="fs-3 ">{{ \App\Models\Booking::from('booking_list')->count() }}</h2>
                            </div>
                        </div>
                    </div>                                     
                    <div class="col-xl-3 col-sm-6 col-12 stretch-card grid-margin position-relative">
                        <a href="{{ route('RoomStaffListsForm') }}" class="stretched-link"></a>
                        <div class="card bg-gradient-info card-img-holder text-black">
                            <div class="card-body">
                                <img src="{{ asset('dist/assets/images/dashboard/circle.svg') }}"
                                    class="card-img-absolute" alt="circle-image" />
                                <h4 class="fs-6">Available Room<i
                                        class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                                </h4>
                                <h2 class="fs-3">{{
                                    \App\Models\Room::from('room_lists')->count() -
                                    \App\Models\Booking::from('booking_list')
                                        ->whereDate('CheckIn', '<=', now())
                                        ->whereDate('CheckOut', '>=', now())
                                        ->count()
                                }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 stretch-card grid-margin position-relative">
                        <a href="{{ route('GuestStaffListForm') }}" class="stretched-link"></a>
                        <div class="card bg-gradient-primary card-img-holder text-black">
                            <div class="card-body">
                                <img src="{{ asset('dist/assets/images/dashboard/circle.svg') }}"
                                    class="card-img-absolute " alt="circle-image" />
                                <h4 class="fs-6 ">Total Guest <i
                                        class="mdi mdi-account-outline mdi-24px float-end"></i>
                                </h4>
                                <h2 class="fs-3 ms-2">{{ \App\Models\Booking::from('users')->count() }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 stretch-card grid-margin position-relative">
                        <a href="{{ route('ScheduleStaffListForm') }}" class="stretched-link"></a>
                        <div class="card bg-gradient-warning card-img-holder text-black">
                            <div class="card-body">
                                <img src="{{ asset('dist/assets/images/dashboard/circle.svg') }}"
                                    class="card-img-absolute " alt="circle-image" />
                                <h4 class="fs-6 ">Schedule To Complete<i class="mdi mdi-timetable mdi-24px float-end"></i>
                                </h4>
                                <h2 class="fs-3 ms-2"> {{ \App\Models\Schedule::from('schedule')->where('status', 'In Progress')->count() }}</h2>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Visitors</h4>
                                <canvas id="areaChart" style="height:250px"></canvas>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="padding-bottom: 25px;">Room Booked</h4>

                                <div class="doughnutjs-wrapper d-flex justify-content-center">
                                    <canvas id="traffic-chart"></canvas>
                                </div>
                                <div id="traffic-chart-legend"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <x-footers.footer />
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('dist/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('dist/assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('dist/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('dist/assets/js/misc.js') }}"></script>
    <script src="{{ asset('dist/assets/js/settings.js') }}"></script>
    <script src="{{ asset('dist/assets/js/todolist.js') }}"></script>
    <script src="{{ asset('dist/assets/js/jquery.cookie.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('dist/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('dist/assets/js/chart.js') }}"></script>
    <script src="{{ asset('dist/assets/assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('dist/assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/chart.morris.js') }}"></script>
    <script src="{{ asset('dist/assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- End custom js for this page -->
</body>

</html>
