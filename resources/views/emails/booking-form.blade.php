<!DOCTYPE html>
<html>
<head>
    <title>Booking Form Submission - Villo Auto Cars</title>
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
            <h2>New Booking Form Submission</h2>
        </div>
        <div class="content">
            <div class="field">
                <strong>Name:</strong> {{ $formData['first_name'] }}  {{ $formData['last_name'] }} 
            </div>
            <div class="field">
                <strong>Email:</strong> {{ $formData['email_address'] }}
            </div>
            <div class="field">
                <strong>Phone:</strong> {{ $formData['phone_number'] ?? 'Not provided' }}
            </div>
            <div class="field">
                <strong>Service ID:</strong> {{ $formData['service_id'] ?? 'Not specified' }}
            </div>
            <div class="field">
                <strong>Message:</strong><br>
                {{ $formData['special_requests'] }}
            </div>
            <div class="field">
                <strong>Submitted at:</strong> {{ now()->format('F j, Y g:i A') }}
            </div>
        </div>
    </div>
</body>
</html>