<?php
include 'db.php';
$user = $_GET["key"];
$sql = "SELECT id, u1, u2, u3, u4 FROM us";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        if ($user == $row["u3"]){
			echo $row["u1"];
		} else {
			echo "";
		}
    }
} else {
    echo "0";
}
$conn->close();
?>