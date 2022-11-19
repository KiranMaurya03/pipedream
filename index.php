<?php
include_once("connection.php");
$query="select * from gallery order by date_time desc limit 12";
$query1="select * from sports order by date_time desc limit 8";
$query2="select * from notice where active_status='T' order by date_time desc limit 1";
$query3="select * from slider order by date_time desc limit 3";

$result=mysqli_query($conn,$query);
$result1=mysqli_query($conn,$query1);
$result2=mysqli_query($conn,$query2);
$result3=mysqli_query($conn,$query3);
?>
<!DOCTYPE html>
<html>

<head>
    <title>iSports: LPU Blog for Sports</title>
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="icon" href="images/logo/lpu.png">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="head">
        <header>
            <div class="header-phone">
                <i class="fa fa-phone">&nbsp;&nbsp;</i><a
                    href="tel:+917052055555">+917052055555</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>|</span>
            </div>

            <div class="header-email">
                <i class="fa fa-envelope-o">&nbsp;&nbsp;</i><a
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



    
    <div class="slideshow-container">
<?php
for($i=0;$i<mysqli_num_rows($result3);$i++){
    $data=mysqli_fetch_assoc($result3);
?>

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="<?php echo $data["img"];?>" style="width:1518px; height:500px;margin-left:-260px;">
      <div class="text" style="margin-top: -40px;margin-left: 10px;fontweight:bold;font-size:21px;">Sports-Fest (2020-2021)</div>
    </div>
    <?php } ?>
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)" style="margin-left:-260px;">&#10094;</a>
    <a class="next" onclick="plusSlides(1)" style="margin-right:-260px;right:3px;">&#10095;</a>
  </div>
  <br>
 
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>



