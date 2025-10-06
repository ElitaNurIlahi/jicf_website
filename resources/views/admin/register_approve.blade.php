{{-- resources/views/emails/registration-approved.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; padding: 30px; text-align: center; }
        .content { background: #f9fafb; padding: 30px; }
        .success-box { background: #d1fae5; border-left: 4px solid #10b981; padding: 20px; margin: 20px 0; }
        .footer { text-align: center; padding: 20px; color: #64748b; font-size: 14px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>✅ Registration Approved!</h1>
            <p>Jakarta International Competition Forum 2025</p>
        </div>
        <div class="content">
            <p>Dear {{ $registration->first_name }} {{ $registration->last_name }},</p>
            
            <div class="success-box">
                <h2 style="color: #065f46; margin-top: 0;">Congratulations! Your registration has been approved.</h2>
            </div>

            <p><strong>Registration Number:</strong> {{ $registration->registration_number }}</p>

            <p><strong>What's Next?</strong></p>
            <ul>
                <li>Your spot at JICF 2025 is now confirmed</li>
                <li>You will receive your QR Code ticket <strong>3 days before the event</strong></li>
                <li>Please bring the QR Code (digital or printed) for check-in at the venue</li>
                <li>Event details and agenda will be sent closer to the date</li>
            </ul>

            <p><strong>Important Notes:</strong></p>
            <ul>
                <li>Please check your email 3 days before the event for your QR Code</li>
                <li>Keep your registration number for reference</li>
                <li>Contact us if you need any assistance</li>
            </ul>

            <p>We look forward to welcoming you at the Jakarta International Competition Forum 2025!</p>

            <p>Best regards,<br>JICF 2025 Organizing Committee</p>
        </div>
        <div class="footer">
            <p>Email: jicf@kppu.go.id | Website: www.jicf2025.com</p>
        </div>
    </div>
</body>
</html>

{{-- resources/views/emails/registration-rejected.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white; padding: 30px; text-align: center; }
        .content { background: #f9fafb; padding: 30px; }
        .info-box { background: #fee2e2; border-left: 4px solid #ef4444; padding: 20px; margin: 20px 0; }
        .footer { text-align: center; padding: 20px; color: #64748b; font-size: 14px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Registration Status Update</h1>
            <p>Jakarta International Competition Forum 2025</p>
        </div>
        <div class="content">
            <p>Dear {{ $registration->first_name }} {{ $registration->last_name }},</p>
            
            <p>Thank you for your interest in the Jakarta International Competition Forum 2025.</p>

            <div class="info-box">
                <p style="margin: 0;"><strong>Registration Status:</strong> Unfortunately, we regret to inform you that we are unable to accommodate your registration at this time.</p>
            </div>

            <p><strong>Reason:</strong></p>
            <p>{{ $registration->rejection_reason }}</p>

            <p><strong>Alternative Options:</strong></p>
            <ul>
                <li>We will keep your information for future JICF events</li>
                <li>You can join our mailing list for updates on future forums</li>
                <li>Live streaming may be available (details to be announced)</li>
            </ul>

            <p>We apologize for any inconvenience and hope to welcome you at our future events.</p>

            <p>Best regards,<br>JICF 2025 Organizing Committee</p>
        </div>
        <div class="footer">
            <p>Email: jicf@kppu.go.id | Website: www.jicf2025.com</p>
        </div>
    </div>
</body>
</html>

{{-- resources/views/emails/qr-code.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #0EA5E9 0%, #0284C7 100%); color: white; padding: 30px; text-align: center; }
        .content { background: #f9fafb; padding: 30px; }
        .qr-box { background: white; border: 2px solid #0EA5E9; padding: 30px; margin: 20px 0; text-align: center; }
        .important { background: #fef3c7; border-left: 4px solid #f59e0b; padding: 15px; margin: 20px 0; }
        .footer { text-align: center; padding: 20px; color: #64748b; font-size: 14px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🎫 Your Event QR Code</h1>
            <p>Jakarta International Competition Forum 2025</p>
        </div>
        <div class="content">
            <p>Dear {{ $registration->first_name }} {{ $registration->last_name }},</p>
            
            <p>Your QR Code ticket for JICF 2025 is attached to this email!</p>

            <div class="qr-box">
                <h2 style="color: #0EA5E9; margin-top: 0;">Registration Number</h2>
                <p style="font-size: 24px; font-weight: bold; margin: 10px 0;">{{ $registration->registration_number }}</p>
                <p style="color: #64748b;">{{ $registration->first_name }} {{ $registration->last_name }}</p>
            </div>

            <div class="important">
                <p style="margin: 0;"><strong>⚠️ IMPORTANT:</strong> Please bring this QR Code to the event venue. You can show it on your phone or print it out.</p>
            </div>

            <p><strong>Event Details:</strong></p>
            <ul>
                <li><strong>Event:</strong> The Third Jakarta International Competition Forum</li>
                <li><strong>Venue:</strong> Gedung Dhanapala, Jakarta</li>
                <li><strong>Registration:</strong> Opens at 8:00 AM</li>
            </ul>

            <p><strong>Check-in Instructions:</strong></p>
            <ol>
                <li>Arrive at the venue registration desk</li>
                <li>Show your QR Code (digital or printed)</li>
                <li>Receive your name badge and event materials</li>
            </ol>

            <p>If you have any questions, please don't hesitate to contact us.</p>

            <p>We look forward to seeing you at JICF 2025!</p>

            <p>Best regards,<br>JICF 2025 Organizing Committee</p>
        </div>
        <div class="footer">
            <p>Email: jicf@kppu.go.id | Website: www.jicf