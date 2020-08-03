<?php
include 'db.php';
$f1 = $_POST["f1"];
$f2 = $_POST["f2"];
$f3 = $_POST["f3"];
$f4 = $_POST["f4"];
$f5 = $_POST["f5"];
$sql = "INSERT INTO fo (f1,f2,f3,f4,f5) VALUES ('$f1','$f2','$f3','$f4','$f5')";
if (mysqli_query($conn, $sql)) {
      echo "فروشگاه جدید اضافه شد";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>