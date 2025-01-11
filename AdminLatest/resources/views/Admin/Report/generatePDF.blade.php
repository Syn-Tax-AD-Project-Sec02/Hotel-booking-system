<!DOCTYPE html>
<html>

<head>
    <title>Booking Report</title>
</head>

<body>
    <h1>{{ $reportType }} Report</h1>
    <p>Date Range: {{ $startDate }} - {{ $endDate }}</p>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Booking ID</th>
                <th>Guest Name</th>
                <th>Room</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking['_id'] }}</td>
                    <td>{{ $booking['guest_name'] }}</td>
                    <td>{{ $booking['room'] }}</td>
                    <td>{{ $booking['date'] }}</td>
                    <td>{{ $booking['status'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
