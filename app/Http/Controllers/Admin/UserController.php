<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Middleware/Pengecekan Akses Admin.
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            // Kita hanya izinkan Admin yang mengakses pengelolaan pengguna
            if (!auth()->check() || !auth()->user()->isAdmin()) {
                abort(403, 'Akses Ditolak. Anda bukan Admin.');
            }
            return $next($request);
        });
    }

    /**
     * Menampilkan daftar semua User.
     */
    public function index()
    {
        // Tampilkan semua user kecuali user yang sedang login
        $users = User::where('id', '!=', auth()->id())->latest()->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Menampilkan formulir untuk membuat User baru (oleh admin).
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Menyimpan User baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'role' => ['required', Rule::in(['admin', 'speaker', 'participant'])],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil ditambahkan.');
    }

    /**
     * Menampilkan formulir untuk mengedit User.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Memperbarui User di database (termasuk mengganti role).
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => 'nullable|min:8|confirmed',
            'role' => ['required', Rule::in(['admin', 'speaker', 'participant'])],
        ]);

        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ];

        // Hanya update password jika ada input baru
        if ($request->filled('password')) {
            $userData['password'] = Hash::make($request->password);
        }

        $user->update($userData);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil diperbarui.');
    }

    /**
     * Menghapus User dari database.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User berhasil dihapus.');
    }
}