<?php
include 'data/db.php';
$username = $_POST["u1"];
$password = $_POST["u2"];
$sql = "SELECT id, u1, u2, u3 FROM us";
$result = $conn->query($sql);
if ($result->num_rows >= 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        if ($username == $row["u1"] && $password == $row["u2"]){
        header('Location: dashbord?key='.$row["u3"].'');
        exit;
        } else  {
        header('Location: /reg');
        exit;
        }
    
		}
    }
 else {
    echo "0";
}

$conn->close();

?>