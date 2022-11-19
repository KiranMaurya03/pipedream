<?php
error_reporting(0);
$error = $_REQUEST['err'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>iSports: stud_Login</title>
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" /> -->

        <link rel="stylesheet" href="css/stud_login.css">
        <link rel="icon" href="images/logo/lpu.png">
    </head>
    <body>
        
        <div class="head">
            <header>
                <div class="header-phone">
                <i class="fa fa-phone">&nbsp;&nbsp;</i><a href="tel:+917052055555">+917052055555</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
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

        <div class="main-div">
        <div class="photo">
            <img src="images/login.png" alt="photo" class="login-photo">
        <div class="login">



        <!-- php code -->
            <?php
            if(isset($error)){
                if($error == 0){
                    echo "<font color='#FF0000'><b>Invalid User Id Or Password.</b></font>";
                }else if($error == 1){
                    echo "<font color='#FF0000'><b>Your Account Is Temporarly Blocked.</b>.</b></font>";
                }
            }
            ?>


            <form action="dblogic.php?q=3" method="POST">
          <h1>Student Login</h1>
          <span>Doesn't have an account yet? <a href="registration.php"><b>Sign Up</b></a></span><br><br>
          <b><span>User ID</span></b></b><br><input type="text" name="nid" class="cid" required="" placeholder="xyz@gmail.com" required=""><br><br>
          <b><span>Password</span></b><b><span><a href="#" class="forget-password">Forget Password?</a></span><br><input type="password" name="npassword" class="cpassword" placeholder="*******" required="" id="password">
          <i class="bi bi-eye-slash" id="togglePassword" style="cursor:pointer;"></i><br><br>
        <input type="checkbox" class="ccheckbox" name="ncheckbox" id="rem"><label for="rem">Remember me</label><br><br>
        <input type="submit" class="cbutton" name="nbutton" value="Login">
        </form>
        </div>
        </div>
    </div><br><br>

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
                <h2 class="events-details">Student's Organizations</h2><br><hr><br>
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
    <!-- <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
    </script> -->

</html>