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
                                    <!-- Header with Generate Report Button -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="card-title">Report Generator</h4>
                                    </div>

                                    <!-- Filters for Report Generation -->
                                    <div class="d-flex justify-content-start align-items-center mb-4">
                                        <div class="me-3">
                                            <label for="reportStartDate" class="form-label">Start Date:</label>
                                            <input type="date" class="form-control" id="reportStartDate" />
                                        </div>
                                        <div class="me-3">
                                            <label for="reportEndDate" class="form-label">End Date:</label>
                                            <input type="date" class="form-control" id="reportEndDate" />
                                        </div>
                                        <div class="me-3">
                                            <label for="reportType" class="form-label">Report Type:</label>
                                            <select class="form-select" id="reportType">
                                                <option value="summary">Summary</option>
                                                <option value="detailed">Detailed</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-primary btn-rounded shadow mt-4"
                                                onclick="generateReport()">Generate</button>
                                        </div>
                                    </div>

                                    <!-- Report Display -->
                                    <div id="reportContent">
                                        <!-- Table or visualization will be dynamically loaded here after report generation -->
                                    </div>
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

        <!-- Custom js for Report -->
        <script>
            function generateReport() {
                const startDate = document.getElementById("reportStartDate").value;
                const endDate = document.getElementById("reportEndDate").value;
                const reportType = document.getElementById("reportType").value;

                // Validate inputs
                if (!startDate || !endDate) {
                    alert("Please select both start and end dates.");
                    return;
                }

                // Fetch or generate report (this is where you'll integrate your backend logic)
                const reportContent = `
                    <h5>Report (${reportType})</h5>
                    <p>From: ${startDate} To: ${endDate}</p>
                    <!-- Add dynamically generated report content here -->
                `;
                document.getElementById("reportContent").innerHTML = reportContent;
            }
        </script>
</body>

</html>
