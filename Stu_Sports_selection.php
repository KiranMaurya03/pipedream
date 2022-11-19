<?php
session_start();
// echo $_SESSION['studentName'];
// echo $_SESSION['studentId'];
if($_SESSION['studentId'] == ""  || $_SESSION['studentName'] == ""){
    header("location:stud_login.php");
}
include_once("connection.php");
$query="select * from stu_sports_registration";

// echo $query2;exit;
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){ 
    for($i=0;$i<mysqli_num_rows($result);$i++){
        $data = mysqli_fetch_assoc($result);
        $sno = $data['sno'];
        $content=$data['content'];

        // array_push($selectedSports,$data['sports_id']);
      //while($data = mysqli_fetch_assoc($result2)){
        
        //echo $shirtSize."-<br>";
      //}
    }
}else{
    $ssr_id = "0";
    $sports_id="";
}
  //echo $shirtSize;exit;
 // print_r($selectedSports);exit;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>iSports: Sports_Form</title>
        <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/Stu_Sports_selection.css">
    <link rel="icon" href="images/logo/lpu.png">
    </head>
    <body>
        <div class="head">
            <header>
                <div class="header-phone">
                <i class="fa fa-phone">&nbsp;&nbsp;</i><a href="tel:+917052055555">+917052055555</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>|</span>
                </div>
                
                <div class="header-email">
                <i class="fa fa-envelope-o">&nbsp;&nbsp;</i><a href="email:info@smsvaranasi.com">info@smsvaranasi.com</a>
                </div>
            </header>
            </div>  
        <div class="nav-class" style="padding-bottom:25px;">
            <nav class="nav-bar" style="margin-left: 120px;">
                <ul style="margin-right:1220px;">
                <li><a href="index.php"><img class="logo" src="images/logo/logo.jpg" alt="isports logo" style="margin-top: -10px;margin-left: -140px; display:inline-block"></a></li>
                </ul>
                <ul style="margin-top:-60px;">
                    <li><a href="index.php" target="_blank">Home</a></li>
                    <li><a href="about.php" target="_blank">About Us</a></li>
                    <li><a href="contact.php" target="_blank">Contact Us</a></li>
                </ul>
                <div class="button" style="margin-left:1200px;"><i class="fa fa-user-circle-o" style="font-size:60px;position:absolute;top:80px;right:220px;"></i>

                        <?php
                        $data=mysqli_fetch_assoc($result1);
                        ?>
                        <div class="sports-css">
                        <h1 style="margin-top:-35px;margin-left:-20px;"><?php echo $data['stu_roll']?></h1>
                        <h1 style="margin-left:-10px;"><?php echo $data['stu_name']?></h1>
                        
                    </div>
                    </a></button> 
                    <a href="dblogic.php?q=4" class="mediaaa"><i class="fa fa-sign-out sign-out"
                            style="font-size:35px; margin-left:105px;position:absolute;top:70px;"></i></a>
                    <a href="StudentChangePassword.php" class="mediaa"><i class="fa fa-key"
                            style="font-size:35px; margin-left:105px;position:absolute;top:115px;"></i></a>
                    </div>
