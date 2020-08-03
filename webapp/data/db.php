<?php
$servername = "localhost";
$database = "samaacco_vesal";
$username = "samaacco_vesal";
$password = "Pizza2259";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("خطایی پیش آمده است لطفا صبور باشد و چند ثانیه بعد مراجعه کنید: " . mysqli_connect_error());
}
 
echo "";
?>