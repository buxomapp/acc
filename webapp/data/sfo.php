<?php
include 'db.php';
$user = $_GET["key"];
$sql = "SELECT id, f1, f2, f3, f4, f5 FROM fo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

			echo '<option value="'.$row["f5"].'">'.$row["f1"].'</option>';
    }
} else {
    echo "0";
}
$conn->close();
?>