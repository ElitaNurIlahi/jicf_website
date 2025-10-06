{{-- resources/views/admin/registrations/show.blade.php --}}
@extends('admin.layouts.app')

@section('title', 'Registration Detail')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h2>Registration Detail</h2>
        <a href="{{ route('admin.registrations.index') }}" class="btn" style="background: #6b7280; color: white;">Back</a>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div>
            <h3 style="margin-bottom: 15px; color: #1e293b;">Personal Information</h3>
            <table style="width: 100%;">
                <tr><td style="padding: 10px 0; color: #64748b;">Registration Number</td><td style="font-weight: 600;">{{ $registration->registration_number }}</td></tr>
                <tr><td style="padding: 10px 0; color: #64748b;">Full Name</td><td style="font-weight: 600;">{{ $registration->first_name }} {{ $registration->last_name }}</td></tr>
                <tr><td style="padding: 10px 0; color: #64748b;">Email</td><td>{{ $registration->email }}</td></tr>
                <tr><td style="padding: 10px 0; color: #64748b;">Phone</td><td>{{ $registration->phone }}</td></tr>
                <tr><td style="padding: 10px 0; color: #64748b;">Organization</td><td>{{ $registration->organization }}</td></tr>
                <tr><td style="padding: 10px 0; color: #64748b;">Country</td><td>{{ $registration->country }}</td></tr>
                <tr><td style="padding: 10px 0; color: #64748b;">Role</td><td>{{ $registration->role }}</td></tr>
                <tr><td style="padding: 10px 0; color: #64748b;">Registered At</td><td>{{ $registration->created_at->format('d M Y H:i') }}</td></tr>
            </table>
        </div>

        <div>
            <h3 style="margin-bottom: 15px; color: #1e293b;">Status Information</h3>
            <table style="width: 100%;">
                <tr>
                    <td style="padding: 10px 0; color: #64748b;">Status</td>
                    <td><span class="badge badge-{{ $registration->status }}">{{ ucfirst($registration->status) }}</span></td>
                </tr>
                @if($registration->approved_at)
                <tr><td style="padding: 10px 0; color: #64748b;">Approved At</td><td>{{ $registration->approved_at->format('d M Y H:i') }}</td></tr>
                <tr><td style="padding: 10px 0; color: #64748b;">Approved By</td><td>{{ $registration->approvedBy->name ?? '-' }}</td></tr>
                @endif
                @if($registration->rejection_reason)
                <tr><td style="padding: 10px 0; color: #64748b;">Rejection Reason</td><td>{{ $registration->rejection_reason }}</td></tr>
                @endif
                <tr><td style="padding: 10px 0; color: #64748b;">QR Code</td><td>{{ $registration->qr_code ? 'Generated' : 'Not Generated' }}</td></tr>
                <tr><td style="padding: 10px 0; color: #64748b;">QR Sent At</td><td>{{ $registration->qr_sent_at ? $registration->qr_sent_at->format('d M Y H:i') : 'Not Sent' }}</td></tr>
            </table>

            @if($registration->qr_code)
            <div style="margin-top: 20px;">
                <img src="{{ asset('storage/' . $registration->qr_code) }}" alt="QR Code" style="width: 200px; height: 200px;">
            </div>
            @endif
        </div>
    </div>

    <div style="margin-top: 40px; padding-top: 30px; border-top: 1px solid #e2e8f0;">
        <h3 style="margin-bottom: 20px;">Actions</h3>
        <div style="display: flex; gap: 10px;">
            @if($registration->status === 'pending')
                <form method="POST" action="{{ route('admin.registrations.approve', $registration->id) }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-success" onclick="return confirm('Approve this registration?')">
                        Approve Registration
                    </button>
                </form>

                <button onclick="document.getElementById('rejectModal').style.display='block'" class="btn btn-danger">
                    Reject Registration
                </button>
            @endif

            @if($registration->status === 'approved')
                <form method="POST" action="{{ route('admin.registrations.send-qr', $registration->id) }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Send QR Code to this participant?')">
                        Send QR Code
                    </button>
                </form>
            @endif

            <form method="POST" action="{{ route('admin.registrations.destroy', $registration->id) }}" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this registration permanently?')">
                    Delete Registration
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Reject Modal -->
<div id="rejectModal" style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);">
    <div style="background: white; margin: 10% auto; padding: 30px; border-radius: 12px; width: 90%; max-width: 500px;">
        <h3 style="margin-bottom: 20px;">Reject Registration</h3>
        <form method="POST" action="{{ route('admin.registrations.reject', $registration->id) }}">
            @csrf
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Rejection Reason</label>
                <textarea name="rejection_reason" rows="4" required style="width: 100%; padding: 10px; border: 2px solid #e2e8f0; border-radius: 8px;"></textarea>
            </div>
            <div style="display: flex; gap: 10px; justify-content: flex-end;">
                <button type="button" onclick="document.getElementById('rejectModal').style.display='none'" class="btn" style="background: #6b7280; color: white;">Cancel</button>
                <button type="submit" class="btn btn-danger">Reject</button>
            </div>
        </form>
    </div>
