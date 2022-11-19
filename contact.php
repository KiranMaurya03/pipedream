<?php
include_once("connection.php");
$query="select * from contact order by datetime";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>iSports: Contact-Us</title>
        <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/contact.css">
    <link rel="icon" href="images/logo/lpu.png">
    </head>
    <body>
        <div class="head">
            <header>
                <div class="header-phone">
                <i class="fa fa-phone">&nbsp;&nbsp;</i><a href="tel:+917052055555">+917052055555</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>|</span>
                </div>
                
                <div class="header-email">
                <i class="fa fa-envelope-o">&nbsp;&nbsp;</i><a href="info@lpu.co.in">info@lpu.co.in</a>
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

        <div class="contact-heading">
            <h1 style="font-size:80px; color:#fc5404;background-color: #f5f6f7; vertical-align: center;"><b>Contact Us</b>
            </h1><br>
        </div><br><br>

        <div class="main-contact">

        <?php
                for($i=0;$i<mysqli_num_rows($result);$i++){
                    $data = mysqli_fetch_assoc($result);
        } ?>



            <img src="images/contact.jpg" alt="contact-photo" class="main-contact-image">
                <div class="contact-address"><i class="fa fa-map-marker" style="font-size: 40px; color:blue; margin-left:240px; margin-top:70px;"></i><br><h3>Address</h3><br><span class="span-address" style="position:absolute;background: -webkit-linear-gradient(#fc5404 , black); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo $data["address"];?></span>
                </div>
                <div class="contact-phone"><i class="fa fa-phone" style="font-size: 40px; color:blue; margin-left:260px; margin-top:70px;"></i><br><h3 style="margin-left:50px;">Phone Number</h3><br><span class="span-phone" style="background: -webkit-linear-gradient(#fc5404 , black); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo $data["phone"];?></span>
                </div>
                <div class="contact-mobile"><i class="fa fa-volume-control-phone " style="font-size: 40px; color:blue; margin-left:230px; margin-top:70px;"></i><br><h3>Mobile Number</h3><br><span class="span-mobile" style="margin-left:173px;background: -webkit-linear-gradient(#fc5404 , black); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo $data["mobile"];?></span></div>
                <div class="contact-email"><i class="fa fa-envelope" style="font-size: 40px; color:blue; margin-left:255px; margin-top:70px;"></i><br><h3 style="margin-left:50px;">Email</h3><br><span class="span-email" style="background: -webkit-linear-gradient(#fc5404 , black); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo $data["email"];?></span></div>
        </div><br><br><br>

        <div CLASS="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3410.726564801244!2d75.70295481509906!3d31.255991981457896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5f5e9c489cf3%3A0x4049a5409d53c300!2sLovely%20Professional%20University!5e0!3m2!1sen!2sin!4v1668583652374!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div id="foot-details">
            <footer id="fotr-details">
                <div class="foot-heading">
                    <h2 class="contact-details">Address</h2><br><hr><br>
                    <div>
                        <i class="fa fa-home"></i><h5 class="cont">LPU, Punjab</h5><br>
                        <i class="fa fa-map-marker"></i><h5 class="cont">Jalandhar - Delhi, Grand Trunk Rd, Phagwara, Punjab 144001</h5><br>
                        <i class="fa fa-phone"></i><h5 class="cont">07052055555</h5><br>
                        <i class="fa fa-envelope">&nbsp;&nbsp;</i><a href="info@lpu.co.in" class="cont">info@lpu.co.in</a><br>
                    </div>
                </div>
                <div class="foot-heading">
                    <h2 class="events-details">Student's Organization</h2><br><hr><br>
                    <i class="fa fa-tasks "></i>&nbsp;&nbsp;<a href="https://www.lpu.in/campus_life/student-organisations.php" class="eve">ENTREPRENEURSHIP
                    </a><br>
                    <i class="fa fa-creative-commons">&nbsp;&nbsp;</i><a href="https://www.lpu.in/campus_life/student-organisations.php" class="eve">ACADEMIC & TECHNICAL</a><br>
                    <i class="fa fa-book"></i>&nbsp;&nbsp;<a href="https://www.lpu.in/campus_life/student-organisations.php" class="eve">CAREER ORIENTED</a><br>
                    <i class="fa fa-paint-brush">&nbsp;&nbsp;</i><a href="https://www.lpu.in/campus_life/student-organisations.php" class="eve">FOREIGN & RESEARCH EDUCATION</a><br>
                    <i class="fa fa-camera-retro"></i>&nbsp;&nbsp;<a href="https://www.lpu.in/campus_life/student-organisations.php" class="eve">HEALTH AND SANITATION</a><br>
                    <i class="fa fa-film"></i>&nbsp;&nbsp;<a href="https://www.lpu.in/campus_life/student-organisations.php" class="eve">HOBBIES & RECREATIONAL</a><br>
                    <i class="fa fa-futbol-o"></i>&nbsp;&nbsp;<a href="https://www.lpu.in/campus_life/student-organisations.php" class="eve">SOCIAL</a><br>
                    <i class="fa fa-code "></i>&nbsp;&nbsp;<a href="https://www.lpu.in/campus_life/student-organisations.php" class="eve">CAREER ORIENTED</a><br>
                </div>
                <div class="foot-heading">
                    <h2 class="link-details">Important Links</h2><br><hr><br>
                    <i class="fa fa-link"></i>&nbsp;&nbsp;<a href="https://ums.lpu.in/" class="link">UMS</a><br><br>
                    <i class="fa fa-link"></i>&nbsp;&nbsp;<a href="https://play.google.com/store/apps/details?id=ums.lovely.university&hl=en_IN&gl=US" class="link">LPU Touch</a><br><br>
                    <i class="fa fa-link"></i>&nbsp;&nbsp;<a href="https://myclass.lpu.in/" class="link">MyClass</a><br><br>
                    <i class="fa fa-link"></i>&nbsp;&nbsp;<a href="https://lpulive.lpu.in/" class="link">LPU Live</a><br>
                </div>
                <div class="foot-heading">
                    <div class="social">
                    <a href="https://www.facebook.com/LPUUniversity/" class="media"><i class="fa fa-facebook-square" style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/lpuuniversity/?hl=en" class="media"><i class="fa fa-instagram" style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&nbsp;&nbsp;
                    <a href="https://www.linkedin.com/school/lovely-professional-university/?originalSubdomain=in" class="media"><i class="fa fa-linkedin" style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&nbsp;&nbsp;
                   <a href="https://www.youtube.com/channel/UCX9XV7w4GX6f3bnDKAwMKFQ" class="media"><i class="fa fa-youtube-play" style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&nbsp;&nbsp;
                    <a href="https://twitter.com/lpuuniversity?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="media"><i class="fa fa-twitter-square " style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>
                </div>
                </div>
            </footer>
            </div>
            <p class="copyright">
                <p>Copyright © All right reserved BlogingInLpu.in</p>
            </p>
    </body>
</html>
