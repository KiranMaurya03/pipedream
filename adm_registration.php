<!DOCTYPE html>
<html>
    <head>
        <title>iSports: adm_Registration</title>
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/adm_registration.css">   
        <link rel="icon" href="images/logo/lpu.png">
        <script src="adm_registration.js"></script>
    </head>
    <body>

        <div class="head">
            <header>
                <div class="header-phone">
                <i class="fa fa-phone">&emsp;</i><a href="tel:+917052055555">+917052055555</a>&emsp;&emsp;&nbsp;<span>|</span>
                </div>
                <div class="header-email">
                <i class="fa fa-envelope-o">&emsp;</i><a href="email:info@smsvaranasi.com">info@smsvaranasi.com</a>
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
        <div class="table">
        <div class="one">
            <img src="images/registration.png" alt="reg-photo">
            <div class="one-one">
                <img src="images/registration.png" alt="reg-photo">
            </div>
        </div>
        <div class="two">
            <img src="images/registration1.png" alt="reg-photo">
            <div class="two-two">
                <form class="form" action="dblogic.php?q=0" method="POST">
                    <h2 class="stud-reg-text">Admin's Registration Form</h2>
                    <span class="sname">Name : </span> 
                    <input type="text" name="nname" required="" class="cname" placeholder="Enter your Name" required=""><br><br>
                    <span class="sname">Admin ID : </span>
                    <input type="text" name="naid" required="" class="caid" placeholder="Your ID" required=""><br><br>
                    <span class="sname">Phone : </span>
                    <input type="text" name="nphone" class="cphone" required="" minlength="10" maxlength="10" placeholder="+91-00000 00000" required=""><br><br>
                    <span class="sname">Email : </span>
                    <input type="email" name="nemail" required="" class="cemail" placeholder="abc@gmail.com" required=""><br><br>
                    <span class="sname">Password : </span>
                    <input type="password" required="" minlength="5" name="npassword" class="cpassword" placeholder="Enter Your Password" required=""><br><br>
                    <span class="sname">DOB : </span>
                    <input type="date" name="ndob" required="" class="cdob" required=""><br><br>
                    <span class="sname">Gender : </span>
                    <input type="radio" required="" name="ngender" id="genMale" value="M" class="cgender"> <b><label for='genMale'>Male</label></b>&emsp;
                    <input type="radio" name="ngender" id="genFemale" value="F"> <b><label for="genFemale">Female</label></b>&emsp;
                    <input type="radio" name="ngender" value="O" id="genother"> <b><label for="genother">Other</label></b><br><br>
                    <input type="submit" class="csubmit" name="nbutton" value="Submit">
                </form>
            </div>
        </div>
        </div>

        <div id="foot-details">
            <footer id="fotr-details">
                <div class="foot-heading">
                    <h2 class="contact-details">Address</h2><br><hr><br>
                    <div>
                        <i class="fa fa-home"></i><h5 class="cont">SMS,Varanasi</h5><br>
                        <i class="fa fa-map-marker"></i><h5 class="cont">Khushipur, Bachhaon, Varanasi, Uttar Pradesh 221011</h5><br>
                        <i class="fa fa-phone"></i><h5 class="cont">07052055555</h5><br>
                        <i class="fa fa-envelope">&emsp;</i><a href="http://online.smsvaranasi.com/" class="cont">info@smsvaranasi.com</a><br>
                    </div>
                </div>
                <div class="foot-heading">
                    <h2 class="events-details">Student's Club</h2><br><hr><br>
                    <i class="fa fa-tasks "></i>&emsp;<a href="https://smsvaranasi.com/rainbow-social-welfare-club/" class="eve">Rainbow (Social Welfare Club)
                    </a><br>
                    <i class="fa fa-creative-commons">&emsp;</i><a href="https://smsvaranasi.com/contrast-creative-club/" class="eve">Contrast (Creative Club)</a><br>
                    <i class="fa fa-book"></i>&emsp;<a href="https://smsvaranasi.com/synergy-the-literary-club/" class="eve">Synergy (The Literary Club)</a><br>
                    <i class="fa fa-paint-brush">&emsp;</i><a href="https://smsvaranasi.com/spark-performing-arts-cultural-clubs/" class="eve">Spark (Performing Arts Cultural Club)</a><br>
                    <i class="fa fa-camera-retro"></i>&emsp;<a href="https://smsvaranasi.com/panorama-photography-clubs/" class="eve">Panorama (Photography Club)</a><br>
                    <i class="fa fa-film"></i>&emsp;<a href="https://smsvaranasi.com/box-office-film-clubs/" class="eve">Box Office (Film Club)</a><br>
                    <i class="fa fa-futbol-o"></i>&emsp;<a href="https://smsvaranasi.com/crest-sports-clubs/" class="eve">Crest (Sports Club)</a><br>
                    <i class="fa fa-code "></i>&emsp;<a href="https://smsvaranasi.com/livewire-technical-clubs/" class="eve">Livewire (Technical Club)</a><br>
                </div>
                <div class="foot-heading">
                    <h2 class="link-details">Important Links</h2><br><hr><br>
                    <i class="fa fa-link"></i>&emsp;<a href="https://smsvaranasi.com/" class="link">SMS Varanasi</a><br><br>
                    <i class="fa fa-link"></i>&emsp;<a href="https://www.mgkvp.ac.in/" class="link">MGKVP</a><br><br>
                    <i class="fa fa-link"></i>&emsp;<a href="https://aktu.ac.in/" class="link">AKTU</a><br><br>
                    <i class="fa fa-link"></i>&emsp;<a href="https://moodle.smsvaranasi.com/" class="link">SMS Moodle(Learning Platform)</a><br>
                </div>
                <div class="foot-heading">
                    <div class="social">
                    <a href="https://www.facebook.com/smsvns/" class="media"><i class="fa fa-facebook-square" style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&emsp;
                    <a href="https://www.instagram.com/smsvaranasi/?hl=en" class="media"><i class="fa fa-instagram" style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&emsp;
                    <a href="https://in.linkedin.com/school/school-of-management-sciences-varanasi/" class="media"><i class="fa fa-linkedin" style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&emsp;
                   <a href="https://www.youtube.com/channel/UCRaZkDJoPUPVfFpwtI6RgEg" class="media"><i class="fa fa-youtube-play" style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&emsp;
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