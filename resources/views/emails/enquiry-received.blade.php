<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; color: #333; }
        .label { font-weight: bold; }
        .row { margin-bottom: 12px; }
    </style>
</head>
<body>
    <h2>New Contact Enquiry</h2>
    <div class="row"><span class="label">Name:</span> {{ $enquiry->name }}</div>
    <div class="row"><span class="label">Phone:</span> {{ $enquiry->dial_code }} {{ $enquiry->mobile }}</div>
    <div class="row"><span class="label">Email:</span> {{ $enquiry->email }}</div>
    <div class="row"><span class="label">Website:</span> {{ $enquiry->url ?: 'N/A' }}</div>
    <div class="row"><span class="label">Service:</span> {{ $enquiry->service ?: 'N/A' }}</div>
    <div class="row"><span class="label">Requirement:</span><br>{{ $enquiry->requirement }}</div>
    <hr>
    <small>IP: {{ $enquiry->ip_address }} &middot; {{ $enquiry->created_at->format('d M Y, H:i') }}</small>
</body>
</html>