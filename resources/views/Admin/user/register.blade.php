<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
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
          <div class="container-fluid page-body-wrapper full-page-wrapper">
              <div class="content-wrapper d-flex align-items-center auth">
                  <div class="row flex-grow">
                      <div class="col-lg-4 mx-auto">
                          <div class="auth-form-light text-center p-5">
                              <div class="brand-logo">
                                  <img src="../../assets/images/LOGO-UTM.png" alt="logo">
                              </div>
                              <h3>Sign Up</h3>
                              <h6 class="font-weight-light">Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a></h6>
                              <form method="POST" action="{{ route('register') }}">
                                  @csrf
                                  <div class="form-group">
                                      <input type="text" class="form-control form-control-lg" name="username" placeholder="Username" value="{{ old('username') }}">
                                      @error('username')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                  </div>
                                  <div class="form-group">
                                      <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" value="{{ old('email') }}">
                                      @error('email')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                  </div>
                                  <div class="form-group">
                                      <select class="form-select form-select-lg" name="country">
                                          <option value="">Country</option>
                                          <option value="United States of America">United States of America</option>
                                          <option value="United Kingdom">United Kingdom</option>
                                          <option value="India">India</option>
                                          <option value="Germany">Germany</option>
                                          <option value="Argentina">Argentina</option>
                                      </select>
                                      @error('country')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                  </div>
                                  <div class="form-group">
                                      <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                                      @error('password')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                  </div>
                                  <div class="form-group">
                                      <input type="password" class="form-control form-control-lg" name="confirmPassword" placeholder="Confirm Password">
                                  </div>
                                  <div class="mb-4">
                                      <div class="form-check">
                                          <label class="form-check-label text-muted">
                                              <input type="checkbox" class="form-check-input" name="terms"> I agree to all Terms & Conditions
                                          </label>
                                      </div>
                                  </div>
                                  <div class="mt-3 d-grid gap-2">
                                      <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
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
    <script src="{{ asset('dist/assets/js/loginPage.js') }}"></script>
    <!-- endinject -->
  </body>
</html>