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
    <button type="button" class="btn btn-primary"><a href="sarmaeygozar?key=<?php echo $_GET["key"];?>">ثبت سرمایه گذار</a></butto
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
  <div class="d4m">&nbsp;</div>
  <div class="d4f">
    <form name="formforshgah" action="foroshgah?key=<?php echo $_GET["key"];?>&send=120" method="post" >
      <div class="form-group">
        <label for="exampleInputEmail1">نام فروشگاه</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="f1">
</div>
      <div class="form-group">
        <label for="exampleInputPassword1">نام و نام خانوادگی</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="f2">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword2">تلفن ثابت</label>
        <input type="number" class="form-control" id="exampleInputPassword2" placeholder="" name="f3">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword3">تلفن همراه</label>
        <input type="number" class="form-control" id="exampleInputPassword3" placeholder="" name="f4">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword4">مبلغ پابه سهام</label>
        <input type="number" class="form-control" id="exampleInputPassword4" placeholder="" name="f5">
      </div>
<div class="form-check">
        <label class="form-check-label" for="exampleCheck1">&nbsp;</label>
  </div>
      <button type="submit" class="btn btn-primary">ثبت فروشگاه</button>
      <br><?php 
      $form = $_GET["send"];
      if ($form == "120"){
          include 'data/addsaller.php';
      }
      ?></br>
    </form>
  </div>
</div>
<div class="d5">تمامی حقوق این برنامه برای فروشگاه وصال محفوظ است</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>