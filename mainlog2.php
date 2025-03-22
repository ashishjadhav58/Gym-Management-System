<?php
    $conn = new mysqli("localhost","root","","gymdb");
    if($conn->connect_error){
        echo " okkk ";
    }
    $un = $_GET['USERNAME'];
    $ps = $_GET['PASSWORD'];
     $sql = "SELECT * FROM USERDATA WHERE username = '$un' and passwordd = '$ps' ";
     $result = mysqli_query($conn,$sql);
     $sql2 = "SELECT * from USERDATA WHERE USERNAME = '$un'";
     $type =(mysqli_query($conn,$sql2))->fetch_assoc();
     $cnt = mysqli_num_rows($result);
    if($cnt==1){
        session_start();
        $_SESSION['unn'] = $un;
        $_SESSION['name'] = $type['name'];
        if($type['type'] === "MEMBER"){
        header("Location:mainmember.php");}
        else{
            header("Location:maintrainer.php");
        }
    }
    else{
        header("Location:index.html");
    }
    echo $type['name'];

?>