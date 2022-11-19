<?php
include_once("connection.php");
$query="select * from about_college";
$query2="select * from about_sports";

$result=mysqli_query($conn,$query);
$result2=mysqli_query($conn,$query2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>iSports: About-Us</title>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/about.css">
    <link rel="icon" href="images/logo/lpu.png">
</head>
<body>
    <div class="head">
        <header>
            <div class="header-phone">
                <i class="fa fa-phone">&emsp;</i><a
                    href="tel:+917052055555">+917052055555</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>|</span>
            </div>
            <div class="header-email">
                <i class="fa fa-envelope-o">&emsp;</i><a
                href="info@lpu.co.in">info@lpu.co.in</a>
            </div>
        </header>
    </div>
    <div class="nav-class" style="padding-bottom:25px;">
        <nav class="nav-bar">
            <ul style="margin-right:1220px;">
                <li><a href="index.php"><img class="logo" src="images/logo/logo.jpg" alt="isports logo"
                            style="margin-top: -10px;margin-left: -140px; display:inline-block"></a></li>
            </ul>
            <ul style="margin-top:-60px;">
                <li><a href="index.php" target="_blank">Home</a></li>
                <li><a href="about.php" target="_blank">About Us</a></li>
                <li><a href="contact.php" target="_blank">Contact Us</a></li>
            </ul>
            <div class="button" style="margin-left:1200px;">
                <button style="margin-right:5px; margin-top:-25px; font-weight:bold; height:30px;"><a
                        href="registration.php" class="registration-href">Registration Here</a></button>
                <button style="margin-left:158px; margin-top:-30px; font-weight: bold; height:30px;"><a href="login.php"
                        class="login-href">Login Here</a></button>
            </div>
        </nav>
    </div>
    <div class="about-heading">
        <h1 style="font-size:80px; color:#fc5404;background-color: #f5f6f7; vertical-align: center;"><b>About Us</b>
        </h1><br>
    </div><br><br>
    <div class="about-college">
        <span style="padding:45px; color:#fc5404;"><u><b>About College</b></u></span><br>
        <br>
        <div class="director-photo">

        <?php
                for($i=0;$i<mysqli_num_rows($result);$i++){
                    $data = mysqli_fetch_assoc($result);
                    ?>
                    <div class="sports-css">
                    <h6 class="game-name" style="margin-left:-860px;width:810px;margin-top:-10px;text-align:justify;text-justify: inter-word;"><?php echo $data["about_college"];?></h6>
                    <img src="Coding/images/graph.png" alt="sports-images" class="game-photo" style="position:absolute;top:55px;right:120px;box-shadow: 0px 0px 15px black;"><span style="font-size:15px;marign-top:100px;">Chancellor,
<br>DR. ASHOK KUMAR MITTAL</span>
        </div>
            <?php } ?>
                </div>
                </div>
    <div class="about-sports">
        <span style="padding:45px; color:#fc5404"><u><b>About Sports</b></u></span><br>
        <br>
        <div class="sports-photo">
            <img src="images/about1.png" alt="sports-photo"
                style="width:230px; height:150px; box-shadow: 0px 0px 5px black; margin-top:-40px;">
        </div>
        <div class="sports-photo">
            <img src="images/about2.png" alt="sports-photo" style="width:230px; box-shadow: 0px 0px 5px black;">
        </div>
        <div class="sports-photo">
            <img src="images/about3.png" alt="sports-photo" style="width:230px; box-shadow: 0px 0px 5px black;">
        </div>
    </div>
      
        <div class="abt-sprt">
        <?php
                for($j=0;$j<mysqli_num_rows($result2);$j++){
                    $data = mysqli_fetch_assoc($result2);
                    ?>
                    <div>
                    <h6 style="width: 800px;position: absolute;margin-left: 70px;margin-top: 622px;left: 97px;font-size:18px;font-family:sans-serif;text-align:justify;text-justify: inter-word;top:330px;"><?php echo $data["about_sports"];?></h6>
        </div>
            <?php } ?>
            </div>

                   
        <div id="foot-details">
            <footer id="fotr-details">
                <div class="foot-heading">
                    <h2 class="contact-details">Address</h2><br>
                    <hr><br>
                    <div>
                        <i class="fa fa-home"></i>
                        <h5 class="cont">LPU, Punjab</h5><br>
                        <i class="fa fa-map-marker"></i>
                        <h5 class="cont">Jalandhar - Delhi, Grand Trunk Rd, Phagwara, Punjab 144001</h5><br>
                        <i class="fa fa-phone"></i>
                        <h5 class="cont">07052055555</h5><br>
                        <i class="fa fa-envelope">&emsp;</i><a href="info@lpu.co.in"
                            class="cont">info@lpu.co.in</a><br>
                    </div>
                </div>
                
                <div class="foot-heading">
                    <h2 class="events-details">Student's Organization</h2><br>
                    <hr><br>
                    <i class="fa fa-tasks "></i>&emsp;<a href="https://www.lpu.in/campus_life/student-organisations.php"
                        class="eve">ENTREPRENEURSHIP
                    </a><br>
                    <i class="fa fa-creative-commons">&emsp;</i><a
                        href="https://www.lpu.in/campus_life/student-organisations.php" class="eve">ACADEMIC & TECHNICAL</a><br>
                    <i class="fa fa-book"></i>&emsp;<a href="https://www.lpu.in/campus_life/student-organisations.php"
                        class="eve">CAREER ORIENTED</a><br>
                    <i class="fa fa-paint-brush">&emsp;</i><a
                        href="https://www.lpu.in/campus_life/student-organisations.php" class="eve">FOREIGN & RESEARCH EDUCATION</a><br>
                    <i class="fa fa-camera-retro"></i>&emsp;<a
                        href="https://www.lpu.in/campus_life/student-organisations.php" class="eve">HEALTH AND SANITATION</a><br>
                    <i class="fa fa-film"></i>&emsp;<a href="https://www.lpu.in/campus_life/student-organisations.php"
                        class="eve">HOBBIES & RECREATIONAL</a><br>
                    <i class="fa fa-futbol-o"></i>&emsp;<a href="https://www.lpu.in/campus_life/student-organisations.php"
                        class="eve">SOCIAL</a><br>
                    <i class="fa fa-code "></i>&emsp;<a href="https://www.lpu.in/campus_life/student-organisations.php"
                        class="eve">CAREER ORIENTED</a><br>
                </div>
                <div class="foot-heading">
                    <h2 class="link-details">Important Links</h2><br>
                    <hr><br>
                    <i class="fa fa-link"></i>&emsp;<a href="https://ums.lpu.in/" class="link">UMS</a><br><br>
                    <i class="fa fa-link"></i>&emsp;<a href="https://play.google.com/store/apps/details?id=ums.lovely.university&hl=en_IN&gl=US" class="link">LPU Touch</a><br><br>
                    <i class="fa fa-link"></i>&emsp;<a href="https://myclass.lpu.in/" class="link">MyClass</a><br><br>
                    <i class="fa fa-link"></i>&emsp;<a href="https://lpulive.lpu.in/" class="link">LPU Live</a><br>
                </div>
                <div class="foot-heading">
                    <div class="social">
                        <a href="https://www.facebook.com/LPUUniversity/" class="media"><i class="fa fa-facebook-square"
                                style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&emsp;
                        <a href="https://www.instagram.com/lpuuniversity/?hl=en" class="media"><i class="fa fa-instagram"
                                style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&emsp;
                        <a href="https://www.linkedin.com/school/lovely-professional-university/?originalSubdomain=in" class="media"><i
                                class="fa fa-linkedin"
                                style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&emsp;
                        <a href="https://www.youtube.com/channel/UCX9XV7w4GX6f3bnDKAwMKFQ" class="media"><i
                                class="fa fa-youtube-play"
                                style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&emsp;
                        <a href="https://twitter.com/lpuuniversity?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="media"><i class="fa fa-twitter-square "
                                style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>
                    </div>
                </div>
    
    
            </footer>
        </div>
        <p class="copyright">
    <p>Copyright © All right reserved BlogingInLpu.in</p>
    </p>
</body>

</html>