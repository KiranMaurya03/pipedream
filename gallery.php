<?php
include_once("connection.php");
$query="select * from gallery order by date_time desc";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>iSports: Gallery</title>
        <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/gallery.css">
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
            <nav class="nav-bar">
                <ul style="margin-right:1220px;">
                <li><a href="index.php"><img class="logo" src="images/logo/logo.jpg" alt="isports logo" style="margin-top: -10px;margin-left: -140px; display:inline-block"></a></li>
                </ul>
                <ul style="margin-top:-60px;">
                    <li><a href="index.php" target="_blank">Home</a></li>
                    <li><a href="about.php" target="_blank">About Us</a></li>
                    <li><a href="contact.php" target="_blank">Contact Us</a></li>
                </ul>
                <div class="button" style="margin-left:1200px;">
                    <button style="margin-right:5px; margin-top:-25px; font-weight:bold; height:30px;"><a href="registration.php" class="registration-href">Registration Here</a></button> 
                    <button style="margin-left:158px; margin-top:-30px; font-weight: bold; height:30px;"><a href="login.php" class="login-href">Login Here</a></button>
                    </div>
            </nav>
        </div> 

    <div class="gallery-heading">
        <h1 style="font-size:80px; color:#fc5404;background-color: #f5f6f7; vertical-align: center;"><b>Our Gallery</b>
        </h1><br>
    </div><br><br>

    <div class="gallery">
    <?php
                for($i=0;$i<mysqli_num_rows($result);$i++){
                    $data = mysqli_fetch_assoc($result);
                    ?>
                    <div class="photo">
                        <img src="<?php echo $data["img"];?>" alt="images" class="gallery-photo">
                    </div>
            <?php } ?>
    </div>
    <br><br>

    <div id="foot-details">
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
            </p>
    </body>
</html>




