<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile Staff</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link href="{{ asset('dist/assets/css/bootstrap/../bootstrap-icons/bootstrap-icons.css" rel="stylesheet" ') }}">
    <link href="{{ asset('dist/assets/css/bootstrap/js/bootstrap.bundle.min.js" rel="stylesheet"') }}">
    <link href="{{ asset('dist/assets/css/bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet"') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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
        <x-staffnavbar />
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <x-staffsidebar />

            <div class="main-panel">
                <div class="pagetitle">
                    <h1 style="padding-left: 50px; padding-top: 50px;">Profile</h1>

                </div>
                <! <!-- partial -->
                    <section class="section profile">
                        <div class="rowProfile" style="background: #f2edf3">
                            <div class="col-xl-4">

                                <div class="card">
                                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                        <img src="{{ asset('dist/assets/images/profile-img.jpg') }}" alt="Profile"
                                            class="rounded-circle">
                                        <h2>{{ $staff->name }}</h2>
                                        <h3>{{ $staff->position }}</h3>
                                        <div class="social-links mt-2">
                                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xl-8" style="margin-left">

                                <div class="card"style="margin-left: 20px ;">
                                    <div class="card-body pt-3">
                                        <!-- Bordered Tabs -->
                                        <ul class="nav nav-tabs nav-tabs-bordered">

                                            <li class="nav-item">
                                                <button class="nav-link active" data-bs-toggle="tab"
                                                    data-bs-target="#profile-overview">Overview</button>
                                            </li>

                                            <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#profile-edit">Edit Profile</button>
                                            </li>


                                            <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#profile-change-password">Change Password</button>
                                            </li>

                                        </ul>
                                        <div class="tab-content pt-2">

                                            <div class="tab-pane fade show active profile-overview"
                                                id="profile-overview">

                                                <h5 class="card-title">Profile Details</h5>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                                    <div class="col-lg-9 col-md-8">{{ $staff->name }}</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Position</div>
                                                    <div class="col-lg-9 col-md-8">{{ $staff->position }}</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Address</div>
                                                    <div class="col-lg-9 col-md-8">{{ $staff->address }}</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                                    <div class="col-lg-9 col-md-8">{{ $staff->phone }}</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                                    <div class="col-lg-9 col-md-8">{{ $staff->email }}</div>
                                                </div>

                                            </div>

                                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                                <!-- Profile Edit Form -->
                                                <form action="{{ route('updateStaffDetails') }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <input type="hidden" name="staff_id" value="{{ $staff->id }}">
                                                    <div class="row mb-3">
                                                        <label for="profileImage"
                                                            class="col-md-4 col-lg-3 col-form-label">Profile
                                                            Image</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <img src="{{ asset('dist/assets/images/profile-img.jpg') }}"
                                                                alt="Profile">
                                                            <div class="pt-2">
                                                                <a href="#" class="btn btn-primary btn-sm"
                                                                    title="Upload new profile image"><i
                                                                        class="bi bi-upload"></i></a>
                                                                <a href="#" class="btn btn-danger btn-sm"
                                                                    title="Remove my profile image"><i
                                                                        class="bi bi-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="fullName"
                                                            class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="name" type="text" class="form-control"
                                                                id="name{{ $staff->id }}"
                                                                value="{{ $staff->name }}">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="Position"
                                                            class="col-md-4 col-lg-3 col-form-label">Position</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="position" type="text"
                                                                class="form-control" id="position{{ $staff->id }}"
                                                                value="{{ $staff->position }}">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="Address"
                                                            class="col-md-4 col-lg-3 col-form-label">Address</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="address" type="text" class="form-control"
                                                                id="address{{ $staff->id }}"
                                                                value="{{ $staff->address }}">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="Phone"
                                                            class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="phone" type="text" class="form-control"
                                                                id="phone{{ $staff->id }}"
                                                                value="{{ $staff->phone }}">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="email"
                                                            class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="email" type="text" class="form-control"
                                                                id="email{{ $staff->id }}"
                                                                value="{{ $staff->email }}">
                                                        </div>
                                                    </div>

                                                    <div class="text-center">
                                                        <button type="submit" name="editBtn"
                                                            class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form>
                                                <!-- End Profile Edit Form -->

                                            </div>

                                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                                <!-- Change Password Form -->
                                                <form id="changePasswordForm" action="{{ route('changePassStaff') }}"
                                                    method="POST">
                                                    @csrf

                                                    @if (session('success'))
                                                        <script>
                                                            Swal.fire({
                                                                icon: 'success',
                                                                title: 'Success',
                                                                text: "{{ session('success') }}",
                                                                confirmButtonText: 'OK'
                                                            });
                                                        </script>
                                                    @endif

                                                    @if (session('error'))
                                                        <script>
                                                            Swal.fire({
                                                                icon: 'error',
                                                                title: 'Error',
                                                                text: "{{ session('error') }}",
                                                                confirmButtonText: 'Try Again'
                                                            });
                                                        </script>
                                                    @endif

                                                    <div class="row mb-3">
                                                        <label for="currentPassword"
                                                            class="col-md-4 col-lg-3 col-form-label">Current
                                                            Password</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="currentPassword" type="password"
                                                                class="form-control" id="currentPassword">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="newPassword"
                                                            class="col-md-4 col-lg-3 col-form-label">New
                                                            Password</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="newPassword" type="password"
                                                                class="form-control" id="newPassword">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="renewPassword"
                                                            class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                                            Password</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="confirmPassword" type="password"
                                                                class="form-control" id="renewPassword">
                                                        </div>
                                                    </div>

                                                    <div class="text-center">
                                                        <button type="submit" name="changePassBtn"
                                                            class="btn btn-primary">Change Password</button>

                                                    </div>
                                                </form><!-- End Change Password Form -->

                                            </div>

                                        </div><!-- End Bordered Tabs -->

                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>



                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                                2023 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All
                                rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted &
                                made with <i class="mdi mdi-heart text-danger"></i></span>
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
    <script src="{{ asset('dist/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('dist/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('dist/assets/js/misc.js') }}"></script>
    <script src="{{ asset('dist/assets/js/settings.js') }}"></script>
    <script src="{{ asset('dist/assets/js/todolist.js') }}"></script>
    <script src="{{ asset('dist/assets/js/jquery.cookie.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
</body>

</html>
