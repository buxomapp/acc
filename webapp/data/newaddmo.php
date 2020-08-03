<?php
include 'db.php';
$id = $_GET["mo"];
$date = date("z");
$sql = "SELECT id, s1, s2, s3, s4, s5, s6, s7, s8, s9, s10, s11, s12, s13, s14, s15, s16, s17, s18, s19, s20, s21, s22, s23, s24, s25, s26, s27, s28, s29 FROM sa WHERE id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $ss7 = $row["s7"];
        $date2 = date("z", strtotime("$ss7"));
        $ss11 = $date - $date2;
			////// mohasebat
            $saham = $row["s6"] / $row["s12"];
            $emtiyaz = $saham * $ss11;
            $sod = $row["s10"] / $emtiyaz;
            $bemeh = $sod *($row["s9"]/100);
            $karmozd = $row["s8"] * $ss11;
            $sodpa1 = $karmozd + $bemeh;
            $sodpa2 = $sodpa1 - $sod;
//////

    }
    } else {
    echo "0";
}

$sql = "UPDATE sa SET  s11 = '$ss11', s14 = '$saham' , s14 = '$saham', s15 = '$emtiyaz', s16 = '$sod', s17 = '$bemeh', s18 = '$karmozd', s19 = '$sodpa2'  WHERE id=$id ";
if (mysqli_query($conn, $sql)) {
      echo "بروزرسانی انجام شد";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      mysqli_close($conn);
}
?>