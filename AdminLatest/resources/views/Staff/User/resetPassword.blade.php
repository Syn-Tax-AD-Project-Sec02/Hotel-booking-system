<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('dist/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('dist/assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller" >
      <div class="container-fluid page-body-wrapper full-page-wrapper" >
        <div class="content-wrapper d-flex align-items-center auth" >
          <div class="row flex-grow" >
            <div class="col-xl-4 mx-auto"  >
              <div class="auth-form-light text-center p-5" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1)">
              <div class=" logo lock ">
                  <img src="{{asset('dist/assets/images/lock.png')}}" style="width 70px; height: 70px">
                </div>
                <h3 class="mt-3">Create New Password</h3>
                
                <form action="{{ route('password.update') }}" method="POST">
                  @csrf
                  <input type="hidden" name="token" value="{{ old('token', request()->token) }}">

                  <input type="hidden" name="email" value="{{ old('email', $email) }}">
                  
                  <p class="mb-0">Your password must be different from previous used passwords</p>
                  
                
                  
                  
                  <div class="mt-3 form-group">
                      <input type="password" class="form-control form-control-lg"  name="password" placeholder="Enter Your New password" required>
                  </div>
                  <div class="mt-3 form-group">
                    <input type="password" class="form-control form-control-lg"  name="password_confirmation" placeholder="Confirm New Password" required>
                </div>
                  <div class="mt-3 d-grid gap-2">
                      <button type="submit" class="btn btn-primary mt-3">Reset Password</button>
                  </div>
                  <div class="mt-3 d-grid gap-2">
                      <a href="{{ url('/') }}" class="auth-link text-primary">Back to login</a>
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
    <script src="{{asset('dist/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('dist/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('dist/assets/js/misc.js')}}"></script>
    <script src="{{asset('dist/assets/js/settings.js')}}"></script>
    <script src="{{asset('dist/assets/js/todolist.js')}}"></script>
    <script src="{{asset('dist/assets/js/jquery.cookie.js')}}"></script>
    <script src="{{ asset ('../assets/js/loginPage.js')}}"></script>
    <script>
      @if(session('status'))
          Swal.fire({
              title: 'Success!',
              text: '{{ session('status') }}',
              icon: 'success',
              confirmButtonText: 'Okay'
          });
      @endif
  </script>
    <!-- endinject -->
  </body>
</html>