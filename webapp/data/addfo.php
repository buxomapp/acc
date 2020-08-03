<?php
include 'db.php';
$f1 = $_POST["f1"];
$f2 = $_POST["f2"];
$f3 = $_POST["f3"];
$f4 = $_POST["f4"];
$f5 = $_POST["f5"];
$code = "sa$f3";
$sql = "INSERT INTO sa (s1,s2,s3,s4,s5,s29) VALUES ('$f1','$f2','$f3','$f4','$f5','$code')";
if (mysqli_query($conn, $sql)) {
      echo "سرمایه گذار جدید اضافه شد";
} else {
      echo "Error: " . $sql . "<br>" ;
}
// sql to create table
$sql = "CREATE TABLE $code (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
t1 VARCHAR(30) NOT NULL,
t2 VARCHAR(30) NOT NULL,
t3 VARCHAR(30) NOT NULL,
t4 VARCHAR(30) NOT NULL,
t5 VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
      echo "";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>