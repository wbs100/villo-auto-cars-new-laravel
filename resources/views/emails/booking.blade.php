@component('mail::message')
# Booking Confirmation

Dear {{ $bookingData['first_name'] }} {{ $bookingData['last_name'] }},

Thank you for booking with Villo Auto Cars!

## Appointment Details:
- **Name:** {{ $bookingData['first_name'] }} {{ $bookingData['last_name'] }}
- **Phone:** {{ $bookingData['phone_number'] }}
- **Date:** {{ $bookingData['preferred_date'] }}
- **Time:** {{ $bookingData['preferred_time'] }}

@if(!empty($bookingData['special_requests']))
**Special Requests:** {{ $bookingData['special_requests'] }}
@endif

@component('mail::button', ['url' => 'https://salonruby.lk/'])
Visit Our Website
@endcomponent

Best regards,<br>
<img src="{{ asset('https://salonruby.lk/assets/images/logo.png') }}" alt="logo" style="width: 200px;">
@endcomponent