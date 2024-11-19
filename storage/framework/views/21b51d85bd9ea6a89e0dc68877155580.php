<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <link rel="stylesheet" href="<?php echo e(asset('dist/assets/vendors/mdi/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/assets/vendors/ti-icons/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/assets/vendors/css/vendor.bundle.base.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/assets/vendors/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/assets/css/style.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('dist/assets/images/favicon.png')); ?>" />
</head>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-xl-4 mx-auto">
                        <div class="auth-form-light text-center p-5">
                            <div class="brand-logo">
                                <img src="<?php echo e(asset('dist/assets/images/LOGO-UTM.png')); ?>" alt="Logo">
                            </div>
                            <h3>Sign In</h3>
                            <form id="loginForm" action="<?php echo e(route('login.submit')); ?>" method="POST" onsubmit="return validateForm()">
                                <?php echo csrf_field(); ?> <!-- CSRF Token -->
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <p class="mb-0">Please choose:</p>
                                    </div>
                                    <div class="col d-flex">
                                        <div class="form-check me-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="admin"> Admin
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="staff"> Staff
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
                                </div>
                                <div class="mt-3 d-grid gap-2">
                                    <button type="submit" class="btn btn-primary mt-3">SIGN IN</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> Keep me signed in 
                                        </label>
                                    </div>
                                    <a href="<?php echo e(route('password.request')); ?>" class="auth-link text-primary">Forgot password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo e(asset('dist/assets/vendors/js/vendor.bundle.base.js')); ?>"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="<?php echo e(asset('dist/assets/js/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/assets/js/misc.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/assets/js/settings.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/assets/js/todolist.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/assets/js/jquery.cookie.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/assets/js/loginPage.js')); ?>"></script>
    <!-- endinject -->
</body>
</html>
<?php /**PATH C:\COMPUTER SCIENCE\SEM 3\Application Development\Scholars-Admin\resources\views/welcome.blade.php ENDPATH**/ ?>