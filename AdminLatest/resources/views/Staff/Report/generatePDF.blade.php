<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking Report</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Booking ID</th>
                <th>Name</th>
                <th>Room No</th>
                <th>Room Type</th>
                <th>Check-In</th>
                <th>Check-Out</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bookings as $booking)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $booking->BookingID }}</td>
                    <td>{{ $booking->Name }}</td>
                    <td>{{ $booking->TypeRoom }}</td>
                    <td>{{ $booking->RoomNo }}</td>
                    <td>{{ $booking->CheckIn }}</td>
                    <td>{{ $booking->CheckOut }}</td>
                    {{-- <td>{{ $booking->Adults }} Adults {{ $booking->Children }}
                        Children</td> --}}
                    <td>{{ $booking->Phone }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">No bookings available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
