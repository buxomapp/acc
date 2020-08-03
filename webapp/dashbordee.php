<?php
include 'data/db.php';
$user = $_GET["key"];
$sql = "SELECT id, u1, u2, u3, u4 FROM us";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        if ($user == $row["u3"]){
			echo '<!doctype html>
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
  <div class="d1m">عزیز خوش آمدین '.$row["u4"].'</div>
</div>
<div class="d2">
  <div class="d2m">
    <button type="button" class="btn btn-primary">ثبت فروشگاه ها</button>
    <button type="button" class="btn btn-primary">لیست فروشگاه ها</button>
    <button type="button" class="btn btn-primary">demodemo</button>
    <button type="button" class="btn btn-primary">demodemo</button>
  </div>
</div>
<div class="d3">
  <div class="d3m">
    <div id="accordion1" role="tablist">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne1">
          <h5 class="mb-0"> <a data-toggle="collapse" href="dashbord.html" role="button" aria-expanded="true" aria-controls="collapseOne1"> داشبرد </a> </h5>
        </div>
        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordion1"> </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo1">
          <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo1" role="button" aria-expanded="false" aria-controls="collapseTwo1"> فروشگاه ها&nbsp; </a> </h5>
        </div>
        <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1" data-parent="#accordion1">
          <div class="card-body"><a href="foroshgah?key='.$row["u3"].'"</a>اضافه کردن فروشگاه</div>
		 <div class="card-body">لیست فروشگاه ها</div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingThree1">
          <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseThree1" role="button" aria-expanded="false" aria-controls="collapseThree1"> سرمایه گذاران </a> </h5>
        </div>
        <div id="collapseThree1" class="collapse" role="tabpanel" aria-labelledby="headingThree1" data-parent="#accordion1">
          <div class="card-body"><a href="sarmaeygozar?key='.$row["u3"].'"</a>ثبت سرمایه گذار</div>
			<div class="card-body">لیست سرمایه گذاران</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="d4">
  <div class="d4m">&nbsp;</div>
  <div class="dash1">Content for New div Tag Goes Here</div>
  <div class="dash2">Content for  class "dash2" Goes Here</div>
  <div class="dash3">Content for  class "dash3" Goes Here</div>
  <div class="dash4">Content for  class "dash4" Goes Here</div>
  <div class="d4f"> </div>
</div>
<div class="d5">تمامی حقوق این برنامه برای فروشگاه وصال محفوظ است</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>';

	
		} else {
			echo "";

		}
    }
} else {
    echo "0";
}

$conn->close();
?>
