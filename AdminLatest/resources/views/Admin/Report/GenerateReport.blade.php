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
                        <x-breadcrumbs title="Dashboard" subtitle="Generate Report" />
                    </div>

                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Report Generator Form -->
                                    <h4 class="card-title">Report Generator</h4>
                                    <form method="POST" action="{{ route('generatePDF') }}">
                                        @csrf
                                        <div class="d-flex justify-content-start align-items-center mb-4">
                                            {{-- <div class="me-3">
                                                <label for="reportStartDate" class="form-label">Start Date:</label>
                                                <input type="date" class="form-control" name="startDate"
                                                    id="reportStartDate" required />
                                            </div>
                                            <div class="me-3">
                                                <label for="reportEndDate" class="form-label">End Date:</label>
                                                <input type="date" class="form-control" name="endDate"
                                                    id="reportEndDate" required />
                                            </div>
                                            <div class="me-3">
                                                <label for="reportType" class="form-label">Report Type:</label>
                                                <select class="form-select" name="reportType" id="reportType">
                                                    <option value="summary">Summary</option>
                                                    <option value="detailed">Detailed</option>
                                                </select>
                                            </div> --}}
                                            <div>
                                                <button type="submit" class="btn btn-primary btn-rounded shadow mt-4">
                                                    Generate PDF
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
</body>

</html>
