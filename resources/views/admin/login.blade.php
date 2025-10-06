{{-- resources/views/admin/login.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - JICF 2025</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: linear-gradient(135deg, #0EA5E9 0%, #0284C7 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        .login-container { background: white; padding: 50px; border-radius: 16px; box-shadow: 0 20px 60px rgba(0,0,0,0.3); width: 100%; max-width: 450px; }
        h1 { font-size: 28px; margin-bottom: 10px; color: #1e293b; }
        p { color: #64748b; margin-bottom: 30px; }
        .form-group { margin-bottom: 20px; }
        label { display: block; font-weight: 600; margin-bottom: 8px; color: #334155; }
        input { width: 100%; padding: 12px 16px; border: 2px solid #e2e8f0; border-radius: 8px; font-size: 15px; transition: border 0.3s; }
        input:focus { outline: none; border-color: #0EA5E9; }
        .error { color: #ef4444; font-size: 14px; margin-top: 5px; }
        .btn-login { width: 100%; padding: 14px; background: linear-gradient(135deg, #0EA5E9 0%, #0284C7 100%); color: white; border: none; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer; transition: transform 0.2s; }
        .btn-login:hover { transform: translateY(-2px); }
        .remember { display: flex; align-items: center; gap: 8px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <p>Jakarta International Competition Forum 2025</p>

        @if($errors->any())
            <div style="background: #fee2e2; padding: 12px; border-radius: 8px; margin-bottom: 20px;">
                @foreach($errors->all() as $error)
                    <p class="error">{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="remember">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember" style="margin: 0;">Remember Me</label>
            </div>

            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
</body>
</html>

{{-- resources/views/admin/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin JICF</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #f1f5f9; }
        
        /* Sidebar */
        .sidebar { position: fixed; left: 0; top: 0; width: 260px; height: 100vh; background: #1e293b; color: white; padding: 20px 0; }
        .sidebar-header { padding: 0 20px 20px; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .sidebar-header h2 { font-size: 20px; margin-bottom: 5px; }
        .sidebar-header p { font-size: 13px; color: #94a3b8; }
        .sidebar-menu { padding: 20px 0; }
        .menu-item { display: block; padding: 12px 20px; color: #cbd5e1; text-decoration: none; transition: all 0.3s; }
        .menu-item:hover, .menu-item.active { background: rgba(14,165,233,0.1); color: #0EA5E9; }
        
        /* Main Content */
        .main-content { margin-left: 260px; padding: 30px; }
        .topbar { background: white; padding: 20px 30px; margin: -30px -30px 30px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); display: flex; justify-content: space-between; align-items: center; }
        .topbar h1 { font-size: 24px; color: #1e293b; }
        .user-menu { display: flex; gap: 15px; align-items: center; }
        .btn-logout { padding: 8px 20px; background: #ef4444; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 14px; }
        
        /* Stats Cards */
        .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 30px; }
        .stat-card { background: white; padding: 25px; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        .stat-card h3 { font-size: 14px; color: #64748b; margin-bottom: 10px; text-transform: uppercase; }
        .stat-card .number { font-size: 32px; font-weight: 700; color: #1e293b; }
        
        /* Table */
        .card { background: white; padding: 25px; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        table { width: 100%; border-collapse: collapse; }
        th { background: #f8fafc; padding: 12px; text-align: left; font-size: 13px; color: #64748b; text-transform: uppercase; }
        td { padding: 12px; border-bottom: 1px solid #f1f5f9; }
        .badge { padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; }
        .badge-pending { background: #fef3c7; color: #92400e; }
        .badge-approved { background: #d1fae5; color: #065f46; }
        .badge-rejected { background: #fee2e2; color: #991b1b; }
        .btn { padding: 6px 12px; border-radius: 6px; font-size: 13px; cursor: pointer; border: none; }
        .btn-primary { background: #0EA5E9; color: white; }
        .btn-success { background: #10b981; color: white; }
        .btn-danger { background: #ef4444; color: white; }
        .alert { padding: 12px 16px; border-radius: 8px; margin-bottom: 20px; }
        .alert-success { background: #d1fae5; color: #065f46; }
        .alert-error { background: #fee2e2; color: #991b1b; }
    </style>
    @yield('styles')
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>JICF Admin</h2>
            <p>Management Panel</p>
        </div>
        <div class="sidebar-menu">
            <a href="{{ route('admin.dashboard') }}" class="menu-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('admin.registrations.index') }}" class="menu-item {{ Request::is('admin/registrations*') ? 'active' : '' }}">Registrations</a>
            <a href="{{ route('admin.settings') }}" class="menu-item {{ Request::is('admin/settings') ? 'active' : '' }}">Settings</a>
        </div>
    </div>

    <div class="main-content">
        <div class="topbar">
            <h1>@yield('title')</h1>
            <div class="user-menu">
                <span>{{ auth('admin')->user()->name }}</span>
                <form method="POST" action="{{ route('admin.logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn-logout">Logout</button>
                </form>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        @yield('content')
    </div>
</body>
</html>

{{-- resources/views/admin/dashboard.blade.php --}}
@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="stats-grid">
    <div class="stat-card">
        <h3>Total Registrations</h3>
        <div class="number">{{ $totalRegistrations }}</div>
    </div>
    <div class="stat-card">
        <h3>Pending</h3>
        <div class="number" style="color: #f59e0b;">{{ $pendingCount }}</div>
    </div>
    <div class="stat-card">
        <h3>Approved</h3>
        <div class="number" style="color: #10b981;">{{ $approvedCount }} / {{ $maxCapacity }}</div>
    </div>
    <div class="stat-card">
        <h3>Rejected</h3>
        <div class="number" style="color: #ef4444;">{{ $rejectedCount }}</div>
    </div>
</div>

<div class="card">
    <h2 style="margin-bottom: 20px;">Recent Registrations</h2>
    <table>
        <thead>
            <tr>
                <th>Reg Number</th>
                <th>Name</th>
                <th>Email</th>
                <th>Organization</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recentRegistrations as $reg)
            <tr>
                <td>{{ $reg->registration_number }}</td>
                <td>{{ $reg->first_name }} {{ $reg->last_name }}</td>
                <td>{{ $reg->email }}</td>
                <td>{{ $reg->organization }}</td>
                <td>
                    <span class="badge badge-{{ $reg->status }}">{{ ucfirst($reg->status) }}</span>
                </td>
                <td>{{ $reg->created_at->format('d M Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

{{-- resources/views/admin/registrations/index.blade.php --}}
@extends('admin.layouts.app')

@section('title', 'Registrations Management')

@section('content')
<div class="card" style="margin-bottom: 20px;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2>All Registrations</h2>
        <form method="POST" action="{{ route('admin.registrations.bulk-send-qr') }}" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-primary" onclick="return confirm('Send QR Code to all approved participants?')">
                Bulk Send QR Code (H-3)
            </button>
        </form>
    </div>

    <div style="display: flex; gap: 15px; margin-bottom: 20px;">
        <form method="GET" style="display: flex; gap: 10px; flex: 1;">
            <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}" style="flex: 1; padding: 8px 12px; border: 2px solid #e2e8f0; border-radius: 6px;">
            <select name="status" style="padding: 8px 12px; border: 2px solid #e2e8f0; border-radius: 6px;">
                <option value="">All Status</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approved</option>
                <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
            <button type="submit" class="btn btn-primary">Filter</button>
            <a href="{{ route('admin.registrations.index') }}" class="btn" style="background: #6b7280; color: white;">Reset</a>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>Reg Number</th>
                <th>Name</th>
                <th>Email</th>
                <th>Organization</th>
                <th>Country</th>
                <th>Status</th>
                <th>QR Sent</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($registrations as $reg)
            <tr>
                <td>{{ $reg->registration_number }}</td>
                <td>{{ $reg->first_name }} {{ $reg->last_name }}</td>
                <td>{{ $reg->email }}</td>
                <td>{{ $reg->organization }}</td>
                <td>{{ $reg->country }}</td>
                <td>
                    <span class="badge badge-{{ $reg->status }}">{{ ucfirst($reg->status) }}</span>
                </td>
                <td>{{ $reg->qr_sent_at ? $reg->qr_sent_at->format('d M Y') : '-' }}</td>
                <td>
                    <a href="{{ route('admin.registrations.show', $reg->id) }}" class="btn btn-primary">View</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" style="text-align: center; color: #64748b;">No registrations found</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        {{ $registrations->links() }}
    </div>
</div>
@endsection