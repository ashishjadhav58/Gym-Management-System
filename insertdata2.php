<?php
    $conn = new mysqli("localhost","root","","gymdb");
    if($conn->connect_error){
        echo " okkk ";
    }
    $q1 = "CREATE TABLE IF NOT EXISTS entrydaily (name VARCHAR (100),username varchar(100),age int,reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    if ($conn->query($q1) === TRUE) {
      } else {
        echo "Error creating table: " . $conn->error;
      }

      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql2 = "SELECT * from USERDATA WHERE USERNAME = '$id'";
         $type =(mysqli_query($conn,$sql2))->fetch_assoc();
        $age = $type['age'];
        $name = $type['name'];
        $typ = $type['type'];
        $mail = $type['email'];
        $q5 = "INSERT INTO `INDATA` (name,email,age,type,username) VALUES('$name','$mail','$age','$typ','$id')";
        if ($conn->query($q5) === TRUE) {
        } else {
          echo $conn->error;
        }
        $sql1="delete from `OUTDATA` where username = '$id'";

    $result=mysqli_query($conn,$sql1);
    if($result){
        header('Location:outdata.php');
    }
    else{
        die(mysqli_error($conn));
    }
    }
        
        
    
?>