{{-- resources/views/admin/events/create.blade.php (gunakan pola ini untuk edit.blade.php juga) --}}

@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">{{ isset($event) ? 'Edit Event: ' . $event->name : 'Buat Event Baru' }}</h1>
    
    <div class="card shadow mb-4">
        <div class="card-body">
            
            {{-- Form untuk CREATE atau EDIT --}}
            <form action="{{ isset($event) ? route('admin.events.update', $event->id) : route('admin.events.store') }}" method="POST">
                @csrf
                @if(isset($event))
                    @method('PUT')
                @endif
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Nama Event</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $event->name ?? '') }}" required>
                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="location" class="form-label">Lokasi</label>
                        <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ old('location', $event->location ?? '') }}" required>
                        @error('location')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="start_date" class="form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{ old('start_date', $event->start_date ?? '') }}" required>
                        @error('start_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="end_date" class="form-label">Tanggal Selesai</label>
                        <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" value="{{ old('end_date', $event->end_date ?? '') }}" required>
                        @error('end_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi Event (Gunakan CKEditor)</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="8">{{ old('description', $event->description ?? '') }}</textarea>
                    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <hr class="mt-4">
                <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">{{ isset($event) ? 'Update Event' : 'Simpan Event' }}</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
{{-- Script untuk CKEditor harus ada di layout Admin Anda --}}
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script> {{-- Sesuaikan path --}}
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush