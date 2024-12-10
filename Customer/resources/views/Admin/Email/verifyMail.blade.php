<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>
    <h1>Hello, {{ $user->name }}</h1>
    <p>Thank you for registering! To complete your registration, please verify your email address by clicking the button below:</p>

    <a href="{{ route('verification.verify', ['id' => $user->id, 'hash' => $user->email_verification_token]) }}" style="background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Verify Email</a>

    <p>If you did not register, please ignore this email.</p>
    <p>Thank you for using our application!</p>
</body>
</html>
