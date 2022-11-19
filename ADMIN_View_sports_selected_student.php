<?php
session_start();
// echo $_SESSION['facultyName'];
// echo $_SESSION['facultyId'];
if($_SESSION['adminId'] == ""  || $_SESSION['adminName'] == ""){
    header("location:adm_login.php");
}
error_reporting(0);
$selectedCourse = $_REQUEST['course'];
$selectedSemester = $_REQUEST['sem'];
$selectedGender = $_REQUEST['gen'];
$selectedSports = $_REQUEST['sprt'];
include_once("connection.php");
$query="SELECT *,ssr.date_time as reg_dateTime FROM stud_sports_registration ssr, student stu, sports sprt where ssr.student_id=stu.stu_id and ssr.sports_id=sprt.sno and stu.stu_course like '%".$selectedCourse."%' and stu.stu_semester like '%".$selectedSemester."%' and stu.stu_gender like '%".$selectedGender."%' and sprt.sno like '%".$selectedSports."%'";
$query1="select * from sports";
$result=mysqli_query($conn,$query);
$result1=mysqli_query($conn,$query1);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>iSports: Admin-Panel</title>
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/ADMIN_View_sports_selected_student.css">
        <link rel="icon" href="images/logo/lpu.png">
    </head>
    <body>
        <header class="header-admin">
            <h3 class="header-h3">ADMIN PANEL</h3>
            <a href="AdminChangePassword.php" class="media"><i class="fa fa-key"
                            style="font-size:40px; margin-left:1400px;position:absolute;top:10px;"></i></a>
                            <a href="dblogic.php?q=25" class="mediaaa"><i class="fa fa-sign-out sign-out"
                            style="font-size:35px; margin-left:1470px;position:absolute;top:15px;"></i></a>
        </header>
        <div class="dashboard">
            <div class="dashboard-heading">
            <h4><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;<a href="dashboard.php" style="text-decoration:none;color:white;">Dashboard</a></h4>
            </div>

         <div class="dashboard-gallery">
            <h4><i class="fa fa-picture-o"></i>&nbsp;&nbsp;&nbsp;Manage Gallery <i class="fa fa-arrow-right" style="margin-left:60px"></i>&nbsp;&nbsp;&nbsp;</h4>
        </div> 

            <div class="dropdown-gallery">
                <a href="ADMIN_Add_gallery.php" target="_self">Add Image</a>
                <a href="ADMIN_View_gallery.php" target="_self">View Image</a>
                </div>
        <div class="dashboard-slider">
            <h4><i class="fa fa-sliders"></i>&nbsp;&nbsp;&nbsp;&nbsp;Manage Slider <i class="fa fa-arrow-right" style="margin-left:70px"></i>&nbsp;&nbsp;&nbsp;</h4>
        </div>
            <div class="dropdown-slider">
                <a href="ADMIN_Add_slider.php" target="_self">Add Slider</a>
                <a href="ADMIN_View_slider.php" target="_self">View Slider</a>
                </div>
        <div class="dashboard-sports">
            <h4><i class="fa fa-futbol-o"></i>&nbsp;&nbsp;&nbsp;Manage Sports <i class="fa fa-arrow-right" style="margin-left:65px"></i>&nbsp;&nbsp;&nbsp;</h4>
        </div>
            <div class="dropdown-sports">
                <a href="ADMIN_Add_sports.php" target="_self">Add Sports</a>
                <a href="ADMIN_View_sports.php" target="_self">View Sports</a>
                </div>
                
                <!-- <div class="dashboard-student">
            <h4><i class="fa fa-futbol-o"></i>&nbsp;&nbsp;&nbsp;Manage Students <i class="fa fa-arrow-right" style="margin-left:65px"></i>&nbsp;&nbsp;&nbsp;</h4>
        </div>
            <div class="dropdown-student">
                <a href="ADMIN_View_student.php" target="_self">Registered Students</a>
                <a href="#" target="_self">Student Selected Sports</a>
                </div>

                <div class="dashboard-faculty">
            <h4><i class="fa fa-futbol-o"></i>&nbsp;&nbsp;&nbsp;Manage Faculty <i class="fa fa-arrow-right" style="margin-left:65px"></i>&nbsp;&nbsp;&nbsp;</h4>
        </div>
            <div class="dropdown-faculty">
                <a href="ADMIN_View_faculty.php" target="self">View Faculty</a>
                </div> -->
                <div class="dashboard-sports">
            <h4><i class="fa fa-graduation-cap"></i>&nbsp;&nbsp;&nbsp;Manage Student<i class="fa fa-arrow-right" style="margin-left:65px"></i></h4>
        </div>
            <div class="dropdown-sports">
                <a href="ADMIN_View_student.php" target="_self">View Registered Student</a>
                <a href="ADMIN_View_sports_selected_student.php" target="_self">View Sports Selected Student</a>
                </div>
                <div class="dashboard-sports">
            <h4><i class="fa fa-users"></i>&nbsp;&nbsp;&nbsp;Manage Faculty<i class="fa fa-arrow-right" style="margin-left:65px"></i>&nbsp;&nbsp;&nbsp;</h4>
        </div>
            <div class="dropdown-sports">
                <a href="ADMIN_View_faculty.php" target="_self">View Faculty</a>
                </div>


        <div class="dashboard-notice">
            <h4><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;&nbsp;Manage Notice <i class="fa fa-arrow-right" style="margin-left:67px"></i>&nbsp;&nbsp;&nbsp;</h4>
        </div>
            <div class="dropdown-notice">
                <a href="ADMIN_Add_notice.php" target="_self">Add Notice</a>
                <a href="ADMIN_View_notice.php" target="_self">View Notice</a>
                </div>
        <div class="dashboard-about-us">
            <h4><i class="fa fa-pencil "></i>&nbsp;&nbsp;&nbsp;Manage About Us <i class="fa fa-arrow-right" style="margin-left:47px"></i>&nbsp;&nbsp;&nbsp;</h4></div>
            <div class="dropdown-about-us">
                <a href="ADMIN_About_college.php" target="_self">About College</a>
                <a href="ADMIN_About_sports.php" target="_self">About Sports</a>
                </div>
        <div class="dashboard-contact-us">
            <h4><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;Manage Contact Us <i class="fa fa-arrow-right" style="margin-left:35px"></i>&nbsp;&nbsp;&nbsp;</h4>
        </div>
            <div class="dropdown-contact-us">
                <a href="ADMIN_Add_contact.php" target="_self">Edit Contact Us</a>
                <a href="ADMIN_View_contact.php" target="_self">View Contact Us</a>
                </div> 

                <!-- <div class="dashboard-logout">
                    <h4><i class="fa fa-sign-out "></i>&nbsp;&nbsp;&nbsp;<a href="dblogic.php?q=25" style="text-decoration:none;color:white;">Logout</a></i></h4>
                </div> -->
    </div>
    <div class="add-image-header" style="margin-top:-1097px;">
    <span style="padding:13px;margin-left:50px;">&nbsp;&nbsp;Manage Students&nbsp;&nbsp;/&nbsp;&nbsp;Sports Selected Students</span>
    <!-- <span style="padding-top:10px;font-size:25px;margin-left:455px;color:#fc5404;">Filter</span> -->
    <form name="filterForm">
    <span>
        <select class="input" name="filterCourse" style="margin-left:670px;font-weight:bold;border-radius:20px;" onChange="filter();">
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
                    <option value="<?php echo $data["sno"];?>"<?php if($selectedSports == $data["sno"]){echo "selected";}?>><?php echo $data["sports_name"];?></option>
            <?php } ?>
</select>

</form>
</span>
    </div>


    <div class="table-div" style="margin-left:313px;">
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
        <div class="add-image-footer">
    <p style="padding:13px;">&nbsp;&nbsp;Copyright © All right reserved iSports.in</p>
    </div>
    <form>
    <input type="hidden" name="adm_id" value="<?php echo $_SESSION['adminId']?>">
    </form>
    <script>
            function filter(){
                var selectedCourse = filterForm.filterCourse.value;
                var selectedSemester = filterForm.filterSemester.value;
                var selectedGender = filterForm.filterGender.value;
                var selectedSports = filterForm.filterSports.value;
                location.href = "ADMIN_View_sports_selected_student.php?course="+selectedCourse+"&sem="+selectedSemester+"&gen="+selectedGender+"&sprt="+selectedSports;
            }
        </script>
    </body>
</html>








