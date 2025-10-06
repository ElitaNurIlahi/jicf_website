<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Update</title>
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
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
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
            border-left: 4px solid #ff6b6b;
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
            color: #ff6b6b;
            display: inline-block;
            width: 150px;
        }
        .status-badge {
            display: inline-block;
            padding: 8px 16px;
            background: #dc3545;
            color: white;
            border-radius: 20px;
            font-weight: bold;
            margin: 10px 0;
        }
        .waitlist-box {
            background: #d1ecf1;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #17a2b8;
        }
        .button {
            display: inline-block;
            padding: 12px 30px;
            background: #17a2b8;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            margin: 20px 0;
            font-weight: bold;
        }
        .button:hover {
            background: #138496;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #777;
            font-size: 12px;
        }
        .sorry-icon {
            font-size: 48px;
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Registration Update</h1>
        <p>Important information about your registration</p>
    </div>
    
    <div class="content">
        <div class="sorry-icon">😔</div>
        
        <p>Dear <strong>{{ $registration->name }}</strong>,</p>
        
        <p>Thank you for your interest in <strong>The Third Jakarta International Competition Forum</strong>.</p>
        
        <p>We regret to inform you that your registration could not be approved at this time.</p>
        
        <div class="status-badge">❌ Status: Registration Not Approved</div>
        
        <div class="info-box">
            <h3 style="margin-top: 0; color: #ff6b6b;">📋 Reason</h3>
            <p style="margin: 10px 0; font-size: 16px;">
                <strong>The participant quota for the {{ ucfirst($registration->category) }} category has reached its maximum capacity.</strong>
            </p>
            <p style="margin: 10px 0; color: #666;">
                We received an overwhelming response and unfortunately, all available slots have been filled.
            </p>
        </div>
        
        <div class="info-box">
            <h3 style="margin-top: 0; color: #ff6b6b;">📝 Your Registration Details</h3>
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
                <span class="label">Category:</span>
                <span>{{ ucfirst($registration->category) }}</span>
            </div>
            <div class="info-row">
                <span class="label">Registered:</span>
                <span>{{ $registration->created_at->format('d M Y, H:i') }}</span>
            </div>
        </div>
        
        <div class="waitlist-box">
            <h3 style="margin-top: 0; color: #0c5460;">💡 Alternative Options</h3>
            <p><strong>We'd love to have you join us! Here are your options:</strong></p>
            <ul style="padding-left: 20px; margin: 15px 0;">
                <li><strong>Join the Waiting List:</strong> We will contact you if any slots become available due to cancellations</li>
                <li><strong>Subscribe for Updates:</strong> Be the first to know about our next event</li>
                <li><strong>Follow Us:</strong> Stay connected on social media for upcoming events</li>
            </ul>
            <div style="text-align: center; margin-top: 20px;">
                <a href="{{ url('/waitlist/join') }}" class="button">📋 Join Waiting List</a>
            </div>
        </div>
        
        <div style="background: #fff3cd; padding: 15px; border-radius: 8px; margin: 20px 0; border-left: 4px solid #ffc107;">
            <strong>📅 Save the Date for Future Events:</strong>
            <p style="margin: 10px 0;">We host multiple cultural events throughout the year. Subscribe to our newsletter to receive early registration notifications for upcoming events.</p>
        </div>
        
        <div style="background: white; padding: 20px; border-radius: 8px; margin: 20px 0; text-align: center;">
            <h3 style="color: #17a2b8; margin-top: 0;">Stay Connected</h3>
            <p>Follow us on social media for updates:</p>
            <div style="margin: 15px 0;">
                <a href="#" style="margin: 0 10px; text-decoration: none;">📘 Facebook</a>
                <a href="#" style="margin: 0 10px; text-decoration: none;">📸 Instagram</a>
                <a href="#" style="margin: 0 10px; text-decoration: none;">🐦 Twitter</a>
            </div>
        </div>
        
        <p>We sincerely apologize for any inconvenience. We hope to see you at future JICF events!</p>
        
        <p>If you have any questions or concerns, please don't hesitate to contact us at <a href="mailto:info@jicf.com">info@jicf.com</a></p>
        
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