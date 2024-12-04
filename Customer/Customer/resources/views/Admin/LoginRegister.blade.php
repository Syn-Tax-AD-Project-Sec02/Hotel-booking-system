<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('dist/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/assets/css/styleCust.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/style.css') }}">
</head>
<body>
<div class="container" id="container">
  <div class="form-container sign-up-container">
    <form method="POST" action="{{ route('register') }}">
      @csrf
      @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif
      <h1>Create Account</h1>
      <span>Please insert your details</span>
      <input type="text" placeholder="Name" name="name" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" required />
      <input type="text" placeholder="Phone" name="phone" required />
	  <select id="role" name="role" class="styled-dropdown" required>
		<option value="" disabled selected>Select Role</option>
    <option value="Public">Public</option>
		<option value="Student">Student</option>
		<option value="Staff">Staff</option>
      </select>
      <input type="text" id="matric-staff-number"  name="matricStaffNo" placeholder="Matric/Staff Number" style="display: none;" />
      <button>Sign Up</button>
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form method="POST" action="{{ route('login') }}">
      @csrf

      @if ($errors->any())
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> {{ $errors->first('email') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @endif

  @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
		<h1>Sign in</h1>
		<div class="social-container">
			<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
			<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
			<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
		</div>
		<span>or use your account</span>
    
		<input type="email" name="email" placeholder="Email" />
		<input type="password"  name="password" placeholder="Password" />
		<a href="{{ route('forgotPassword') }}">Forgot your password?</a>
		<button class"loginRegister">Sign In</button>
	</form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Welcome Back!</h1>
        <p>To keep connected with us please login with your personal info</p>
        <button class="ghost" id="signIn">Sign In</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Hello, Friend!</h1>
        <p>Enter your personal details and start your journey with us</p>
        <button class="ghost" id="signUp">Sign Up</button>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('dist/assets/js/login.js')}}"></script>
<script src="{{ asset('dist/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('dist/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('dist/assets/js/misc.js') }}"></script>
    <script src="{{ asset('dist/assets/js/settings.js') }}"></script>
    <script src="{{ asset('dist/assets/js/todolist.js') }}"></script>
    <script src="{{ asset('dist/assets/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('dist/assets/js/loginPage.js') }}"></script>
</body>
</html>