</div>
        </div>


        <div class="content" style="margin-left:20px;">
        <span style="margin-top:-200px;font-size: 18px; padding: 380px;font-size: 20px;font-weight: bold;">Write Your content Here</span>

        <form class="blog" action="dblogic.php?q=32"> 
            <textarea style="height:300px;width:800px;margin-left:250px;" name="ncontent" ></textarea> <br></br>
            <span style="color:black; font-weight:bold;font-size:17px;margin-left:250px;" >Upload Your file</span>
            <input type="file" name="nfile" style="margin-top:-200px;"> <br>
            <input type="submit" class="csubmit" name="nbutton" value="Submit"  style="margin-left:250px;">
        </form>
    </div>
        <!-- <div class="sports">
            <h1 style="margin-left:80px; font-size:80px; color:#fc5404;"><b>Sports Form</b></h1><br><br>
        </div>
        
        <div class="table">
        <div class="one">
            <img src="images/sportsform.jpg" alt="photo">
            <div class="one-one">
                <img src="images/sportsform.jpg" alt="photo">

            </div>
        </div> -->
        <!-- <a href="dblogic.php?q=4">Logout</a> -->
        <!-- <div class="two">
            <img src="images/sportsform.jpg" alt="photo">
            <div class="two-two">
                <form action="dblogic.php?q=24" method="POST" enctype="multipart/form-data">
                    <h2 class="stud-reg-text">Sports Registration Form</h2><br><br>
                    <span class="tshirt-size" style="margin-left:40px;">T-Shirt Size : </span>
                    <input type="radio" name="tshirt" id="t" value="32" <?php if($shirtSize == "32"){echo "checked";}?> class="thirty-two"> <b><label for='t'>32</label>
                    <input type="radio" name="tshirt" id="s" value="34" <?php if($shirtSize == "34"){echo "checked";}?>> <b><label for="s">34</label>
                    <input type="radio" name="tshirt" value="36" <?php if($shirtSize == "36"){echo "checked";}?> id="h"> <b><label for="h">36</label>
                    <input type="radio" name="tshirt" value="38" <?php if($shirtSize == "38"){echo "checked";}?> id="i"> <b><label for="i">38</label>
                    <input type="radio" name="tshirt" value="40" <?php if($shirtSize == "40"){echo "checked";}?> id="r"> <b><label for="r">40</label>
                    <input type="radio" name="tshirt" value="42" <?php if($shirtSize == "42"){echo "checked";}?> id="ts"> <b><label for="ts">42</label>
                    <br><br>
                    <span class="tshirt-size" style="margin-left:40px;">Sports : </span>



                    <?php
                for($i=0;$i<mysqli_num_rows($result);$i++){
                    $data = mysqli_fetch_assoc($result);
                    ?>
                    <div class="sports-css" style="margin-left:130px;">
                    <input type="checkbox" name="sports[]" id="icricket<?php echo $i;?>" value="<?php echo $data['sno'];?>" <?php if(in_array($data['sno'],$selectedSports)){echo "checked";}?>><b><label for='icricket<?php echo $i;?>'><?php echo $data["sports_name"];?></label><br>
        </div>
            <?php } ?>

                    <input type="hidden" name="stu_id" value="<?php echo $_SESSION['studentId']?>">
                    <input type="submit" class="csubmit" name="nbutton" value="Submit"  style="margin-left:70px;">
                    <input type="reset" class="creset" name="nbutton" value="Reset"  style="margin-left:70px;">
                </form>
            </div>
        </div>
        </div> -->

        <!-- <div id="foot-details">
            <footer id="fotr-details">
                <div class="foot-heading">
                    <h2 class="contact-details">Address</h2><br><hr><br>
                    <div>
                        <i class="fa fa-home"></i><h5 class="cont">SMS,Varanasi</h5><br>
                        <i class="fa fa-map-marker"></i><h5 class="cont">Khushipur, Bachhaon, Varanasi, Uttar Pradesh 221011</h5><br>
                        <i class="fa fa-phone"></i><h5 class="cont">07052055555</h5><br>
                        <i class="fa fa-envelope">&nbsp;&nbsp;</i><a href="http://online.smsvaranasi.com/" class="cont">info@smsvaranasi.com</a><br>
                    </div>
                </div>
                <div class="foot-heading">
                    <h2 class="events-details">Student's Club</h2><br><hr><br>
                    <i class="fa fa-tasks "></i>&nbsp;&nbsp;<a href="https://smsvaranasi.com/rainbow-social-welfare-club/" class="eve">Rainbow (Social Welfare Club)
                    </a><br>
                    <i class="fa fa-creative-commons">&nbsp;&nbsp;</i><a href="https://smsvaranasi.com/contrast-creative-club/" class="eve">Contrast (Creative Club)</a><br>
                    <i class="fa fa-book"></i>&nbsp;&nbsp;<a href="https://smsvaranasi.com/synergy-the-literary-club/" class="eve">Synergy (The Literary Club)</a><br>
                    <i class="fa fa-paint-brush">&nbsp;&nbsp;</i><a href="https://smsvaranasi.com/spark-performing-arts-cultural-clubs/" class="eve">Spark (Performing Arts Cultural Club)</a><br>
                    <i class="fa fa-camera-retro"></i>&nbsp;&nbsp;<a href="https://smsvaranasi.com/panorama-photography-clubs/" class="eve">Panorama (Photography Club)</a><br>
                    <i class="fa fa-film"></i>&nbsp;&nbsp;<a href="https://smsvaranasi.com/box-office-film-clubs/" class="eve">Box Office (Film Club)</a><br>
                    <i class="fa fa-futbol-o"></i>&nbsp;&nbsp;<a href="https://smsvaranasi.com/crest-sports-clubs/" class="eve">Crest (Sports Club)</a><br>
                    <i class="fa fa-code "></i>&nbsp;&nbsp;<a href="https://smsvaranasi.com/livewire-technical-clubs/" class="eve">Livewire (Technical Club)</a><br>
                </div>
                <div class="foot-heading">
                    <h2 class="link-details">Important Links</h2><br><hr><br>
                    <i class="fa fa-link"></i>&nbsp;&nbsp;<a href="https://smsvaranasi.com/" class="link">SMS Varanasi</a><br><br>
                    <i class="fa fa-link"></i>&nbsp;&nbsp;<a href="https://www.mgkvp.ac.in/" class="link">MGKVP</a><br><br>
                    <i class="fa fa-link"></i>&nbsp;&nbsp;<a href="https://aktu.ac.in/" class="link">AKTU</a><br><br>
                    <i class="fa fa-link"></i>&nbsp;&nbsp;<a href="https://moodle.smsvaranasi.com/" class="link">SMS Moodle(Learning Platform)</a><br>
                </div>
                <div class="foot-heading">
                    <div class="social">
                    <a href="https://www.facebook.com/smsvns/" class="media"><i class="fa fa-facebook-square" style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/smsvaranasi/?hl=en" class="media"><i class="fa fa-instagram" style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&nbsp;&nbsp;
                    <a href="https://in.linkedin.com/school/school-of-management-sciences-varanasi/" class="media"><i class="fa fa-linkedin" style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&nbsp;&nbsp;
                   <a href="https://www.youtube.com/channel/UCRaZkDJoPUPVfFpwtI6RgEg" class="media"><i class="fa fa-youtube-play" style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&nbsp;&nbsp;
                    <a href="https://twitter.com/smsvaranasi" class="media"><i class="fa fa-twitter-square " style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>
                </div>
                </div>



            </footer>
            </div> 
            <p class="copyright">
                <p>Copyright © All right reserved iSports.in</p>
            </p> -->
    </body>
</html>
