<?php
session_start();

// Check if booking data is available in session
if (!isset($_SESSION['booking'])) {
    header("Location: rooms.php"); // Redirect if no booking data is found
    exit();
}

// Fetch booking details from the session
$booking = $_SESSION['booking'];

// Convert INR to USD (update conversion rate as needed)
$priceInINR = (float) $booking['price']; // Ensure the price is numeric
$conversionRate = 0.012; // Example conversion rate, replace with the actual rate
$priceInUSD = round($priceInINR * $conversionRate, 2); // Convert to USD and round to 2 decimal places

// PayPal integration details
$paypal_email = 'vishalsourabh07@gmail.com'; // Replace with your actual PayPal email
$paypal_return_url = 'http://example.com/success'; // Replace with your actual return URL
$paypal_cancel_url = 'http://example.com/cancel'; // Replace with your actual cancel URL

// // Define booking ID
// $bookingId = isset($booking['id']) ? $booking['id'] : "N/A";

// Define payment amount
$payment_amount = $priceInUSD;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>

    <div class="payment-container">
        <h2>Payment for Booking ID: <?php echo htmlspecialchars($booking['id']); ?></h2>
        <p><strong>Customer Name:</strong> <?php echo htmlspecialchars($booking['firstName'] . ' ' . $booking['lastName']); ?></p>
        <p><strong>Room Number:</strong> <?php echo htmlspecialchars($booking['roomNumber']); ?></p>
        <p><strong>Check-in Date:</strong> <?php echo htmlspecialchars($booking['checkIn']); ?></p>
        <p><strong>Check-out Date:</strong> <?php echo htmlspecialchars($booking['checkOut']); ?></p>
        <p><strong>Amount to Pay:</strong> $<?php echo htmlspecialchars($payment_amount); ?></p>

        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="<?php echo htmlspecialchars($paypal_email); ?>">
            <input type="hidden" name="item_name" value="Hotel Booking (ID: <?php echo htmlspecialchars($bookingId); ?>)">
            <input type="hidden" name="amount" value="<?php echo htmlspecialchars($payment_amount); ?>">
            <input type="hidden" name="currency_code" value="USD">
            <input type="hidden" name="return" value="<?php echo htmlspecialchars($paypal_return_url); ?>">
            <input type="hidden" name="cancel_return" value="<?php echo htmlspecialchars($paypal_cancel_url); ?>">
            <input type="hidden" name="custom" value="<?php echo htmlspecialchars($bookingId); ?>"> <!-- Pass the booking ID -->

            <input type="submit" value="Pay with PayPal">
        </form>
    </div>

</body>
</html>
