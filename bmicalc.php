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
#uq{
    color: rgb(241, 140, 104);
}
label{
    color: red;
    font-weight: bolder;
}
    </style>
</head>
<body>
    <?php
        $conn = new mysqli("localhost","root","","gymdb");
        if($conn->connect_error){
            echo " okkk ";
        }
        session_start();
       
        
        $q1 = "CREATE TABLE IF NOT EXISTS USERDATAPROG (name varchar(100),id VARCHAR(100) , age int, gender varchar(100),height float,weight float,bmi float , remark varchar(100),times TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    if ($conn->query($q1) === TRUE) {
      } else {
        echo "Error creating table: " . $conn->error;
      }
      if(isset($_POST['bmid'])){
        $age =$_POST['age'];
        $id=$_SESSION['unn'];
        $name= $_SESSION['name'];
        $gr = $_POST['GENDER'];
        $ht =  $_POST['ht'];
        $wt =  $_POST['wt'];
        $meter=$ht/100;
        $bmi = ($wt)/($meter*$meter);
        if($bmi<18.4){
            $rm="UNDERWEIGHT";
        }
        elseif(18.5<=$bmi && $bmi<24.9){
            $rm="normal";
        }
        elseif(25<=$bmi && $bmi<39.9){
            $rm="OVERWEIGHT";
        }
        else if($bmi>40){
            $rm="OBESE";
        }
        else{
            $rm="";
        }
        $sql = "INSERT INTO USERDATAPROG (name,id,age,gender,height,weight,bmi,remark)values('$name','$id','$age','$gr','$ht','$wt','$bmi','$rm')";
        if ($conn->query($sql) === TRUE) {
        } else {
          echo $conn->error;
        }
      }
    ?>
        <nav>
        <div class="container-fluid" style="background-color: red;width: 100%;height: 100px;">
            <div class="row">
                
            <div class="col-sm-1">
    <img src="logo.png" width="150px" height="150px" onclick="ts()">
    
</div>
<script>
    function ts(){
        window.location="mainmember.php";
    }
</script>
<div class="col-sm-4 ms-5  mt-4 "><h1 style="font-size: 39px; color: white;"><b>STRENGTH FITNESS CLUB</b></h1></div>
<div class="col-sm-3 text-center ms-4" style="margin-top:35px ;">
    <div class="row justify-content-between">
        <div class="col as">
            <a href="aboutus.php" ><b>ABOUTUS</b></a>
        </div>
        <div class="col as">
            <a  href="DATA2.PHP"><b>DATA</b></a>
        </div>
        <div class="col as">
            <a  href="bmicalc.php" id="uq"><b>BMI-CALC</b></a>
        </div>
    </div>
</div>
<div class="col-sm-3 mt-3 ms-5" >
    <p style="color: white;text-align: justify;font-weight: bolder;">MEMBER NAME - <?php echo $_SESSION['name']; ?></p>
    <p style="color: white;text-align: justify;font-weight: bolder;">GYM CODE - <?php echo $_SESSION['unn']; ?> </p>
</div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row text-center mt-4">
            <h1 style="color: red;">BMI CALCULATOR</h1>
        </div>
    
        <div class="row justify-content-center mt-5">
            <div class="col-sm-8 text-center" style="border: 5px solid red;box-shadow: 5px 5px 20px 2px red;"><br><br>
            <form method="POST">   
            <label >AGE : &nbsp;&nbsp;&nbsp;&nbsp;</label><input name="age"   id="age" type="text" placeholder="age between 2-100" required><br><br>
                <label>GENDER : &nbsp;&nbsp;&nbsp;</label><input type="radio" value="male" name="GENDER" id="as"><label>&nbsp;&nbsp;MALE&nbsp;&nbsp; </label><input type="radio" value="female" name="GENDER" id="as"><label>&nbsp;&nbsp;FEMALE&nbsp;&nbsp;</label><br><br>
                <label >HEIGHT :&nbsp;&nbsp; </label><input  id="ht" type="text" name="ht" placeholder="height in cm" required><br><br>
                <label >WEGIHT :&nbsp;&nbsp; </label><input  id="wt" type="text" name="wt" placeholder="weight in kg" required><br><br><br>
                <div class="row justify-content-center">
                    <div class="col-sm-2">
                        <button id="cl" style="color: red;border: 2px solid red;background-color: white;" onclick="cal()"><b>&nbsp;CALCULATE&nbsp;</b></button>
                    </div>
                    <div class="col-sm-2" >
                        <button id="kl" style="color: red;border: 2px solid red;background-color: white;" onclick="tss()"><b>&nbsp;&nbsp;&nbsp; CLEAR &nbsp;&nbsp;&nbsp;</b></button>
                    </div>
                    <div class="col-sm-2" >
                        <button id="kl" style="color: red;border: 2px solid red;background-color: white;" type="submit" name="bmid"><b>&nbsp;&nbsp;&nbsp; SAVE &nbsp;&nbsp;&nbsp;</b></button>
                    </div>
                </div>
                </form>
                <br>
                <div class="row justify-content-center" style="color: red;">
                    <div class="col-sm-4" name="bmi" id="res" style="color:red;font-weight:bolder;font-size:30px;"></div>
                </div><br>
                <div class="row justify-content-center" style="color: red;">
                    <div class="col-sm-4" name="rm" id="rem" style="color:red;font-weight:bolder;text-size:100px;font-size:30px;"></div>
                </div><br>
            </div> 
        </div>
    </div>
    <script>
        
        let age=document.getElementById("age");
        let height=document.getElementById("ht");
        let weight=document.getElementById("wt");
        let calc = document.getElementById("cl");
        let clear = document.getElementById("kl")
        let output= document.getElementById("result");
        let a=document.getElementsByName("GENDER");
        let data=""
        let result=0 ;
            let html=""
        function cal(){
            event.preventDefault();
            if(height.value=="" || weight.value == "" || age.value==""){
                alert("Please Enter data")
            }
            else{
                let meter=(height.value)/100;
                result=(weight.value)/(meter*meter);
            if(result<18.4){
                data="UNDERWEIGHT"
            }
            else if(18.5<=result && result<24.9){
                data="normal"
            }
            else if(25<=result && result<39.9){
                data="OVERWEIGHT"
            }
            else if(result>40){
                data="OBESE"
            }
            else{
                data=""
            }
            let r1= document.getElementById("res");
            let r2 = document.getElementById("rem");
            r1.innerHTML = result + " % ";
            r2.innerHTML = data;
        }}
        
        
        
       function tss(){
            height.value=""
            weight.value=""
            age.value=""
            for(let i=0;i<a.length;i++){
                a[i].checked=false;
            }
        }
    </script>
</body>
</html>