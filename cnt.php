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
<div class="col-sm-4 text-center mt-4 ms-4"><h1 style="color: white;font-size: 39px;"><b>STRENGTH FITNESS CLUB</b></h1></div>
<div class="col-sm-3 text-center ms-4" style="margin-top:35px ;">
    <div class="row justify-content-between">
        <div class="col">
            <a  href="aboutus2.php"><b>ABOUTUS</b></a>
        </div>
        <div class="col">
            <a href="data.php"><b>DATA</b></a>
        </div>
        <div class="col">
            <a  href="cnt.php"><b>CONTACT</b></a>
        </div>
    </div>
</div>
<?php
    session_start();
?>
<div class="col-sm-3 mt-3 ms-5" >
    <p style="color: white;text-align: justify;font-weight: bolder;">TRAINER NAME - <?php echo $_SESSION['name']; ?></p>
    <p style="color: white;text-align: justify;font-weight: bolder;">GYM CODE - <?php echo $_SESSION['unn']; ?> </p>
</div>
            </div>
        </div>
    </nav>
    <div class="container"><br><br><br>
    <div class="row justify-content-center">
        <h1 style="text-align:center;color:red;"><b>CONTACT PAGE</b></h1>
</div></div>
    <div class="container"><br><br>
        <div class="row justify-content-center">
            <div class="col-sm-5 align-items-center text-center">
            <form method="post">
                <input type="text" style="width:100%;height:200px;text-align:center;border:3px solid red;" name="req" id="" placeholder="Enter your request ..... ">
                <br><br>
                <input style="margin-left:auto;margin-right:auto;color:white;font-weight:bolder;border:2px solid red;background-color:red;padding-left:15px;padding-right:15px;border-radius:25px;" type="submit" name="send" value="SEND">
            </form>
            </div>
        </div>
    </div>
<script>function ts(){
        window.location="maintrainer.php";
    }</script>
    <?php
    $conn = new mysqli("localhost","root","","gymdb");
    if($conn->connect_error){
        echo " okkk ";
    }
    $q1 = "CREATE TABLE IF NOT EXISTS TRAINERREQ (name VARCHAR (100),tid varchar(100),req varchar(200))";
    if ($conn->query($q1) === TRUE) {
      } else {
        echo "Error creating table: " . $conn->error;
      }
    if(isset($_POST['send'])){
        $name = $_SESSION['name'];
        $id = $_SESSION['unn'];
        $res = $_POST['req'];
        $q4 = "INSERT INTO `TRAINERREQ` (name,tid,req) values('$name','$id','$res')";
        $conn->query($q4);}
    ?>
    
</body>
</html>