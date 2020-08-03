<?php
include 'db.php';
////
$id = $_GET["show"];
$f6 = $_POST["ed1"];
$f7 = $_POST["ed2"];
$sql = "SELECT id, s6, s7, s8, s9, s10, s11, s12, s13, s14, s15, s16, s17, s18, s19, s29 FROM sa WHERE id=$id";
$result = $conn->query($sql);
			
///
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
			$ff12 = $row["s12"];
			$ff8 = $row["s8"];
			$ff11 = $row["s11"];
			$ff9 = $row["s9"];
			$ff10 = $row["s10"];
			$savabegh = $row["s29"];

    }
    } else {
    echo "0";
}
			////// mohasebat
            $saham = $f6 / $ff12;
            $emtiyaz = $saham * $ff11;
            $sod = $ff10 / $emtiyaz;
            $bemeh = $sod *($ff9/100);
            $karmozd = $ff8 * $ff11;
            $sodpa1 = $karmozd + $bemeh;
            $sodpa2 = $sodpa1 - $sod;
            
            
$sql = "UPDATE sa SET s6 = '$f6', s7 = '$f7', s14 = '$saham' , s14 = '$saham', s15 = '$emtiyaz', s16 = '$sod', s17 = '$bemeh', s18 = '$karmozd', s19 = '$sodpa2'  WHERE id=$id ";
if (mysqli_query($conn, $sql)) {
      echo "بروزرسانی انجام شد";
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
