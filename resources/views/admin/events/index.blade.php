@extends('layouts.admin') {{-- Pastikan path layout Anda sudah benar --}}

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manajemen Event</h1>
        <a href="{{ route('admin.events.create') }}" class="btn btn-primary btn-icon-split">
            <span class="text">Tambah Event Baru</span>
        </a>
    </div>

    @include('components.status-messages') {{-- Untuk menampilkan session('success/warning/info') --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Event Tersedia</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Event</th>
                            <th>Tanggal Mulai</th>
                            <th>Status</th>
                            <th>QR Code</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $event->name }}</td>
                            <td>{{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }}</td>
                            <td>
                                @if ($event->approved)
                                    <span class="badge bg-success text-white">Disetujui</span>
                                @else
                                    <span class="badge bg-warning text-dark">Pending</span>
                                @endif
                            </td>
                            <td>
                                <small class="text-muted">{{ $event->qr_code ?? 'Belum ada' }}</small>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-sm btn-info" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>

                                {{-- FORM PERSETUJUAN --}}
                                @if (!$event->approved)
                                    <form action="{{ route('admin.events.approve', $event->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-success" title="Setujui">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('admin.events.reject', $event->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin menolak event ini? Ini akan menonaktifkannya dari publik.');">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger" title="Tolak/Tarik Persetujuan">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>
                                @endif

                                {{-- FORM DELETE --}}
                                <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus event {{ $event->name }} secara permanen?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection