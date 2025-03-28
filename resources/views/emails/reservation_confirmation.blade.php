<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Confirmation</title>
</head>
<body>
    <h1>Reservation Confirmation</h1>
    <p>Dear {{ $reservation->name }},</p>
    <p>Thank you for your reservation. Here are the details:</p>

    <ul>
        <li><strong>Name:</strong> {{ $reservation->name }}</li>
        <li><strong>Email:</strong> {{ $reservation->email }}</li>
        <li><strong>Phone:</strong> {{ $reservation->phone }}</li>
        <li><strong>Date:</strong> {{ $reservation->reservation_date }}</li>
        <li><strong>Time:</strong> {{ $reservation->reservation_time }}</li>
        <li><strong>Number of People:</strong> {{ $reservation->num_people }}</li>
        <li><strong>Message:</strong> {{ $reservation->message }}</li>
    </ul>

    <p>We look forward to hosting you!</p>

    <p>Best regards,<br>ThreeFrogs Team</p>
</body>
</html>