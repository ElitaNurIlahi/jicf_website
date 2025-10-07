<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Speaker;
use App\Models\Event; // Diperlukan untuk form create/edit

class SpeakerController extends Controller
{
    /**
     * Middleware/Pengecekan Akses Admin.
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!auth()->check() || !auth()->user()->isAdmin()) {
                abort(403, 'Akses Ditolak. Anda bukan Admin.');
            }
            return $next($request);
        });
    }

    /**
     * Menampilkan daftar semua Speaker.
     */
    public function index()
    {
        $speakers = Speaker::with('event')->latest()->get();
        return view('admin.speakers.index', compact('speakers'));
    }

    /**
     * Menampilkan formulir untuk membuat Speaker baru.
     */
    public function create()
    {
        $events = Event::where('approved', true)->get();
        return view('admin.speakers.create', compact('events'));
    }

    /**
     * Menyimpan Speaker baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:speakers,email',
            'bio' => 'required',
            'event_id' => 'required|exists:events,id',
        ]);

        Speaker::create($request->all());

        return redirect()->route('admin.speakers.index')->with('success', 'Speaker berhasil didaftarkan dan menunggu persetujuan.');
    }

    /**
     * Menampilkan formulir untuk mengedit Speaker.
     */
    public function edit(Speaker $speaker)
    {
        $events = Event::where('approved', true)->get();
        return view('admin.speakers.edit', compact('speaker', 'events'));
    }

    /**
     * Memperbarui Speaker di database.
     */
    public function update(Request $request, Speaker $speaker)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:speakers,email,' . $speaker->id,
            'bio' => 'required',
            'event_id' => 'required|exists:events,id',
        ]);

        $speaker->update($request->all());

        return redirect()->route('admin.speakers.index')->with('success', 'Speaker berhasil diperbarui.');
    }

    /**
     * Menghapus Speaker dari database.
     */
    public function destroy(Speaker $speaker)
    {
        $speaker->delete();
        return redirect()->route('admin.speakers.index')->with('success', 'Speaker berhasil dihapus.');
    }

    // ------------------------------------------------------------------------
    // CUSTOM WORKFLOW: APPROVAL
    // ------------------------------------------------------------------------

    /**
     * Menyetujui Speaker.
     */
    public function approve(Speaker $speaker)
    {
        $speaker->approved = true;
        $speaker->save();

        // Di sini Anda bisa menambahkan logika pengiriman email notifikasi ke speaker
        
        return back()->with('success', 'Speaker berhasil disetujui.');
    }

    /**
     * Menolak Speaker.
     */
    public function reject(Speaker $speaker)
    {
        $speaker->approved = false;
        $speaker->save();

        // Di sini Anda bisa menambahkan logika pengiriman email penolakan
        
        return back()->with('info', 'Speaker berhasil ditolak/dikembalikan ke status pending.');
    }
}