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
  <div class="d1m">
    <div class="acname"><?php
include 'data/user.php';
?></div>
</div>
</div>
<div class="d2">
  <div class="d2m">
    <button type="button" class="btn btn-primary"><a href="dashbord?key=<?php echo $_GET["key"];?>">داشبرد</a></button>
    <button type="button" class="btn btn-primary"><a href="sefo?key=<?php echo $_GET["key"];?>">لیست فروشگاه</a></button>
    <button type="button" class="btn btn-primary"><a href="sesr?key=<?php echo $_GET["key"];?>">لیست سرمایه گذار</a></button>
    <button type="button" class="btn btn-primary"><a href="sarmaeygozar?key=<?php echo $_GET["key"];?>">ثبت سرمایه گذار</a></button>
  </div>
</div>
<div class="d3">
  <div class="d3m">
    <div id="accordion1" role="tablist">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne1">
          <h5 class="mb-0"> <a data-toggle="collapse" href="dashbord?key=<?php echo $_GET["key"];?>" role="button" aria-expanded="true" aria-controls="collapseOne1"> داشبرد </a> </h5>
        </div>
        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordion1"> </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo1">
          <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo1" role="button" aria-expanded="false" aria-controls="collapseTwo1"> فروشگاه ها&nbsp; </a> </h5>
        </div>
        <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1" data-parent="#accordion1">
          <div class="card-body">ثبت فروشگاه ها</div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingThree1">
          <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseThree1" role="button" aria-expanded="false" aria-controls="collapseThree1"> سرمایه گذاران </a> </h5>
        </div>
        <div id="collapseThree1" class="collapse" role="tabpanel" aria-labelledby="headingThree1" data-parent="#accordion1">
          <div class="card-body">ثبت سرمایه گداران</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="d4">
  <div class="d4m">
	  <table width="100%" border="0" class="ta0">
  <tbody>
    <tr>
      <td class="ta2">ویرایش </td>
      <td class="ta2">نمایش</td>
      <td class="ta2">سهام پایه</td>
      <td class="ta2">تلفن همراه</td>
      <td class="ta2">تلفن ثابت</td>
      <td class="ta2">نام ونام خانوادگی </td>
      <td class="ta2">نام فروشگاه</td>
    </tr>
  </tbody>
</table>
	  <?php
include 'data/db.php';
$user = $_GET["key"];
$sql = "SELECT id, f1, f2, f3, f4, f5 FROM fo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      echo '<table width="100%" border="0" class="ta1">
  <tbody>
    <tr>
      <td class="ta2"><button class="btn btn-primary"><a href="sefo?key='.$user.'&up='.$row['id'].'">ویرایش</a></button></td>
      <td class="ta2"><button class="btn btn-primary"><a href="showdf?key='.$user.'&show='.$row['id'].'">نمایش</a></button></td>
      <td class="ta2">'.$row["f5"].'</td>
      <td class="ta2">'.$row["f4"].'</td>
      <td class="ta2">'.$row["f3"].'</td>
      <td class="ta2">'.$row["f2"].'</td>
      <td class="ta2">'.$row["f1"].'</td>


    </tr>
  </tbody>
</table>' ;
    }
} else {
    echo "0";
}
$conn->close();
?>
</div>
<?php
if ($_GET["up"] !=""){
    include 'data/updata.php';
}
?>
</div>
<div class="d5">تمامی حقوق این برنامه برای فروشگاه وصال محفوظ است</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>