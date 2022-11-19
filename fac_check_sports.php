<?php
session_start();
// echo $_SESSION['facultyName'];
// echo $_SESSION['facultyId'];
if($_SESSION['facultyId'] == ""  || $_SESSION['facultyName'] == ""){
    header("location:fac_login.php");
}
error_reporting(0);
$selectedCourse = $_REQUEST['course'];
$selectedSemester = $_REQUEST['sem'];
$selectedGender = $_REQUEST['gen'];
$selectedSports = $_REQUEST['sprt'];
include_once("connection.php");
$query="SELECT *,ssr.date_time as reg_dateTime FROM stud_sports_registration ssr, student stu, sports sprt where ssr.student_id=stu.stu_id and ssr.sports_id=sprt.sno and stu.stu_course like '%".$selectedCourse."%' and stu.stu_semester like '%".$selectedSemester."%' and stu.stu_gender like '%".$selectedGender."%' and sprt.sports_name like '%".$selectedSports."%'";
$query1="select * from sports";
$query2="select * from faculty";
// echo $query2;exit;
$result=mysqli_query($conn,$query);
$result1=mysqli_query($conn,$query1);
$result2=mysqli_query($conn,$query2);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>iSports: Faculty</title>
        <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/fac_check_sports.css">
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
            <nav class="nav-bar" style="margin-left:120px;">
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
$data=mysqli_fetch_assoc($result2);
?>
<div class="sports-css">
<h1 style="margin-top:-35px;margin-left:-20px;"><?php echo $data['fac_id']?></h1>
<h1 style="margin-left:-10px;"><?php echo $data['fac_name']?></h1>
<h1 style="margin-left:-10px;font-size:17px;"><?php echo $data['fac_designation']?></h1>

</div>
</a></button> 

<a href="dblogic.php?q=26" class="mediaaa"><i class="fa fa-sign-out sign-out"
                            style="font-size:35px; margin-left:85px;position:absolute;top:80px;"></i></a>
                    <a href="FacultyChangePassword.php" class="mediaa"><i class="fa fa-key"
                            style="font-size:35px; margin-left:85px;position:absolute;top:125px;"></i></a>
</div>
</div>
</div>
        <div class="sports">
        <h1 style="margin-left:80px; font-size:60px; color:#fc5404;"><b>Sport's Selected Students</b></h1><br><br>
    </div>
    <div class="add-image-header">
    <span style="padding-top:10px;font-size:20px;margin-left:30px;color:#fc5404;">Sports Selected Students</span>
      <!-- <span style="padding-top:10px;font-size:25px;margin-left:620px;color:#fc5404;">Filter</span> -->
    <form name="filterForm">
    <span>
        <select class="input" name="filterCourse" style="margin-left:670px;font-weight:bold;margin-top:15px;border-radius:20px;" onChange="filter();">
        <option value="" <?php if($selectedCourse == ""){echo "selected";}?>>Select Courses</option>
        <option value="BCA" <?php if($selectedCourse == "BCA"){echo "selected";}?>>BCA</option>
        <option value="BBA" <?php if($selectedCourse == "BBA"){echo "selected";}?>>BBA</option>
        <option value="B.com(Hons)" <?php if($selectedCourse == "B.com(Hons)"){echo "selected";}?>>B.Com(hons)</option>
        <option value="M.Com" <?php if($selectedCourse == "M.Com"){echo "selected";}?>>M.Com</option>
        <option value="MCA" <?php if($selectedCourse == "MCA"){echo "selected";}?>>MCA</option>
        <option value="MBA" <?php if($selectedCourse == "MBA"){echo "selected";}?>>MBA</option>
        <option value="Mass.Comm" <?php if($selectedCourse == "Mass.Comm"){echo "selected";}?>>Mass.Comm</option>
</select>


