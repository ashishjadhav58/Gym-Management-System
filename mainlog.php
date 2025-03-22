<?php
    $conn = new mysqli("localhost","root","","gymdb");
    if($conn->connect_error){
        echo " okkk ";
    }
    $q1 = "CREATE TABLE IF NOT EXISTS USERDATA (name VARCHAR (100),address varchar (200),contact BIGINT, email varchar(100),EXP varchar (100),age int, occupation varchar(100),tenure varchar(100),type varchar(100),username varchar(100),passwordd varchar(100))";
    if ($conn->query($q1) === TRUE) {
      } else {
        echo "Error creating table: " . $conn->error;
      }
      $q2 = "CREATE TABLE IF NOT EXISTS INDATA (name VARCHAR (100), email varchar(100),age int,username varchar(100),type varchar(100))";
      if ($conn->query($q2) === TRUE) {
        } else {
          echo "Error creating table: " . $conn->error;
        }
        $q3 = "CREATE TABLE IF NOT EXISTS OUTDATA (name VARCHAR (100), email varchar(100),age int,username varchar(100),type varchar(100))";
    if ($conn->query($q3) === TRUE) {
      } else {
        echo "Error creating table: " . $conn->error;
      }
    $age = $_GET["age"];
    $name = $_GET["nm"];
    $add = $_GET["ad"];
    $con =  $_GET["con"];
    $exp =  $_GET["exp"];
    $occ =  $_GET["occ"];
    $tenu =  $_GET["tenu"];
    $typ =  $_GET["type"];
    $mail = $_GET["mail"];
    $usnm =substr($name, 0, 6) . substr($con, 0, 4);
    $pass =  strrev(substr($con, 6, 10));
    $q4 = "INSERT INTO `USERDATA` (name,address,contact,email,EXP,age,occupation,tenure,type,username,passwordd) VALUES('$name','$add','$con','$mail','$exp','$age','$occ','$tenu','$typ','$usnm','$pass')";
    if ($conn->query($q4) === TRUE) {
    } else {
      echo $conn->error;
    }
    $q5 = "INSERT INTO `INDATA` (name,email,age,type,username) VALUES('$name','$mail','$age','$typ','$usnm')";
    if ($conn->query($q5) === TRUE) {
    } else {
      echo $conn->error;
    }
    header("Location:mainmember.php");
?>