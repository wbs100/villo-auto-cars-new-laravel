<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #8B4513; color: white; padding: 15px; text-align: center; }
        .content { padding: 20px; background: #f9f9f9; }
        .field { margin-bottom: 15px; }
        .field strong { color: #8B4513; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Booking Confirmation - Villo Auto Cars</h2>
        </div>
        <div class="content">
            <p>Dear {{ $formData['first_name'] }} {{ $formData['last_name'] }},</p>
            <p>Thank you for booking with Villo Auto Cars! Your appointment details are below:</p>
            
            <div class="field">
                <strong>Name:</strong> {{ $formData['first_name'] }} {{ $formData['last_name'] }}
            </div>
            <div class="field">
                <strong>Phone:</strong> {{ $formData['phone_number'] }}
            </div>
            <div class="field">
                <strong>Email:</strong> {{ $formData['email_address'] }}
            </div>
            <div class="field">
                <strong>Service:</strong> Service ID #{{ $formData['service_id'] }}
            </div>
            @if(!empty($formData['stylist_id']))
            <div class="field">
                <strong>Stylist:</strong> Stylist ID #{{ $formData['stylist_id'] }}
            </div>
            @endif
            <div class="field">
                <strong>Preferred Date:</strong> {{ $formData['preferred_date'] }}
            </div>
            <div class="field">
                <strong>Preferred Time:</strong> {{ $formData['preferred_time'] }}
            </div>
            @if(!empty($formData['special_requests']))
            <div class="field">
                <strong>Special Requests:</strong><br>
                {{ $formData['special_requests'] }}
            </div>
            @endif
            
            <p>We will contact you soon to confirm your appointment.</p>
            <p>Best regards,<br>Villo Auto Cars Team</p>
        </div>
    </div>
</body>
</html>