<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Admin.Dashboard.index');  // Ensure this points to resources/views/dashboard.blade.php
    }
}