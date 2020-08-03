<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>acc</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="d1">
  <div class="d1m"><?php
include 'data/user.php';
?></div>
</div>
<div class="d2">
  <div class="d2m">
    <button type="button" class="btn btn-primary"><a href="dashbord?key=<?php echo $_GET["key"];?>">داشبرد</a></button>
    <button type="button" class="btn btn-primary"><a href="sefo?key=<?php echo $_GET["key"];?>">لیست فروشگاه</a></button>
    <button type="button" class="btn btn-primary"><a href="sesr?key=<?php echo $_GET["key"];?>">لیست سرمایه گذار</a></button>
    <button type="button" class="btn btn-primary"><a href="sarmaeygozar?key=<?php echo $_GET["key"];?>">ثبت سرمایه گذار</a></button>
    <button type="button" class="btn btn-primary"><a href="repsod?key=<?php echo $_GET["key"];?>">گزارش سود کل</a></button>
    <button type="button" class="btn btn-primary"><a href="repkarmozd?key=<?php echo $_GET["key"];?>">گزارش کارمزد</a></button>
    <button type="button" class="btn btn-primary"><a href="repbemeh?key=<?php echo $_GET["key"];?>"> گزارش بیمه</a></button>
  </div>
</div>
<div class="d3">
  <div class="d3m">
    <div id="accordion1" role="tablist">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne1">
          <h5 class="mb-0"> <a data-toggle="collapse" href="dashbord?key=<?php
            include 'data/db.php';
            $user = $_GET["key"];
            $sql = "SELECT id, u1, u2, u3, u4 FROM us";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
            
                    if ($user == $row["u3"]){
                        echo $row["u3"];
                    } else {
                        echo "";
                    }
                }
            } else {
                echo "0";
            }
            $conn->close();
            ?>" role="button" aria-expanded="true" aria-controls="collapseOne1"> داشبرد </a> </h5>
        </div>
        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordion1"> </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo1">
          <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo1" role="button" aria-expanded="false" aria-controls="collapseTwo1"> فروشگاه ها&nbsp; </a> </h5>
        </div>
        <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1" data-parent="#accordion1">
          <div class="card-body"> <a href="foroshgah?key=<?php
include 'data/db.php';
$user = $_GET["key"];
$sql = "SELECT id, u1, u2, u3, u4 FROM us";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        if ($user == $row["u3"]){
			echo $row["u3"];
		} else {
			echo "";
		}
    }
} else {
    echo "0";
}
$conn->close();
?> ">ثبت فروشگاه ها </a></div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingThree1">
          <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseThree1" role="button" aria-expanded="false" aria-controls="collapseThree1"> سرمایه گذاران </a> </h5>
        </div>
        <div id="collapseThree1" class="collapse" role="tabpanel" aria-labelledby="headingThree1" data-parent="#accordion1">
          <div class="card-body"> <a href="sarmaeygozar?key=<?php
include 'data/db.php';
$user = $_GET["key"];
$sql = "SELECT id, u1, u2, u3, u4 FROM us";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        if ($user == $row["u3"]){
			echo $row["u3"];
		} else {
			echo "";
		}
    }
} else {
    echo "0";
}
$conn->close();
?> " >ثبت سرمایه گداران</a></div>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="d4">
  <div class="d4m">&nbsp;</div>
  <div class="dash1">سود های قابل پرداخت<p>
      <?php
include 'data/db.php';
$user = $_GET["key"];
$sql = "SELECT id, SUM(s19) FROM sa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sum = number_format($row["SUM(s19)"]);
     echo $sum;

    }
} else {
    echo "0";
}
$conn->close();
?>
  </p></div>
  <div class="dash2">درآمد کار مزد ها<p>
      <?php
include 'data/db.php';
$user = $_GET["key"];
$sql = "SELECT id, SUM(s18) FROM sa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sum = number_format($row["SUM(s18)"]);
     echo $sum;

    }
} else {
    echo "0";
}
$conn->close();
?>
  </p></div>
  <div class="dash3">صندوق بیمه<p>
      <?php
include 'data/db.php';
$user = $_GET["key"];
$sql = "SELECT id, SUM(s17) FROM sa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sum = number_format($row["SUM(s17)"]);
     echo $sum;

    }
} else {
    echo "0";
}
$conn->close();
?>
  </p></div>
  <div class="dash4">مجموع سهام ها<p>
      <?php
include 'data/db.php';
$user = $_GET["key"];
$sql = "SELECT id, SUM(s14) FROM sa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sum = $row["SUM(s14)"];
     echo $sum;

    }
} else {
    echo "0";
}
$conn->close();
?>
  </p></div>
    <div class="dash5"><a href="sesr?key=<?php echo $_GET["key"];?>">تعداد سرمایه گذاران</a><p>
      <?php
include 'data/db.php';
$sql = "SELECT id FROM sa";
$result = $conn->query($sql);
$count = mysqli_num_rows($result);
     echo $count;
$conn->close();
?>
  </p></div>
      <div class="dash6"><a href="sefo?key=<?php echo $_GET["key"];?>">لیست فروشگاه</a><p>
      <?php
include 'data/db.php';
$sql = "SELECT id FROM fo";
$result = $conn->query($sql);
$count = mysqli_num_rows($result);
     echo $count;
$conn->close();
?>
  </p></div>
        <div class="dash7">نسبت سرمایه به درآمد<p>
      <?php
include 'data/db.php';
$user = $_GET["key"];
$sql = "SELECT id, SUM(s14) FROM sa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sum = $row["SUM(s14)"];
     echo $sum;

    }
} else {
    echo "0";
}
$conn->close();
?>
  </p></div>
          <div class="dash8">درآمد کل<p>
      <?php
include 'data/db.php';
$user = $_GET["key"];
$sql = "SELECT id, SUM(s14) FROM sa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sum = $row["SUM(s14)"];
     echo $sum;

    }
} else {
    echo "0";
}
$conn->close();
?>
  </p></div>
  <div class="d4f"> </div>
</div>
<div class="d5">تمامی حقوق این برنامه برای فروشگاه وصال محفوظ است</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>
