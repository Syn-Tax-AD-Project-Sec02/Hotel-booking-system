<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/styleCust.css') }}">
    <title>Forgot Password</title>
  </head>
  <body>
    <div class="forgot-password-container">
      <form method="POST" action="{{ route('forgotPassword') }}"  >
        @csrf

        @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
              
        <h1>Forgot Password</h1>
        <p>Enter your registered email, and we'll send you instructions to reset your password.</p>
        <input type="email" placeholder="Email" name="email"/>
        <button type="submit">Reset Password</button>
        <a href="{{ url('/login') }}" class="ghost">Back to Sign In</a>
      </form>
    </div>

</body>
</html>