<!DOCTYPE html>
<html>
<head>
    <title>Your Staff Account Details</title>
</head>
<body>
    <h1>Hello, {{ $staffName }}</h1>
    <p>You have been successfully added as a staff member at our company. Here are your details:</p>

    <p><strong>Position:</strong> {{ $staffPosition }}</p>
    <p><strong>Password:</strong> {{ $password }}</p>

    <p>Please use the above password to log into your account. You can change your password after logging in.</p>

    <p>Thank you for joining our team!</p>
</body>
</html>
