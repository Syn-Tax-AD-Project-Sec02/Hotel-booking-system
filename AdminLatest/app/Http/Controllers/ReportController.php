<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // For database queries
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function showFormGenerateReport()
    {
        return view('Admin.Report.generateReport'); // Display the Generate Report Blade
    }

    public function generatePDF(Request $request)
    {
        // Validate request
        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'required|date|after_or_equal:startDate',
            'reportType' => 'required|string',
        ]);

        // Fetch data based on filters
        $booking = new Booking;
        $booking->setTable('booking_list');

        $bookings = $booking->whereBetween('date', [$request->startDate, $request->endDate])
            ->get();

        // Load the appropriate view and generate the PDF
        $pdf = Pdf::loadView('pdf.bookingReport', [
            'bookings' => $bookings,
            'reportType' => $request->reportType,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
        ]);

        // Return the PDF as a response for download
        return $pdf->download('booking_report.pdf');
    }
}
