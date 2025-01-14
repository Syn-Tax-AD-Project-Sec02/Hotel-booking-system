<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\DB; // For database queries
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function showFormGenerateReport()
    {
        return view('Admin.Report.generateReport'); // Display the Generate Report Blade
    }

    // public function generatePDF(Request $request)
    // {
    //     $validated = $request->validate([
    //         'startDate' => 'required|date',
    //         'endDate' => 'required|date',
    //     ]);

    //     $startDate = $validated['startDate'];
    //     $endDate = $validated['endDate'];

    //     // Convert startDate and endDate to ISODate-compatible timestamps
    //     $startDateTimestamp = strtotime($startDate . ' 00:00:00') * 1000; // Start of day in milliseconds
    //     $endDateTimestamp =  strtotime($endDate . ' 23:59:59') * 1000;    // End of day in milliseconds

    //     // Fetch data from the MongoDB 'booking_list' collection
    //     $bookings = DB::collection('booking_list')
    //         ->whereBetween('created_at', [$startDateTimestamp, $endDateTimestamp])
    //         ->get()
    //         ->toArray();

    //     // Generate the PDF
    //     $pdf = PDF::loadView('pdf.bookingReport', [
    //         'startDate' => $startDate,
    //         'endDate' => $endDate,
    //         'bookings' => $bookings,
    //     ]);

    //     return $pdf->download('booking_report.pdf');
    // }

    public function generatePDF(Request $request)
    {
        $bookings = DB::table('booking_list')->get();


        $data = [
            'title' => 'Booking Report',
            'date' => date('d/m/y'),
            'bookings' => $bookings
        ];

        $pdf = PDF::loadview('Admin.Report.generatePDF', $data);
        return $pdf->download('booking_report.pdf');
    }
}
