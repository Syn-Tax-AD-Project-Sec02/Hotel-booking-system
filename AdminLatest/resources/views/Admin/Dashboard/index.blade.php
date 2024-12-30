<!DOCTYPE html>
<html lang="en">

<x-headers.header_index />

<body>
    <!-- Navigation -->
    <x-navbar />
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <x-sidebar />
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <x-breadcrumbs title="Dashboard" subtitle="Overview" />
                </div>
                <div class="row">
                    <div class=" col-xl-3 col-sm-6 col-12 stretch-card grid-margin">
                        <div class="card bg-gradient-danger card-img-holder text-white ">
                            <div class="card-body">
                                <img src="{{ asset('dist/assets/images/dashboard/circle.svg') }}"
                                    class="card-img-absolute" alt="circle-image" />
                                <h4 class="fs-6">Total Booking <i class="mdi mdi-chart-line mdi-24px float-end"></i>
                                </h4>
                                <h2 class="fs-3 ">200</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 stretch-card grid-margin">
                        <div class="card bg-gradient-info card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{ asset('dist/assets/images/dashboard/circle.svg') }}"
                                    class="card-img-absolute" alt="circle-image" />
                                <h4 class="fs-6">Available Room<i
                                        class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                                </h4>
                                <h2 class="fs-3">80</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 stretch-card grid-margin">
                        <div class="card bg-gradient-success card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{ asset('dist/assets/images/dashboard/circle.svg') }}"
                                    class="card-img-absolute" alt="circle-image" />
                                <h4 class="fs-6">Total Sales <i class="mdi mdi-diamond mdi-24px float-end"></i>
                                </h4>
                                <h2 class="fs-3 ">RM 95000</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 stretch-card grid-margin">
                        <div class="card bg-gradient-secondary card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{ asset('dist/assets/images/dashboard/circle.svg') }}"
                                    class="card-img-absolute " alt="circle-image" />
                                <h4 class="fs-6 ">Weekly Orders <i
                                        class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                                </h4>
                                <h2 class="fs-3 ms-2">45,6334</h2>
                            </div>
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

                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Tickets</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th> Assignee </th>
                                                <th> Subject </th>
                                                <th> Status </th>
                                                <th> Last Update </th>
                                                <th> Tracking ID </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('dist/assets/images/faces/face1.jpg') }}"
                                                        class="me-2" alt="image"> David Grey
                                                </td>
                                                <td> Fund is not recieved </td>
                                                <td>
                                                    <label class="badge badge-gradient-success">DONE</label>
                                                </td>
                                                <td> Dec 5, 2017 </td>
                                                <td> WD-12345 </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('dist/assets/images/faces/face2.jpg') }}"
                                                        class="me-2" alt="image"> Stella Johnson
                                                </td>
                                                <td> High loading time </td>
                                                <td>
                                                    <label class="badge badge-gradient-warning">PROGRESS</label>
                                                </td>
                                                <td> Dec 12, 2017 </td>
                                                <td> WD-12346 </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('dist/assets/images/faces/face3.jpg') }}"
                                                        class="me-2" alt="image"> Marina Michel
                                                </td>
                                                <td> Website down for one week </td>
                                                <td>
                                                    <label class="badge badge-gradient-info">ON HOLD</label>
                                                </td>
                                                <td> Dec 16, 2017 </td>
                                                <td> WD-12347 </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('dist/assets/images/faces/face4.jpg') }}"
                                                        class="me-2" alt="image"> John Doe
                                                </td>
                                                <td> Loosing control on server </td>
                                                <td>
                                                    <label class="badge badge-gradient-danger">REJECTED</label>
                                                </td>
                                                <td> Dec 3, 2017 </td>
                                                <td> WD-12348 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body p-0 d-flex">
                                <div id="inline-datepicker" class="datepicker datepicker-custom"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Updates</h4>
                                <div class="d-flex">
                                    <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                                        <i class="mdi mdi-account-outline icon-sm me-2"></i>
                                        <span>jack Menqu</span>
                                    </div>
                                    <div class="d-flex align-items-center text-muted font-weight-light">
                                        <i class="mdi mdi-clock icon-sm me-2"></i>
                                        <span>October 3rd, 2018</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 pe-1">
                                        <img src="{{ asset('dist/assets/images/dashboard/img_1.jpg') }}"
                                            class="mb-2 mw-100 w-100 rounded" alt="image">
                                        <img src="{{ asset('dist/assets/images/dashboard/img_4.jpg"') }} class="mw-100
                                            w-100 rounded" alt="image">
                                    </div>
                                    <div class="col-6 ps-1">
                                        <img src="{{ asset('dist/assets/images/dashboard/img_2.jpg') }}"
                                            class="mb-2 mw-100 w-100 rounded" alt="image">
                                        <img src="{{ asset('dist/assets/images/dashboard/img_3.jpg') }}"
                                            class="mw-100 w-100 rounded" alt="image">
                                    </div>
                                </div>
                                <div class="d-flex mt-5 align-items-top">
                                    <img src="{{ asset('dist/assets/images/faces/face3.jpg') }}"
                                        class="img-sm rounded-circle me-3" alt="image">
                                    <div class="mb-0 flex-grow">
                                        <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                                        <p class="mb-0 font-weight-light">It is a long established fact that a
                                            reader will be distracted by the readable content of a page.</p>
                                    </div>
                                    <div class="ms-auto">
                                        <i class="mdi mdi-heart-outline text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Project Status</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> Name </th>
                                                <th> Due Date </th>
                                                <th> Progress </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 1 </td>
                                                <td> Herman Beck </td>
                                                <td> May 15, 2015 </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-success"
                                                            role="progressbar" style="width: 25%" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 2 </td>
                                                <td> Messsy Adam </td>
                                                <td> Jul 01, 2015 </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-danger"
                                                            role="progressbar" style="width: 75%" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 3 </td>
                                                <td> John Richards </td>
                                                <td> Apr 12, 2015 </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-warning"
                                                            role="progressbar" style="width: 90%" aria-valuenow="90"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 4 </td>
                                                <td> Peter Meggik </td>
                                                <td> May 15, 2015 </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-primary"
                                                            role="progressbar" style="width: 50%" aria-valuenow="50"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 5 </td>
                                                <td> Edward </td>
                                                <td> May 03, 2015 </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-danger"
                                                            role="progressbar" style="width: 35%" aria-valuenow="35"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 5 </td>
                                                <td> Ronald </td>
                                                <td> Jun 05, 2015 </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-info" role="progressbar"
                                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-dark">Todo List</h4>
                                <div class="add-items d-flex">
                                    <input type="text" class="form-control todo-list-input"
                                        placeholder="What do you need to do today?">
                                    <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                        id="add-task">Add</button>
                                </div>
                                <div class="list-wrapper">
                                    <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Meeting with Alisa
                                                </label>
                                            </div>
                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                        </li>
                                        <li class="completed">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox" checked> Call John
                                                </label>
                                            </div>
                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Create invoice
                                                </label>
                                            </div>
                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Print Statements
                                                </label>
                                            </div>
                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                        </li>
                                        <li class="completed">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox" checked> Prepare for
                                                    presentation </label>
                                            </div>
                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Pick up kids from
                                                    school </label>
                                            </div>
                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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
