<!DOCTYPE html>
<html lang="en">

<x-headers.header_admin />

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <x-staffnavbar />
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->

            <x-staffsidebar />


            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <x-breadcrumbs title="Dashboard" subtitle="Contact Us" />
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="text-center my-4">Contact Messages</h4>

                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Message</th>
                                        <th>Received At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $message)
                                        <tr>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->phone_number }}</td>
                                            <td>{{ $message->message }}</td>
                                            <td>{{ $message->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            @if ($messages->isEmpty())
                                <p class="text-center">No messages found.</p>
                            @endif
                        </div>
                    </div>

                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <x-footers.footer />
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ asset('dist/assets/vendors/js/vendor.bundle.base.js') }}"></script><!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('dist/assets/js/off-canvas.js') }}"></script>
        <script src="{{ asset('dist/assets/js/misc.js') }}"></script>
        <script src="{{ asset('dist/assets/js/settings.js') }}"></script>
        <script src="{{ asset('dist/assets/js/todolist.js') }}"></script>
        <script src="{{ asset('dist/assets/js/jquery.cookie.js') }}"></script>
        <!-- Custom js for this page -->
        <!-- End custom js for this page -->
</body>

</html>
