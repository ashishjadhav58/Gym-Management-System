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
    <?php
    $conn = mysqli_connect("localhost", "root", "", "gymdb");
?><br><br>
<div class="row justify-content-center" >
    <div class="col-3 ">
        <input class="search" style="color:red;border-radius:25px;border:4px solid red ; width:100%" type="text" onkeyup="search()" width="550px" placeholder=" search here ..... ">
    </div>
</div>
<br><br>
<div class="row justify-content-center">
    <div class="col-sm-1">
        <a href="maintrainer.php" style="border-radius:25px;color:red;border:4px solid red;PADDING:5PX;"><b>IN-DATA</b></a>
    </div>
    <div class="col-sm-1">
       <a href="outdata.php" style="border-radius:25px;color:white;border:4px solid red;background-color:red;PADDING:5PX;"><b>OUT-DATA</b></a>
    </div>
</div>
<br><br>
<div class="container" style="background-color:red" >
    <div class="row"  style="color:white;font-weight:bolder; border:1px solid white">
                <div class="col-sm-2" style="border:2px solid white;padding:10px">NAME</div>
                <div class="col-sm-1" style="border:2px solid white";padding:10px>AGE</div>             
                <div class="col-sm-2" style="border:2px solid white";padding:10px>USERNAME</div>
                <div class="col-sm-2"style="border:2px solid white";padding:10px>TYPE</div>
                <div class="col-sm-3"style="border:2px solid white;padding:10px">EMAIL</div>
                <div class="col-sm-2"style="border:2px solid white;padding:10px" width="100%">ENTRY</div>

    </div>
</div>

<div class="container" style="background-color:red" id="okok">
</div>
<script>
    let datamain=[];
    let ele_container = document.getElementById("okok");
    <?php
    $sqlget = "SELECT * FROM OUTDATA where type='MEMBER'";
    $sqldata = mysqli_query($conn , $sqlget) or die('error');
    while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
     $name=$row['name'];
     $um = $row['username'];
     $age = $row['age'];
     $type = $row['type'];
     $email = $row['email'];
     ?>
      data = { name : '<?php echo $name?>',
        us : '<?php echo $um?>',
        ag : '<?php echo $age?>',
        type: '<?php echo $type?>',
        email : '<?php echo $email?>',
        }
     datamain.push(data);

     <?php
    }?>
    let filterList = datamain;
     console.log(datamain);
     let searchbox =  document.querySelector(".search");
   let b = document.querySelectorAll(".a");
   b.forEach(z => {
            z.addEventListener("click",()=>
        {
            for(let i=0;i<b.length;i++){
                if(b[i].id==event.target.id){
                    b[i].style.backgroundColor="GREEN";
                    b[i].style.color="white";
     }}  })
            });
            
            display();
            function display(){
                let html="";
                filterList.forEach((z ,index)=>{
                html+=`
                <div class="row"  style="color:white;font-weight:bolder; border:1px solid white">
                <div class="col-sm-2" style="border:2px solid white;padding:10px">${z.name}</div>
                <div class="col-sm-1" style="border:2px solid white";padding:10px>${z.ag}</div>             
                <div class="col-sm-2" style="border:2px solid white";padding:10px>${z.us}</div>
                <div class="col-sm-2"style="border:2px solid white";padding:10px>${z.type}</div>
                <div class="col-sm-3"style="border:2px solid white;padding:10px">${z.email}</div>
                <div class="col-sm-2"style="border:2px solid white;padding:10px"><a href="insertdata2.php?id=${z.us}" onclick="yes(event)" id="${z.us}" style="border-radius:25px;border:4px solid white;padding-left:15px;padding-right:15px">OUT</a></div>
                </div>`;
                console.log(z);
            })
                
                ele_container.innerHTML=html;
}
function search(){
    target=searchbox.value;
    filterList = datamain.filter((e, index) =>
          e.name.toLowerCase().startsWith(target.toLowerCase())
        );
    display();
    
}
function yes(event){
    filterList = datamain.filter((e, index) => e.us != event.id);
    display();
}
let ins = document.getElementById("in");
let out = document.getElementById("out");
function ts(){
        window.location="maintrainer.php";
    }
</script>

</body>
</html>