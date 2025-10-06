<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
        .info-box {
            background: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            border-left: 4px solid #667eea;
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
            color: #667eea;
            display: inline-block;
            width: 150px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #777;
            font-size: 12px;
        }
        .status-badge {
            display: inline-block;
            padding: 8px 16px;
            background: #ffc107;
            color: #000;
            border-radius: 20px;
            font-weight: bold;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Registration Received!</h1>
        <p>Thank you for registering to The Third Jakarta International Competition Forum</p>
    </div>
    
    <div class="content">
        <p>Dear <strong>{{ $registration->name }}</strong>,</p>
        
        <p>We have successfully received your registration for <strong>Jakarta International Compettition Forum (JICF) 2025</strong>.</p>
        
        <div class="status-badge">⏳ Status: Pending Approval</div>
        
        <div class="info-box">
            <h3 style="margin-top: 0; color: #667eea;">📋 Registration Details</h3>
            <div class="info-row">
                <span class="label">Registration ID:</span>
                <span>#{{ $registration->id }}</span>
            </div>
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
            <div class="info-row">
                <span class="label">Category:</span>
                <span>{{ ucfirst($registration->category) }}</span>
            </div>
            <div class="info-row">
                <span class="label">Registered:</span>
                <span>{{ $registration->created_at->format('d M Y, H:i') }}</span>
            </div>
        </div>
        
        <h3 style="color: #667eea;">📌 What's Next?</h3>
        <ol style="padding-left: 20px;">
            <li>Our team will review your registration</li>
            <li>You will receive an approval email within 1-3 business days</li>
            <li>Once approved, you'll receive your QR code ticket</li>
            <li>Present your QR code at the event entrance</li>
        </ol>
        
        <div style="background: #fff3cd; padding: 15px; border-radius: 8px; margin: 20px 0; border-left: 4px solid #ffc107;">
            <strong>⚠️ Important:</strong> Please keep this email for your records. You will need your registration ID for any inquiries.
        </div>
        
        <p>If you have any questions, please contact us at <a href="mailto:info@jicf.com">info@jicf.com</a></p>
        
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