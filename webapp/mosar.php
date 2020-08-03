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
    <div class="acname">
        <?php
include 'data/user.php';
?>
    </div>
</div>
</div>
<div class="d2">
  <div class="d2m">
          <button type="button" class="btn btn-primary"><a href="dashbord?key=<?php echo $_GET["key"];?>">داشبرد</a></button>
    <button type="button" class="btn btn-primary"><a href="sefo?key=<?php echo $_GET["key"];?>">لیست فروشگاه</a></button>
    <button type="button" class="btn btn-primary"><a href="sarmaeygozar?key=<?php echo $_GET["key"];?>">ثبت سرمایه گذار</a></button>
    <button type="button" class="btn btn-primary"><a href="sesr?key=<?php echo $_GET["key"];?>">لیست سرمایه گذاران</a></button>
    <button type="button" class="btn btn-primary"><a href="mosar?key=<?php echo $_GET["key"];?>&mo=<?php echo $_GET["mo"];?>&up=180">محاسبه</a></button>
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
  <div class="d4m">&nbsp;</div>
  <div class="d4f">
    <form name="formforshgah" action="mosar?key=<?php echo $_GET["key"];?>&mo=<?php echo $_GET["mo"];?>&up=150"  method ="post" >
              <div class="form-group">
        <label for="exampleInputPassword6">ملبغ سرمایه</label>
        <input type="number" class="form-control" id="exampleInputPassword6" placeholder="" name="f6">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword6">تاریخ واریز</label>
        <input type="date" class="form-control" id="exampleInputPassword6" placeholder="" name="f7">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword7">تعین کارمزد</label>
        <input type="number" class="form-control" id="exampleInputPassword7" placeholder="" name="f8">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword8">تعین نرخ بیمه</label>
        <input type="number" class="form-control" id="exampleInputPassword8" placeholder="" name="f9">
      </div>
		 <div class="form-group">
        <label for="exampleInputPassword8">مبلغ سود</label>
        <input type="number" class="form-control" id="exampleInputPassword8" placeholder="" name="f10">
      </div>
		<div class="form-group">
        <label for="exampleInputPassword8">کد فروشگاه</label>
        <select type="select-option" class="form-control" id="exampleInputPassword8" placeholder="" name="f12" > <?php include 'data/sfo.php';?> </select>
      </div>
      		<div class="form-group">
        <label for="exampleInputPassword8">اتصال به فروشگاه</label>
        <select type="select-option" class="form-control" id="exampleInputPassword8" placeholder="" name="fs" > <?php include 'data/sso.php';?> </select>
      </div>
		<div class="form-group">
        <label for="exampleInputPassword8">کسر سرمایه</label>
        <input type="number" class="form-control" id="exampleInputPassword8" placeholder="" name="f13">
      </div>
<div class="form-check">
        <label class="form-check-label" for="exampleCheck1">&nbsp;</label>
  </div>
      <button type="submit"  class="btn btn-primary">ثبت سرمایه گذار</button>
            <br><?php 
      if ($_GET["up"] == "150"){
          include 'data/addmosar.php';
      }
      ?>
      <?php 
      if ($_GET["up"] == "180"){
          include 'data/newaddmo.php';
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
