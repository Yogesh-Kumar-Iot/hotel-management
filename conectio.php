
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apna_hotel";

$cn = mysqli_connect($servername, $username, $password, $dbname);

if (!$cn) {
  die("Connection failed: " . mysqli_connect_error());
}
               
?>
