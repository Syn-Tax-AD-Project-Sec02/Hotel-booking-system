<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
</head>
<body>
    <h1>Password Reset Request</h1>
    <p>Dear user,</p>
    <p>We received a request to reset the password for your account.</p>
    <p>If you didn't make this request, please ignore this email. Otherwise, click the link below to reset your password:</p>
    <p><a href="{{ url('/user/resetPassword/' . $email) }}">Reset Password</a></p>
    <p>Thank you!</p>
</body>
</html>
