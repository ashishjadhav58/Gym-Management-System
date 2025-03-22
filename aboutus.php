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
            <a  href="DATA2.PHP"><b>DATA</b></a>
        </div>
        <div class="col as">
            <a  href="bmicalc.php"><b>BMI-CALC</b></a>
        </div>
        <?php
    session_start();
?>
    </div>
</div>
<div class="col-sm-3 mt-3 ms-5" >
    <p style="color: white;text-align: justify;font-weight: bolder;">MEMBER NAME - <?php echo $_SESSION['name']; ?> </p>
    <p style="color: white;text-align: justify;font-weight: bolder;">GYM CODE - <?php echo $_SESSION['unn']; ?> </p>
</div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <h1 style="text-align: center;font-weight: bolder;color: red;">ABOUT-US </h1>
        </div>
        <div class="row " style="border: 5px solid red;margin-top: 50px;box-shadow: 5px 5px 25px 5px red;">
            <div class="col-sm-6">
                <img src="au1.jpg" width="100%" height="auto" alt="">
            </div>
            <div class="col-sm-6">
            <p class="mt-4" style="font-weight: bolder;color: red;"> Nestled in the serene neighborhood of Ahilyanagar, Karjat, Maharashtra, STRENGTH fitness club burst onto the fitness scene on May 10, 2022. Founded by Yash, a visionary entrepreneur with a passion for health and wellness, the gym quickly became a beacon of vitality and community spirit in the region.

                The inception of STRENGTH fitness club was born from Yash's deep-rooted belief in the transformative power of fitness. With a mission to inspire and empower individuals of all ages and fitness levels, yash meticulously planned every detail of the gym's establishment. The location in Ahilyanagar was chosen for its accessibility and tranquil surroundings, providing an ideal setting for fitness enthusiasts to pursue their health goals.
                
                From the outset, STRENGTH fitness club distinguished itself not only through its state-of-the-art equipment but also through its commitment to personalized service and inclusivity. yash and the dedicated team of trainers and staff ensured that each member received tailored guidance and support, fostering a sense of belonging and motivation within the gym's walls.
                          </p>   
            </div>
        </div>
        
        <div class="row" style="margin-top: 100px;border: 5px solid red;box-shadow: 5px 5px 25px 5px red;">
            
            <div class="col-sm-6">
            <p class="mt-5" style="font-weight: bolder;color: red;"> Nestled in the serene neighborhood of Ahilyanagar, Karjat, Maharashtra, STRENGTH fitness club burst onto the fitness scene on May 10, 2022. Founded by Yash, a visionary entrepreneur with a passion for health and wellness, the gym quickly became a beacon of vitality and community spirit in the region.

                The inception of STRENGTH fitness club was distinguished itself not only through its state-of-the-art equipment but also through its commitment to personalized service and inclusivity. yash and the dedicated team of trainers and staff ensured that each member received tailored guidance and support, fostering a sense of belonging and motivation within the gym's walls.
                          </p>   
            </div>
            <div class="col-sm-6">
                <img src="au2.jpeg" width="100%" height="auto" alt="">
            </div>
        </div>
        <div class="row " style="margin-top: 100px;border: 5px solid red;box-shadow: 5px 5px 25px 5px red;">
            <div class="col-sm-6">
                <img src="au3.jpeg" width="100%" height="auto" alt="">
            </div>
            <div class="col-sm-6">
            <p class="mt-4" style="font-weight: bolder;color: red;"> in the transformative power of fitness. With a mission to inspire and empower individuals of all ages and fitness levels, yash meticulously planned every detail of the gym's establishment. The location in Ahilyanagar was chosen for its accessibility and tranquil surroundings, providing an ideal setting for fitness enthusiasts to pursue their health goals.
                
                From the outset, STRENGTH fitness club distinguished itself not only through its state-of-the-art equipment but also through its commitment to personalized service and inclusivity. yash and the dedicated team of trainers and staff ensured that each member received tailored guidance and support, fostering a sense of belonging and motivation within the gym's walls.
                          </p>   
            </div>
        </div>
    </div>
<br><br><br><br>
<script>
    function ts(){
        window.location="mainmember.php";
    }
</script>
</body>
</html>