<select name="filterSemester" class="input" style="margin-top:-20px;font-weight:bold;border-radius:20px;" onchange="filter();">
        <option value="" <?php if($selectedSemester == ""){echo "selected";}?>>Select Semester</option>
        <option value="1" <?php if($selectedSemester == "1"){echo "selected";}?>>I</option>
        <option value="2" <?php if($selectedSemester == "2"){echo "selected";}?>>II</option>
        <option value="3" <?php if($selectedSemester == "3"){echo "selected";}?>>III</option>
        <option value="4" <?php if($selectedSemester == "4"){echo "selected";}?>>IV</option>
        <option value="5" <?php if($selectedSemester == "5"){echo "selected";}?>>V</option>
        <option value="6" <?php if($selectedSemester == "6"){echo "selected";}?>>VI</option>
</select>
<select name="filterGender" class="input" style="margin-top:-20px;font-weight:bold;border-radius:20px;" onchange="filter();">
        <option value="" <?php if($selectedGender == ""){echo "selected";}?>>Select Gender</option>
        <option value="M" <?php if($selectedGender == "M"){echo "selected";}?>>MALE</option>
        <option value="F" <?php if($selectedGender == "F"){echo "selected";}?>>FEMALE</option>
        <option value="O" <?php if($selectedGender == "O"){echo "selected";}?>>OTHERS</option>
</select>


<select name="filterSports" class="input" style="margin-top:-20px;font-weight:bold;border-radius:20px;"onchange="filter();">
        <option value="" <?php if($selectedSports == ""){echo "selected";}?>>Select Sports</option>
<?php
                for($i=0;$i<mysqli_num_rows($result1);$i++){
                    $data = mysqli_fetch_assoc($result1);
                    ?>
                    <option value="<?php echo $data["sports_name"];?>"<?php if($selectedSports == $data["sports_name"]){echo "selected";}?>><?php echo $data["sports_name"];?></option>
            <?php } ?>
</select>

</form>
</span>
    </div>
        <div class="table-div">
        <center>
            <table>
                <tr>
                    <td style="font-weight:bold; font-size:17px;">S_No</td>
                    <td style="font-weight:bold; font-size:17px;">Roll No</td>
                    <td style="font-weight:bold; font-size:17px;">Name</td>
                    <td style="font-weight:bold; font-size:17px;">Course</td>
                    <td style="font-weight:bold; font-size:17px;">Semester</td>
                    <td style="font-weight:bold; font-size:17px;">Phone</td>
                    <td style="font-weight:bold; font-size:17px;">Email</td>
                    <td style="font-weight:bold; font-size:17px;">DOB</td>
                    <td style="font-weight:bold; font-size:17px;">Gender</td>
                    <td style="font-weight:bold; font-size:17px;">Sports Name</td>
                    <td style="font-weight:bold; font-size:17px;">T-shirt Size</td>
                    <td style="font-weight:bold; font-size:17px;">DateTime</td>
                </tr>
                <?php
                for($i=0;$i<mysqli_num_rows($result);$i++){
                    $data = mysqli_fetch_assoc($result);
                    ?>
                <tr>
                    <td style="text-align:center;"><?php echo ($i+1);?></td>
                    <td><?php echo $data["stu_roll"];?></td>
                    <td><?php echo $data["stu_name"];?></td>
                    <td><?php echo $data["stu_course"];?></td>
                    <td><?php echo $data["stu_semester"];?></td>
                    <td><?php echo $data["stu_phone"];?></td>
                    <td><?php echo $data["stu_email"];?></td>
                    <td><?php echo $data["stu_dob"];?></td>
                    <td><?php echo $data["stu_gender"];?></td>
                    <td><?php echo $data["sports_name"];?></td>
                    <td><?php echo $data["shirt_size"];?></td>
                    <td><?php echo $data["reg_dateTime"];?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </center>
    </div>
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

                <input type="hidden" name="fac_id" value="<?php echo $_SESSION['facultyId']?>">

            </footer>
            </div>
            <p class="copyright">
                <p>Copyright © All right reserved iSports.in</p>
            </p> -->

        <script>
            function filter(){
                var selectedCourse = filterForm.filterCourse.value;
                var selectedSemester = filterForm.filterSemester.value;
                var selectedGender = filterForm.filterGender.value;
                var selectedSports = filterForm.filterSports.value;
                location.href = "fac_check_sports.php?course="+selectedCourse+"&sem="+selectedSemester+"&gen="+selectedGender+"&sprt="+selectedSports;
            }
        </script>
    </body>
</html>