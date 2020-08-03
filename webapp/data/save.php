<?php
include 'db.php';
$id = $_GET["mo"];
$f6 = $_POST["f6"];
$f7 = $_POST["f7"];
$f8 = $_POST["f8"];
$f9 = $_POST["f9"];
$f10 = $_POST["f10"];
$f11 = $_POST["f11"];
$f12 = $_POST["f12"];
$f13 = $_POST["f13"];
////// mohasebat
$saham = $f6 / $f12;
$emtiyaz = $saham * $f11;
$sod = $f10 / $emtiyaz;
$bemeh = $sod *($f9/100);
$karmozd = $f8 * $f11;
$sodpa1 = $karmozd + $bemeh;
$sodpa2 = $sodpa1 - $sod;
//////
$sql = "UPDATE sa SET s6 = '$f6', s7 = '$f7', s8 = '$f8', s9 = '$f9', s10 = '$f10', s11 = '$f11', s12 = '$f12', s13 = '$f13', s14 = '$saham' , s14 = '$saham', s15 = '$emtiyaz', s16 = '$sod', s17 = '$bemeh', s18 = '$karmozd', s19 = '$sodpa2'  WHERE id=$id ";
if (mysqli_query($conn, $sql)) {
      echo "بروزرسانی انجام شد";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      mysqli_close($conn);
}
$sql = "SELECT id, s29 FROM sa WHERE id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
			$savabegh = $row["s29"];

    }
    } else {
    echo "0";
}
//
if (mysqli_query($conn, $sql)) {
      echo "";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      mysqli_close($conn);
}
$sql = "INSERT INTO $savabegh (t1,t2) VALUES ('$f6','$f7')";
if (mysqli_query($conn, $sql)) {
      echo "";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      mysqli_close($conn);
}
?>