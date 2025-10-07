<?php

// app/Http/Controllers/Admin/SettingController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $maxCapacity = Setting::get('max_capacity', 300);
        $eventDate = Setting::get('event_date');

        return view('admin.settings', compact('maxCapacity', 'eventDate'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'max_capacity' => 'required|integer|min:1',
            'event_date' => 'required|date'
        ]);

        Setting::set('max_capacity', $request->max_capacity);
        Setting::set('event_date', $request->event_date);

        return back()->with('success', 'Pengaturan berhasil disimpan.');
    }
}