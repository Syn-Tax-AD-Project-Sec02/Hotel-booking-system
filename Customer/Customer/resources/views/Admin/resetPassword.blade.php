<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/styleCust.css') }}">
</head>
<body>
    <div class="reset-password-container">
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <!-- Hidden field for the token -->
            <input type="hidden" name="token" value="{{ $token }}">

            <h1>Reset Password</h1>
            <p>Enter your new password below.</p>

    
            <input type="password" name="password" placeholder="New Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

            <button type="submit">Reset Password</button>
            <a href="{{ url('/login') }}" class="ghost">Back to Sign In</a>
        </form>
    </div>
</body>
</html>
