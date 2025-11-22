<!DOCTYPE html>
<html>
<head>
    <title>Import Vehicle Inquiry</title>
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
            <h2>Import Vehicle Inquiry - Villo Auto Cars</h2>
        </div>
        <div class="content">
            <p>New import inquiry received with the following details:</p>

            <div class="field">
                <strong>Name:</strong> {{ $formData['name'] ?? 'N/A' }}
            </div>
            <div class="field">
                <strong>Phone:</strong> {{ $formData['phone'] ?? 'N/A' }}
            </div>
            <div class="field">
                <strong>Email:</strong> {{ $formData['email'] ?? 'N/A' }}
            </div>
            <div class="field">
                <strong>Brand:</strong> {{ $formData['brand'] ?? 'N/A' }}
            </div>
            <div class="field">
                <strong>Model:</strong> {{ $formData['model'] ?? 'N/A' }}
            </div>
            <div class="field">
                <strong>Preferred Year:</strong> {{ $formData['year'] ?? 'N/A' }}
            </div>
            <div class="field">
                <strong>Color:</strong> {{ $formData['color'] ?? 'N/A' }}
            </div>
            <div class="field">
                <strong>Mileage Preference:</strong> {{ $formData['mileage'] ?? 'N/A' }}
            </div>
            <div class="field">
                <strong>Condition:</strong> {{ $formData['condition'] ?? 'N/A' }}
            </div>
            <div class="field">
                <strong>Message:</strong><br>
                {{ $formData['message'] ?? 'N/A' }}
            </div>

            <p>Please contact the customer to follow up on this inquiry.</p>
            <p>Best regards,<br>Villo Auto Cars Team</p>
        </div>
    </div>
</body>
</html>
