<?php
// Include the database configuration file
include 'conectio.php';

// Check if the form is submitted
if (isset($_POST["click"])) {
    // Collect form data
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $contact_method = $_POST['contact-method'];
    $urgency = $_POST['urgency'];

    // Validate and sanitize input
    $first_name = mysqli_real_escape_string($cn, $first_name);
    $last_name = mysqli_real_escape_string($cn, $last_name);
    $email = mysqli_real_escape_string($cn, $email);
    $phone = mysqli_real_escape_string($cn, $phone);
    $subject = mysqli_real_escape_string($cn, $subject);
    $message = mysqli_real_escape_string($cn, $message);
    $contact_method = mysqli_real_escape_string($cn, $contact_method);
    $urgency = mysqli_real_escape_string($cn, $urgency);

    // Insert the data into the database
    $sql = "INSERT INTO contact_form_submissions (first_name, last_name, email, phone, subject, message, contact_method, urgency) 
            VALUES ('$first_name', '$last_name', '$email', '$phone', '$subject', '$message', '$contact_method', '$urgency')";

    if (mysqli_query($cn, $sql)) {
        // Redirect or show a success message
        echo "<script>alert('successfully sent');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($cn);
    }

    // Close the database connection
    mysqli_close($cn);
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Management System</title>
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="home1.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">ARYAN HADA HOTEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="room.php">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>



<div class="container">
    <h2>Hotel Contact Form</h2>
    <p>Please use this form to get in touch with us. We'll be happy to assist you with any inquiries or requests.</p>
    <form action="#" method="post">
      <div class="form-group">
        <label for="first-name">Full Name</label>
        <div class="name-fields">
          <input type="text" id="first-name" name="first-name" placeholder="First Name">
          <input type="text" id="last-name" name="last-name" placeholder="Last Name">
        </div>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="example@example.com">
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="(000) 000-0000">
      </div>
      <div class="form-group">
        <label for="subject">Subject of Inquiry</label>
        <input type="text" id="subject" name="subject">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5"></textarea>
      </div>
      <div class="form-group">
        <label>Preferred Contact Method</label>
        <div class="radio-group">
          <input type="radio" id="email-method" name="contact-method" value="email">
          <label for="email-method">Email</label>
          <input type="radio" id="phone-method" name="contact-method" value="phone">
          <label for="phone-method">Phone Call</label>
          <input type="radio" id="text-method" name="contact-method" value="text">
          <label for="text-method">Text Message</label>
        </div>
      </div>
      <div class="form-group">
        <label>Urgency of Inquiry</label>
        <div class="radio-group">
          <input type="radio" id="urgent" name="urgency" value="urgent">
          <label for="urgent">Urgent</label>
          <input type="radio" id="normal" name="urgency" value="normal">
          <label for="normal">Normal</label>
          <input type="radio" id="not-urgent" name="urgency" value="not-urgent">
          <label for="not-urgent">Not Urgent</label>
        </div>
      </div>
      <button type="submit" class="submit-btn" name="click">Submit</button>
    </form>
  </div>
      
<!-- Footer Section -->
<footer>
  <div class="footer-container">
    <div class="row">
      <div class="col-md-3 company-info">
        <img
          src="data:image/png;base64,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"
          alt="Company Logo">
        <h3>Aryan Hada Hotel</h3>
        <p>Experience the best hospitality in town.</p>
      </div>
      <div class="col-md-3 products">
        <h3>Our Services</h3>
        <ul>
          <li>Luxurious Rooms</li>
          <li>Fine Dining</li>
          <li>Event Spaces</li>
          <li>Sports rooms</li>
          <li>Swiming pool</li>
          <li>Night bar</li>
        </ul>
      </div>
      <div class="col-md-3 useful-links">
        <h3>Useful Links</h3>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-md-3 contact-info">
        <h3>Contact</h3>
        <p>Address: Amrod, Sehore, Madhya Pradesh, 466001</p>
        <p>Phone: +9131623882</p>
        <p>Email: aryanhada@gmail.com</p>
        <ul class="social-icons">
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-instagram"></a>
        </ul>
      </div>
    </div>
  </div>
</footer>

<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"></script>

</body>