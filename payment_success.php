<?php
session_start();

// Clear session data
unset($_SESSION['booking']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>

    <h2>Your booking is confirmed!</h2>
    <p>Thank you for booking with us. We look forward to your stay.</p>

</body>
</html>