</div>
@endsection

{{-- resources/views/admin/settings.blade.php --}}
@extends('admin.layouts.app')

@section('title', 'Settings')

@section('content')
<div class="card">
    <h2 style="margin-bottom: 20px;">Event Settings</h2>
    
    <form method="POST" action="{{ route('admin.settings.update') }}">
        @csrf
        
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Maximum Capacity</label>
            <input type="number" name="max_capacity" value="{{ $maxCapacity }}" required style="width: 100%; max-width: 300px; padding: 10px; border: 2px solid #e2e8f0; border-radius: 8px;">
            <p style="color: #64748b; font-size: 14px; margin-top: 5px;">Maximum number of approved participants</p>
        </div>

        <div style="margin-bottom: 30px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Event Date</label>
            <input type="date" name="event_date" value="{{ $eventDate }}" required style="width: 100%; max-width: 300px; padding: 10px; border: 2px solid #e2e8f0; border-radius: 8px;">
            <p style="color: #64748b; font-size: 14px; margin-top: 5px;">QR Codes will be sent H-3 from this date</p>
        </div>

        <button type="submit" class="btn btn-primary">Save Settings</button>
    </form>
</div>
@endsection

{{-- resources/views/emails/registration-confirmation.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #0EA5E9 0%, #0284C7 100%); color: white; padding: 30px; text-align: center; }
        .content { background: #f9fafb; padding: 30px; }
        .reg-number { background: white; padding: 20px; border-left: 4px solid #0EA5E9; margin: 20px 0; }
        .footer { text-align: center; padding: 20px; color: #64748b; font-size: 14px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Registration Confirmation</h1>
            <p>Jakarta International Competition Forum 2025</p>
        </div>
        <div class="content">
            <p>Dear {{ $registration->first_name }} {{ $registration->last_name }},</p>
            
            <p>Thank you for registering for the Jakarta International Competition Forum 2025!</p>
            
            <div class="reg-number">
                <strong>Your Registration Number:</strong><br>
                <h2 style="color: #0EA5E9; margin: 10px 0;">{{ $registration->registration_number }}</h2>
            </div>

            <p><strong>Registration Details:</strong></p>
            <ul>
                <li>Name: {{ $registration->first_name }} {{ $registration->last_name }}</li>
                <li>Email: {{ $registration->email }}</li>
                <li>Organization: {{ $registration->organization }}</li>
                <li>Country: {{ $registration->country }}</li>
            </ul>

            <p><strong>Next Steps:</strong></p>
            <ol>
                <li>Your registration is currently under review</li>
                <li>You will receive an email notification once your registration is approved</li>
                <li>QR Code will be sent H-3 before the event if your registration is approved</li>
            </ol>

            <p>Please keep your registration number for future reference.</p>

            <p>Best regards,<br>JICF 2025 Organizing Committee</p>
        </div>
        <div class="footer">
            <p>This is an automated email. Please do not reply to this message.</p>
        </div>
    </div>
</body>
</html>