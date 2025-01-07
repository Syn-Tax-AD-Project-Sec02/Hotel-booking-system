<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room; // Example: Adjust based on your model

class ReportController extends Controller
{
    public function index()
    {
        return view('generateReport'); // Replace with the name of your Blade file
    }

    public function generate(Request $request)
    {
        // Validate request
        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'required|date|after_or_equal:startDate',
            'reportType' => 'required|string',
        ]);

        // Fetch data from database based on dates
        $rooms = Room::whereBetween('created_at', [$request->startDate, $request->endDate])
            ->get(); // Replace with your custom query logic

        // Return report as JSON or to a view
        return response()->json([
            'reportType' => $request->reportType,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'rooms' => $rooms,
        ]);
    }
}
