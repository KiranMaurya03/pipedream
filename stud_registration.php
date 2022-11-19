<?php
error_reporting(0);
$error = $_REQUEST['err'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>iSports: stud_Registration</title>
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/stud_registration.css">
        <link rel="icon" href="images/logo/lpu.png">
        <!-- <script src="JavaScript/stud_registration.js"></script> -->
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


<?php
            if(isset($error)){
                if($error==0){
                    echo "<font color='#FF0000'><b>This E-mail Id or Roll no already has been registred.</b></font>";
                }
            }
?>



                <form class="form" action="dblogic.php?q=1" method="POST">
                    <h2 class="stud-reg-text">Student's Registration Form</h2>
                    <span class="sname">Name : </span> 
                    <input type="text" name="nname" class="cname" required="" placeholder="Enter your Name"><br><br>
                    <span class="sname">Course : </span>
                    <select  class="ccourse" name="ncourse" required=""><option value="">Select <span class="sname">Course</option>
                    <option value="BCA">BCA</option>
                    <option value="BBA" >BBA</option>
                    <option value="MBA">MBA</option>
                    <option value="MCA">MCA</option>
                    <option value="M.Com">M.Com</option>
                    <option value="B.Com">B.Com</option>
                    <option value="B.com(Hons)">B.com(Hons)</option>
                    <option value="Mass.Comm">Mass.Com</option>
                    </select><br><br>
                    <span class="sname">Semester : </span>
                    <select  class="csemester" name="nsemester" required=""><option value="">Select Semester</option>
                    <option value="1">1st</option>
                    <option value="2" >2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                    <option value="5">5th</option>
                    <option value="6">6th</option>
                    </select><br><br>
                    <span class="sname">Roll No. : </span>
                    <input type="text" name="nroll" required="" class="croll" placeholder="bc/22/001"><br><br>
                    <span class="sname">Phone : </span>
                    <input type="text" name="nphone" required="" minlength="10" maxlength="10" class="cphone" placeholder="+91-00000 00000"><br><br>
                    <span class="sname">Email : </span>
                    <input type="email" name="nemail" required="" class="cemail" placeholder="abc@gmail.com"><br><br>
                    <span class="sname">Password : </span>
                    <input type="password" name="npassword" required="" maxlength="5" class="cpassword" placeholder="Enter Your Password" required=""><br><br>
                    <span class="sname">DOB : </span>
                    <input type="date" name="ndob" required="" class="cdob"><br><br>
                    <span class="sname">Gender : </span>
                    <input type="radio" name="ngender" required="" id="genMale" value="M" class="cgender"> <b><label for='genMale'>Male</label></b>&nbsp;&nbsp;
                    <input type="radio" name="ngender" id="genFemale" value="F"> <b><label for="genFemale">Female</label></b>&nbsp;&nbsp;
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
                    <i class="fa fa-paint-brush">&nbsp;&nbsp;</i><a href="https://www.lpu.in/campus_life/student-organisations.php" class="eve">FOREIGN & RESEARCH EDUCATION INITIATION</a><br>
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
                <p>Copyright © All right reserved BlogingInLPU.in</p>
            </p>


    </body>
</html>