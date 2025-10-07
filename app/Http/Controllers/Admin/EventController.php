<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Str; // Untuk generate QR code string

class EventController extends Controller
{
    /**
     * Middleware/Pengecekan Akses Admin.
     */
    public function __construct()
    {
        // Pastikan pengguna yang login adalah Admin untuk semua fungsi di controller ini
        $this->middleware(function ($request, $next) {
            if (!auth()->check() || !auth()->user()->isAdmin()) {
                abort(403, 'Akses Ditolak. Anda bukan Admin.');
            }
            return $next($request);
        });
    }

    /**
     * Menampilkan daftar semua Event.
     */
    public function index()
    {
        $events = Event::withCount(['presentations', 'participantRegistrations'])->latest()->get();
        return view('admin.events.index', compact('events'));
    }

    /**
     * Menampilkan formulir untuk membuat Event baru.
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Menyimpan Event baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required', // Dari CKEditor
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'location' => 'required|string|max:255',
            // 'qr_code' tidak divalidasi karena dibuat sistem
        ]);

        Event::create($request->all());

        return redirect()->route('admin.events.index')->with('success', 'Event baru berhasil dibuat dan menunggu persetujuan.');
    }

    /**
     * Menampilkan formulir untuk mengedit Event.
     */
    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    /**
     * Memperbarui Event di database.
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'location' => 'required|string|max:255',
        ]);

        $event->update($request->all());

        return redirect()->route('admin.events.index')->with('success', 'Event berhasil diperbarui.');
    }

    /**
     * Menghapus Event dari database.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Event berhasil dihapus.');
    }
    
    // ------------------------------------------------------------------------
    // CUSTOM WORKFLOW: APPROVAL
    // ------------------------------------------------------------------------

    /**
     * Menyetujui Event dan membuat QR Code.
     */
    public function approve(Event $event)
    {
        if ($event->approved) {
            return back()->with('warning', 'Event sudah disetujui sebelumnya.');
        }

        // 1. Set status persetujuan
        $event->approved = true;

        // 2. Generate Unique QR Code (String)
        if (empty($event->qr_code)) {
            $event->qr_code = 'EVENT-' . Str::upper(Str::random(10));
        }
        
        $event->save();

        return back()->with('success', 'Event berhasil disetujui. QR Code telah digenerate.');
    }
    
    /**
     * Menolak Event.
     */
    public function reject(Event $event)
    {
        $event->approved = false;
        $event->save();

        return back()->with('info', 'Event berhasil ditolak/dikembalikan ke status pending.');
    }
}