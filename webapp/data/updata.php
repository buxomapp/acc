<?php
include 'db.php';
$id = $_GET["up"];
$sql = "UPDATE fo SET f9 ='120' WHERE id=$id";
if (mysqli_query($conn, $sql)) {
      echo "تغیرات اعمال شد";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>