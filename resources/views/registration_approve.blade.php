<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Approved</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .qr-container {
            background: white;
            padding: 30px;
            text-align: center;
            margin: 30px 0;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .qr-code {
            max-width: 250px;
            height: auto;
            margin: 20px auto;
            display: block;
        }
        .ticket-id {
            font-size: 24px;
            font-weight: bold;
            color: #11998e;
            margin: 10px 0;
            letter-spacing: 2px;
        }
        .info-box {
            background: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            border-left: 4px solid #11998e;
        }
        .info-row {
            margin: 10px 0;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: bold;
            color: #11998e;
            display: inline-block;
            width: 150px;
        }
        .status-badge {
            display: inline-block;
            padding: 8px 16px;
            background: #28a745;
            color: white;
            border-radius: 20px;
            font-weight: bold;
            margin: 10px 0;
        }
        .button {
            display: inline-block;
            padding: 12px 30px;
            background: #11998e;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            margin: 20px 0;
            font-weight: bold;
        }
        .button:hover {
            background: #0d7a6f;
        }
        .highlight-box {
            background: #d4edda;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #28a745;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #777;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>✅ Registration Approved!</h1>
        <p>Your ticket is ready</p>
    </div>
    
    <div class="content">
        <p>Dear <strong>{{ $registration->name }}</strong>,</p>
        
        <p>Congratulations! Your registration for <strong>The Third Jakarta International Competition Forum</strong> has been approved!</p>
        
        <div class="status-badge">✓ Status: Approved</div>
        
        <div class="qr-container">
            <h3 style="color: #11998e; margin-top: 0;">🎫 Your Event Ticket</h3>
            <img src="{{ $qrCodeUrl }}" alt="QR Code" class="qr-code">
            <div class="ticket-id">{{ $registration->ticket_code }}</div>
            <p style="color: #666; margin: 10px 0;">Show this QR code at the event entrance</p>
        </div>
        
        <div class="info-box">
            <h3 style="margin-top: 0; color: #11998e;">📋 Event Details</h3>
            <div class="info-row">
                <span class="label">Event:</span>
                <span>Jakarta International Competition Forum 2025</span>
            </div>
            <div class="info-row">
                <span class="label">Date:</span>
                <span>15-17 March 2025</span>
            </div>
            <div class="info-row">
                <span class="label">Time:</span>
                <span>09:00 - 18:00 WIB</span>
            </div>
            <div class="info-row">
                <span class="label">Venue:</span>
                <span>Jakarta Convention Center</span>
            </div>
            <div class="info-row">
                <span class="label">Category:</span>
                <span>{{ ucfirst($registration->category) }}</span>
            </div>
        </div>
        
        <div class="info-box">
            <h3 style="margin-top: 0; color: #11998e;">👤 Participant Information</h3>
            <div class="info-row">
                <span class="label">Name:</span>
                <span>{{ $registration->name }}</span>
            </div>
            <div class="info-row">
                <span class="label">Email:</span>
                <span>{{ $registration->email }}</span>
            </div>
            <div class="info-row">
                <span class="label">Phone:</span>
                <span>{{ $registration->phone }}</span>
            </div>
            <div class="info-row">
                <span class="label">Institution:</span>
                <span>{{ $registration->institution }}</span>
            </div>
        </div>
        
        <div class="highlight-box">
            <h3 style="margin-top: 0; color: #155724;">📌 Important Instructions</h3>
            <ul style="margin: 10px 0; padding-left: 20px;">
                <li>Save this email or take a screenshot of your QR code</li>
                <li>The QR code can be shown digitally or printed</li>
                <li>Arrive 30 minutes before the event starts</li>
                <li>Bring a valid ID card for verification</li>
                <li>Each QR code is valid for one person only</li>
            </ul>
        </div>
        
        <div style="text-align: center;">
            <a href="{{ url('/download-ticket/' . $registration->ticket_code) }}" class="button">📥 Download Ticket</a>
        </div>
        
        <div style="background: #fff3cd; padding: 15px; border-radius: 8px; margin: 20px 0; border-left: 4px solid #ffc107;">
            <strong>⚠️ Note:</strong> This QR code is unique and personal. Do not share it with others as it will be invalid if used by another person.
        </div>
        
        <p>We look forward to seeing you at JICF 2025! If you have any questions, please contact us at <a href="mailto:info@jicf.com">info@jicf.com</a></p>
        
        <p style="margin-top: 30px;">
            Best regards,<br>
            <strong>JICF 2025 Committee</strong>
        </p>
    </div>
    
    <div class="footer">
        <p>&copy; {{ date('Y') }} Jakarta International Culture Festival. All rights reserved.</p>
        <p>This is an automated email. Please do not reply to this email.</p>
    </div>
</body>
</html>