<script>
    let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>




    <div class="related-link">
        <nav style="background-color: white;">
            <ul>
                <li><a href="https://lpu.in/"><img class="sms" src="images/logo/lpu.png" alt="smsimage"
                            style="height:220px; width:350px;"></a></li>
                <li><a href="https://myclass.lpu.in/"><img class="mgkvp" src="images/logo/myclass.jfif" alt="mgkvpimage"
                            style="height:220px; width:250px;"></a></li>
                <li><a href="https://lpulive.lpu.in/"><img class="aktu" src="images/logo/live.jfif" alt="aktuimage"
                            style="height:220px; width:280px;"></a></li>
                <li><a href="https://ums.lpu.in/"><img class="moodle" src="images/logo/ums.jfif"
                            alt="smsmoodleimage" style="height:220px; width:270px; margin-left:15px;"></a></li>
                <br><br><br><br>
            </ul>
        </nav>
    </div>
    <div class="sports">
        <h1 style="font-size:80px; color:#fc5404;"><b>Sports</b></h1><br><br>
    </div>
    <div class="container">

    <?php
                for($i=0;$i<mysqli_num_rows($result1);$i++){
                    $data = mysqli_fetch_assoc($result1);
                    ?>
                    <div class="sports-css">
            <img src="<?php echo $data["img"];?>" alt="sports-images" class="game-photo" style="width:125px;height:125px;border-radius: 500px;margin-left:90px;position:absolute;top:-50px;border:4px solid #A2A2A1FF">
            <div class="color" style="height:100px;width:300px;background-image: linear-gradient(to right, #f5f6f7, #fc5404, #f5f6f7);border-radius:20px;"></div>
            <h1 class="game-name" style="font-family:sans-serif;text-align:center;background: -webkit-linear-gradient(#fc5404 , black); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo $data["sports_name"];?></h1>
            <span class="game-desc" style="font-family:sans-serif;font-size:17px;padding-left:10px;position:absolute;top:140px;text-align:justify;text-justify: inter-word;padding:18px;"><?php echo $data["sports_desc"];?></span>
            <div class="color-footer" style="height:8px; width:300px;background-image: linear-gradient(to right, #f5f6f7, #fc5404, #f5f6f7);position:absolute;top:340px;"></div>
        </div>
            <?php } ?>
                </div>   

    <div class="gallery-heading">
        <h1 style="font-size:80px; color:#fc5404;background-color: #f5f6f7; vertical-align: center;"><b>Our Gallery</b>
        </h1><br>
    </div>
    <div class="gallery">
    <?php
                for($i=0;$i<mysqli_num_rows($result);$i++){
                    $data = mysqli_fetch_assoc($result);
                    ?>
                    <div class="photo">
                        <img src="<?php echo $data["img"];?>" alt="images" class="gallery-photo" style="margin-left:30px;border-radius:20px 20px 0px 0px;">
                    </div>
            <?php } ?>
        <button class="view-gallery-btn"><a href="gallery.php" target="_blank" class="gallery-btn-href">View
                More...</a></button>
    </div>

    <div class="notice-board">
        <h1 style="font-size:80px; color:#fc5404;"><b>Notice Board</b></h1><br><br>
    </div>
    <div>
        <div class="notice-one">
        <?php
                for($i=0;$i<mysqli_num_rows($result2);$i++){
                    $data = mysqli_fetch_assoc($result2);
             } ?>
            <a class="href-mrq-two" href="<?php echo $data["notice_pdf"];?>">
            <h1 style="color: #323a45;text-align:center;"><?php echo $data["notice_title"];?></h1>
                <marquee onMouseOver="this.stop()" onMouseOut="this.start()" width="90%" direction="up" height="100px"
                    scrollamount="3" style="margin-left:40px;"><a class="fa fa-file-pdf-o"
                        style="color:red; font-size:30px;text-align:justify;text-justify: inter-word;"></a>&nbsp;&nbsp; <a class="href-mrq-two" style="font-size:20px;" href=""><?php echo $data["notice_description"];?></marquee> 
            </a>

        </div>
        <button class="prev-notice"><a href="notice.php" target="_blank" class="notice-href">View More...</a></button>
    </div>
    <div class="college-one"
        style="margin-top:260px;height:110px;text-align:center;font-size:50px;font-weight:bold;color:#fc5404;background-color: #f5f6f7;">
        Welcome to Lovely Professional University<br><span class="college-two"
            style="font-size:20px;color:black;position: absolute;right: 580px;">Transforming Education Transforming India.</span>
    </div>
    <div class="college-three"
        style="height:150px;width:350px;position:absolute;top:3500px;left:130px;box-shadow:0px 0px 8px black;"><i class="fa fa-book" style="font-size:70px;color:blue;position:absolute;top:35px;left:20px;"></i><h2 class="h2-one" style="position:absolute;top:10px;left:120px;font-weight:bold;text-align:justify;text-justify: inter-word;">Automated Library</h2><span class="span-one" style="position:absolute;left:115px;top:50px;font-family:sans-serif;font-size:17px;text-align:justify;text-justify: inter-word;width:200px;">We have well equiped fully automated library with 250000+ books.</span></div>
    <div class="college-four"
        style="height:150px;width:350px;position:absolute;left:580px;top:3500px;box-shadow:0px 0px 8px black;"><i class="fa fa-paint-brush" style="font-size:60px;color:blue;position:absolute;top:40px;left:20px;"></i><h2 class="h2-two" style="position:absolute;top:10px;left:120px;font-weight:bold;">Neat & Clean Environment</h2><span class="span-one" style="position:absolute;left:115px;top:70px;font-family:sans-serif;font-size:17px;text-align:justify;text-justify: inter-word;width:200px;">We have a lavish green eco-friendly clean campus.</span></div>
    <div class="college-five"
        style="height:150px;width:350px;position:absolute;top:3500px;left:1030px;box-shadow:0px 0px 8px black;"><i class="fa fa-users" style="font-size:60px;color:blue;position:absolute;top:40px;left:20px;"></i><h2 class="h2-three" style="position:absolute;top:10px;left:120px;font-weight:bold;text-align:justify;text-justify: inter-word;">Experienced Faculty</h2><span class="span-one" style="position:absolute;left:115px;top:50px;font-family:sans-serif;font-size:17px;text-align:justify;text-justify: inter-word;width:200px;">The students learn under the guidance of experienced faculties.</span></div>
    <div class="college-six"
        style="height:150px;width:350px;position:absolute;top:3700px;left:130px;box-shadow:0px 0px 8px black;"><i class="fa fa-cogs" style="font-size:60px;color:blue;position:absolute;top:40px;left:20px;"></i><h2 class="h2-four" style="position:absolute;top:10px;left:120px;font-weight:bold;text-align:justify;text-justify: inter-word;">Laboratory Facility</h2><span class="span-one" style="position:absolute;left:115px;top:50px;font-family:sans-serif;font-size:17px;text-align:justify;text-justify: inter-word;width:200px;">Students get practical exposure while working in well equipped laboratries.</span></div>
    <div class="college-seven"
        style="height:150px;width:350px;position:absolute;left:580px;top:3700px;box-shadow:0px 0px 8px black;"><i class="fa fa-building" style="font-size:60px;color:blue;position:absolute;top:40px;left:20px;"></i><h2 class="h2-five" style="position:absolute;top:10px;left:120px;font-weight:bold;text-align:justify;text-justify: inter-word;">Largest Infrastructure</h2><span class="span-one" style="position:absolute;left:115px;top:50px;font-family:sans-serif;font-size:17px;text-align:justify;text-justify: inter-word;width:200px;">We have one of the largest infra-structure with all modern amenities.</span></div>
    <div class="college-eight"
        style="height:150px;width:350px;position:absolute;left:1030px;top:3700px;box-shadow:0px 0px 8px black;"><i class="fa fa-internet-explorer" style="font-size:60px;color:blue;position:absolute;top:40px;left:20px;"></i><h2 class="h2-six" style="position:absolute;top:10px;left:120px;font-weight:bold;text-align:justify;text-justify: inter-word;">24*7 Internet Facility</h2><span class="span-one" style="position:absolute;left:115px;top:50px;font-family:sans-serif;font-size:17px;text-align:justify;text-justify: inter-word;width:200px;">Students get facilty of 24*7 Internet availability in the campus.</span></div>



             
    <div id="foot">
        <img src="images/tranasparent/1.jpg" alt="photo" class="transparent">
        <div id="fotr">
            <img src="images/team/akhilesh.jpeg" alt="photo" class="foot-logo1">
            <h1>
                <pre
                    class="fotr-h-one">''I always felt that my greatest asset was not my physical ability, it was my mental ability.__Akhilesh Kumar Mishra,LPU Punjab</pre>
            </h1>

            <img src="images/team/kiran.jpeg" alt="photo" class="foot-logo2">
            <h1>
                <pre
                    class="fotr-h-two">''It’s not the will to win that matters—everyone has that. It’s the will to prepare to win that matters.__Kiran Maurya,LPU Punjab</pre>
            </h1>

            <img src="images/team/abhay.jpeg" alt="photo" class="foot-logo3" style="margin-top:70px;">
            <h1>
                <pre
                    class="fotr-h-three">''Persistence can change failure into extraordinary achievement.__Abhay Kumar,LPU Punjab</pre>
            </h1>

            <!-- <img src="images/team/vishesh.jpeg" alt="photo" class="foot-logo4" style="margin-top:70px;">
            <h1>
                <pre
                    class="fotr-h-four">''I’ve learned that something constructive comes from every defeat.__Vishesh Singh,SMS Varanasi</pre>
            </h1> -->
        </div>
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
                    <i class="fa fa-envelope">&nbsp;&nbsp;</i><a href="info@lpu.co.in"
                        class="cont">info@lpu.co.in</a><br>
                </div>
            </div>
            <div class="foot-heading">
                <h2 class="events-details">Student's Organization</h2><br>
                <hr><br>
                <i class="fa fa-tasks "></i>&nbsp;&nbsp;<a href="https://www.lpu.in/campus_life/student-organisations.php"
                    class="eve">ENTREPRENEURSHIP
                </a><br>
                <i class="fa fa-creative-commons">&nbsp;&nbsp;</i><a
                    href="https://www.lpu.in/campus_life/student-organisations.php" class="eve">ACADEMIC & TECHNICAL</a><br>
                <i class="fa fa-book"></i>&nbsp;&nbsp;<a href="https://www.lpu.in/campus_life/student-organisations.php"
                    class="eve">CAREER ORIENTED</a><br>
                <i class="fa fa-paint-brush">&nbsp;&nbsp;</i><a
                    href="https://www.lpu.in/campus_life/student-organisations.php" class="eve">FOREIGN & RESEARCH EDUCATION INITIATION</a><br>
                <i class="fa fa-camera-retro"></i>&nbsp;&nbsp;<a
                    href="https://www.lpu.in/campus_life/student-organisations.php" class="eve">HEALTH AND SANITATION</a><br>
                <i class="fa fa-film"></i>&nbsp;&nbsp;<a href="https://www.lpu.in/campus_life/student-organisations.php"
                    class="eve">HOBBIES & RECREATIONAL</a><br>
                <i class="fa fa-futbol-o"></i>&nbsp;&nbsp;<a href="https://www.lpu.in/campus_life/student-organisations.php"
                    class="eve">SOCIAL</a><br>
                <i class="fa fa-code "></i>&nbsp;&nbsp;<a href="https://www.lpu.in/campus_life/student-organisations.php"
                    class="eve">CAREER ORIENTED</a><br>
            </div>
            <div class="foot-heading">
                <h2 class="link-details">Important Links</h2><br>
                <hr><br>
                <i class="fa fa-link"></i>&nbsp;&nbsp;<a href="https://ums.lpu.in/" class="link">UMS</a><br><br>
                <i class="fa fa-link"></i>&nbsp;&nbsp;<a href="https://play.google.com/store/apps/details?id=ums.lovely.university&hl=en_IN&gl=US" class="link">LPU Touch</a><br><br>
                <i class="fa fa-link"></i>&nbsp;&nbsp;<a href="https://myclass.lpu.in/" class="link">MyClass</a><br><br>
                <i class="fa fa-link"></i>&nbsp;&nbsp;<a href="https://lpulive.lpu.in/" class="link">LPU Live</a><br>
            </div>
            <div class="foot-heading">
                <div class="social">
                    <a href="https://www.facebook.com/LPUUniversity/" class="media"><i class="fa fa-facebook-square"
                            style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/lpuuniversity/?hl=en" class="media"><i class="fa fa-instagram"
                            style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&nbsp;&nbsp;
                    <a href="https://www.linkedin.com/school/lovely-professional-university/?originalSubdomain=in" class="media"><i
                            class="fa fa-linkedin"
                            style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&nbsp;&nbsp;
                    <a href="https://www.youtube.com/channel/UCX9XV7w4GX6f3bnDKAwMKFQ" class="media"><i
                            class="fa fa-youtube-play"
                            style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>&nbsp;&nbsp;
                    <a href="https://twitter.com/lpuuniversity?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="media"><i class="fa fa-twitter-square "
                            style="font-size:50px; margin-top:-50px; margin-left:10px;"></i></a>
                </div>
            </div>
        </footer>
        <footer class="container">
            <a href="#"
                style="color:black;font-weight:bold;font-size:19px;font-size:50px;margin-left:70px;opacity:0.5;"><i
                    class="fa fa-arrow-circle-o-up"></i></a>
        </footer>
    </div>
    <p class="copyright">
    <p>Copyright © All right reserved BlogingInLPU.in</p>
    </p>
</body>

</html>