<?php
include("conectio.php");
session_start();
// Check if 'roomId' and 'price' are passed via POST

if (isset($_POST['roomId'])) {
    $roomId = $_POST['roomId'];
}

if (isset($_POST['price'])) {
    $roomPrice = $_POST['price'];
}




if (isset($_POST['click'])) {
    // Get data from the form
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $roomno = $_POST["roomNumber"];
    $roompr = $_POST["roomPrice"];
    $checkIn = $_POST["checkIn"];
    $checkOut = $_POST["checkOut"];
    


    // Insert booking into the database
    $sql = "INSERT INTO bookings (first_name, last_name, phone_number, email, room_id, price, check_in_date, check_out_date)
            VALUES ('$firstName', '$lastName', '$phoneNumber', '$email', ' $roomno', '$roompr', '$checkIn', '$checkOut')";

    if (mysqli_query($cn, $sql)) {


         // Get the last inserted ID (booking ID)
         $bookingId = mysqli_insert_id($cn);



        // Store booking details in session
        $_SESSION['booking'] = [
            'id' => $bookingId, // Store the ID of the booking
            'firstName' => $firstName,
            'lastName' => $lastName,
            'phoneNumber' => $phoneNumber,
            'email' => $email,
            'roomNumber' => $roomno,
            'price' =>$roompr,
            'checkIn' => $checkIn,
            'checkOut' => $checkOut
        ];

        // Redirect to payment page
        header("Location: payment.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($cn);
    }

    // Close connection
    mysqli_close($cn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="booking.css">
</head>
<body>

    <div class="form-container">
        <h2>Booking Form</h2>
        <form action="" method="post">
            <label for="fullName"> Name</label>
            <input type="text" id="fName" name="firstName" placeholder="Enter your first name" required>
            <input type="text" id="lName" name="lastName" placeholder="Enter your last name" required>

            <label for="phoneNumber">Phone Number</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" required>

            <label for="email">Email (Gmail)</label>
            <input type="email" id="email" name="email" placeholder="Enter your Gmail" pattern=".+@gmail\.com" required>

            <label for="roomNumber">Room Number</label>
            <input type="text" id="roomNumber" name="roomNumber" value="<?php echo $roomId; ?>" readonly>

            <label for="roomPrice">Price (₹)</label>
            <input type="text" id="roomPrice" name="roomPrice" value=" <?php echo $roomPrice; ?>" readonly>

            <label for="checkIn">Check-in Date</label>
            <input type="date" id="checkIn" name="checkIn" required>

            <label for="checkOut">Check-out Date</label>
            <input type="date" id="checkOut" name="checkOut" required>

        
            <div class="form-buttons">
                <button type="submit" name="click">Submit</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>

</body>
</html>