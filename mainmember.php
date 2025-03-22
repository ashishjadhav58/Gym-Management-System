<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRENGTH FITNESS CLUB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/jpg" href="logo.png">
    <style>
        a:hover {
  color: rgb(255, 146, 146);
}
a{
    text-decoration: none;
    color: white;
}
    </style>
</head>
<body>
    <nav>
        <div class="container-fluid" style="background-color: red;width: 100%;height: 100px;">
            <div class="row">
                
<div class="col-sm-1">
    <img src="logo.png" width="150px" height="150px" onclick="ts()">
    
</div>
<div class="col-sm-4 ms-5  mt-4 "><h1 style="font-size: 39px; color: white;"><b>STRENGTH FITNESS CLUB</b></h1></div>
<div class="col-sm-3 text-center ms-4" style="margin-top:35px ;">
    <div class="row justify-content-between">
        <div class="col as">
            <a href="aboutus.php" id="uq"><b>ABOUTUS</b></a>
        </div>
        <div class="col as">
            <a  href="data2.php"><b>DATA</b></a>
        </div>
        <div class="col as">
            <a  href="bmicalc.php"><b>BMI-CALC</b></a>
        </div>
    </div>
</div>
<?php
    session_start();
?>
<div class="col-sm-3 mt-3 ms-5" >
    <p style="color: white;text-align: justify;font-weight: bolder;">MEMBER NAME - <?php echo $_SESSION['name']; ?> </p>
    <p style="color: white;text-align: justify;font-weight: bolder;">GYM CODE - <?php echo $_SESSION['unn']; ?></p>
</div>
            </div>
        </div>
    </nav><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4 " style="background-color:red;border-radius:25px; border:7px solid white;">
            <div class="row">
                <img src="gymimm.jpg" width="100%" height="auto" style="border-radius:25px;"alt="">
            </div>
            <div class="row m-4 text-center">
                <h4 style="color:white;margin-bottom:20px;">GYM CONSISTENCY REPORT</h4>
                <a href="data2.php" style="border:4px solid white;border-radius:25px;"><b>TRY NOW</b></a>
            </div>
        </div>
        <div class="col-sm-4" style="background-color:red;border-radius:25px;border:7px solid white;">
            <div class="row">
                <img src="D2.jpg" width="100%" height="450px" style="border-radius:25px;"alt="">
            </div>
            <div class="row m-4 text-center">
            <h4 style="color:white;margin-bottom:20px;">GYM PROGRESS REPORT</h4>
                <a href="bmidata.php" style="border:4px solid white;border-radius:25px;"><b>TRY NOW</b></a>
            </div>
        </div>
        <div class="col-sm-4" style="background-color:red;border-radius:25px;border:7px solid white;">
            <div class="row">
                <img src="bmi.png" width="100%" height="450px" style="border-radius:25px;"alt="">
            </div>
            <div class="row m-4 text-center">
                <h4 style="color:white;margin-bottom:20px;">BMI CALCULATOR</h4>
                <a href="bmicalc.php" style="border:4px solid white;border-radius:25px;"><b>TRY NOW</b></a>
            </div>
        </div>
    </div>
</div>
<script>
    function ts(){
        window.location="mainmember.php";
    }
</script>
</body>

</html>