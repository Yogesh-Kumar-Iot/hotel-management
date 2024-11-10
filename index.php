<?php
include("conectio.php");

if (isset($_POST["sub"])) {
    header("Location: room.php");
    exit;
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Management System</title>
  <link rel="stylesheet" href="home1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Mohit Kala</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home1.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="room.php">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
   

  <section class="hero" style="background-image: url('image.png'); background-size: cover; height: 100vh; display: flex; justify-content: center; align-items: center; color: #fff;">
    <div class="container">
        <h1 class="display-3">Welcome to Our Hotel</h1>
        <p>Experience the best hospitality in town</p>
        <form action="room.php" method="post">
        <button class="btn btn-primary" name="sub">Book Now</button>
        </form>
      
    </div>
</section>


  





  <section class="features">
    <div class="container">
      <h2 class="text-center">Services</h2>
      <div class="row">
        <div class="col-md-4">
          <img
            src="https://media.istockphoto.com/id/1042424568/photo/3d-rendering-luxury-modern-bedroom-suite-tv-with-wardrobe-and-walk-in-closet.webp?a=1&b=1&s=612x612&w=0&k=20&c=rP1-haTunsFd8qkuvoJkM9MKRm43N5f4aK_cyLx00n8="
            alt="Image 1" class="img-fluid">
          <h3>Luxurious Rooms</h3>
          <p>Our rooms are designed for comfort and luxury</p>
        </div>
        <div class="col-md-4">
          <img src="image.png" alt="Image 2" class="img-fluid">
          <h3>Fine Dining</h3>
          <p>Enjoy delicious meals at our restaurant</p>
        </div>
        <div class="col-md-4">
          <img src="https://digital.ihg.com/is/image/ihg/holiday-inn-victoria-8747463393-4x3" alt="Image 3"
            class="img-fluid">
          <h3>Event Spaces</h3>
          <p>Host your events with us</p>
        </div>
        <div class="col-md-4">
          <img
            src="https://res.cloudinary.com/simplotel/image/upload/w_5000,h_2702/x_98,y_0,w_4804,h_2702,r_0,c_crop,q_80,fl_progressive/w_500,f_auto,c_fit/the-piccadily-lucknow/Hotel_With_Swimming_Pool,_The_Piccadily,_Business_Hotel_In_Lucknow_765"
            alt="Image 1" class="img-fluid">
          <h3>Swiming Pool</h3>
          <p>make fun with our swiming pool</p>
        </div>
        <div class="col-md-4">
          <img
            src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/595182221.jpg?k=65d492ad59613cfee69077cc1a19826e5d688d5e56f76821da26ace9cbcee831&o=&hp=1"
            alt="Image 1" class="img-fluid">
          <h3>Sports Rooms</h3>
          <p>Play your faviourate sopts</p>
        </div>
        <div class="col-md-4">
          <img
            src="https://www.travelandleisure.com/thmb/_Nib0SHHqkFgrhmmNedVlmVjHFg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/o2-lounge-at-the-ritz-carlton-moscow-ROOF1117-85a4a9d5a35e499b9efc9e56d1f7d93a.jpg"
            alt="Image 1" class="img-fluid">
          <h3>Night bar Rooms</h3>
          <p>Enjoy night with fun</p>
        </div>

      </div>
    </div>
  </section>






  <section class="cta">
    <div class="container">
      <h2 class="text-center">Book Your Stay</h2>
      <p>Get the best rates and discounts</p>
      <form action="room.php" method="post">
        <button class="btn btn-primary" name="sub">Book Now</button>
        </form>   </div>
  </section>

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

</html>