<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Presentation;
use App\Models\Speaker;
use App\Models\Event;

class PresentationController extends Controller
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
     * Menampilkan daftar semua Presentasi.
     */
    public function index()
    {
        $presentations = Presentation::with(['speaker', 'event'])->latest()->get();
        return view('admin.presentations.index', compact('presentations'));
    }

    /**
     * Menampilkan formulir untuk membuat Presentasi baru.
     */
    public function create()
    {
        $events = Event::where('approved', true)->get();
        $speakers = Speaker::where('approved', true)->get();
        return view('admin.presentations.create', compact('events', 'speakers'));
    }

    /**
     * Menyimpan Presentasi baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required', // Konten dari CKEditor
            'speaker_id' => 'required|exists:speakers,id',
            'event_id' => 'required|exists:events,id',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        Presentation::create($request->all());

        return redirect()->route('admin.presentations.index')->with('success', 'Presentasi berhasil dibuat dan menunggu persetujuan.');
    }

    /**
     * Menampilkan formulir untuk mengedit Presentasi.
     */
    public function edit(Presentation $presentation)
    {
        $events = Event::where('approved', true)->get();
        $speakers = Speaker::where('approved', true)->get();
        return view('admin.presentations.edit', compact('presentation', 'events', 'speakers'));
    }

    /**
     * Memperbarui Presentasi di database.
     */
    public function update(Request $request, Presentation $presentation)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'speaker_id' => 'required|exists:speakers,id',
            'event_id' => 'required|exists:events,id',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        $presentation->update($request->all());

        return redirect()->route('admin.presentations.index')->with('success', 'Presentasi berhasil diperbarui.');
    }

    /**
     * Menghapus Presentasi dari database.
     */
    public function destroy(Presentation $presentation)
    {
        $presentation->delete();
        return redirect()->route('admin.presentations.index')->with('success', 'Presentasi berhasil dihapus.');
    }

    // ------------------------------------------------------------------------
    // CUSTOM WORKFLOW: APPROVAL
    // ------------------------------------------------------------------------

    /**
     * Menyetujui Presentasi (jadwal dan konten disetujui).
     */
    public function approve(Presentation $presentation)
    {
        $presentation->approved = true;
        $presentation->save();
        
        return back()->with('success', 'Presentasi berhasil disetujui dan masuk ke jadwal acara.');
    }

    /**
     * Menolak Presentasi.
     */
    public function reject(Presentation $presentation)
    {
        $presentation->approved = false;
        $presentation->save();
        
        return back()->with('info', 'Presentasi berhasil ditolak/dikembalikan ke status pending.');
    }
}