<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Duty Scheduled</title>
</head>
<body>
    <h1>Hello {{ $schedule->name }}</h1>
    <p>You have been scheduled for a new duty.</p>
    <p><strong>Service:</strong> {{ $schedule->services }}</p>
    <p><strong>Room No:</strong> {{ $schedule->room_no }}</p>
    <p><strong>Date/Time:</strong> {{ $schedule->date_time }}</p>
    <p>Thank you for your dedication!</p>
</body>
</html>