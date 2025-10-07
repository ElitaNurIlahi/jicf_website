<?php

// app/Http/Controllers/Admin/DashboardController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use App\Models\Setting;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalRegistrations = Registration::count();
        $pendingCount = Registration::pending()->count();
        $approvedCount = Registration::approved()->count();
        $rejectedCount = Registration::rejected()->count();
        
        $maxCapacity = Setting::get('max_capacity', 300);
        $eventDate = Setting::get('event_date', Carbon::now()->addDays(30)->format('Y-m-d'));
        
        $recentRegistrations = Registration::latest()->take(10)->get();

        return view('admin.dashboard', compact(
            'totalRegistrations',
            'pendingCount',
            'approvedCount',
            'rejectedCount',
            'maxCapacity',
            'eventDate',
            'recentRegistrations'
        ));
    }
}