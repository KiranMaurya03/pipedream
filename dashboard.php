<?php
session_start();
// echo $_SESSION['facultyName'];
// echo $_SESSION['facultyId'];
if($_SESSION['adminId'] == ""  || $_SESSION['adminName'] == ""){
    header("location:adm_login.php");
}
include_once("connection.php");
$query="select count(*) as reg_stu from student";
$query1="select count(*) as sprt_chs_stu from stud_sports_registration";
$query2="select count(*) as fac from faculty";
$query3="select count(*) as sprt from sports";
$query4="select * from sports";
// $query5="select count(*) totalRegistration,sprt.sports_name from sports sprt,stud_sports_registration ssr where ssr.sports_id=sprt.sno group by ssr.sports_id";
$query5="SELECT count(stud_sports_registration.sports_id) totalRegistration, sports.sports_name FROM sports LEFT JOIN stud_sports_registration ON sports.sno = stud_sports_registration.sports_id group by sports.sno";

$result=mysqli_query($conn,$query);
$result1=mysqli_query($conn,$query1);
$result2=mysqli_query($conn,$query2);
$result3=mysqli_query($conn,$query3);
$result4=mysqli_query($conn,$query4);
$result5=mysqli_query($conn,$query5);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>iSports: Admin-Panel</title>
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="icon" href="images/logo/lpu.png">
    </head>
    <body>
        <header class="header-admin">
            <h3 class="header-h3">ADMIN PANEL</h3>
            <!-- <span class="change-pass" style="position:absolute;right:50px;top:15px;"><a href="AdminChangePassword.php" style="text-decoration:none;color:white;font-size:30px;"><i class="fa fa-key"></i></a></span> -->
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
                    <i class="fa fa-sign-out">&nbsp;&nbsp;&nbsp;<a href="dblogic.php?q=25" class="akki" style="text-decoration:none;color:white;">Logout</a></i>
                </div> -->
    </div>
        

            
                <div class="reg-stud" style="padding-top:10px;"><i class="fa fa-graduation-cap" style="font-size:20px; margin-top:2px;font-weight:bold;">&nbsp;Registered Students</i>

                <?php
                for($i=0;$i<mysqli_num_rows($result);$i++){
                    $data=mysqli_fetch_assoc($result);
                ?>
                <h1 class="game-name" style="padding-top:40px;"><?php echo $data["reg_stu"];?></h1>
                <?php } ?>

            </div>

                <div class="sprt-stud" style="padding-top:10px;"><i class="fa fa-check-square-o " style="font-size:20px;font-weight:bold;">&nbsp;Sports Written By students</i>
            
                <?php
                for($i=0;$i<mysqli_num_rows($result1);$i++){
                    $data=mysqli_fetch_assoc($result1);
                    ?>
                    <h1 class="game-name" style="padding-top:40px;"><?php echo $data["sprt_chs_stu"];?></h1>
               <?php } ?>
                
            </div>

                <div class="fac" style="padding-top:10px;"><i class="fa fa-users " style="font-size:20px;font-weight:bold;">&nbsp;Total Faculty</i>
                <?php
                for($i=0;$i<mysqli_num_rows($result2);$i++){
                    $data=mysqli_fetch_assoc($result2);
                    ?>
                    <h1 class="game-name" style="padding-top:40px;"><?php echo $data["fac"];?></h1>
               <?php } ?>
            </div>
                
                <div class="sports"  style="padding-top:10px;"><i class="fa fa-futbol-o" style="font-size:20px;font-weight:bold;">&nbsp;Total Sports</i>
                <?php
                for($i=0;$i<mysqli_num_rows($result3);$i++){
                    $data=mysqli_fetch_assoc($result3);
                    ?>
                    <h1 class="game-name" style="padding-top:40px;"><?php echo $data["sprt"];?></h1>
               <?php } ?>
            </div>


            
            <div>
            <table>
                <tr>
                    <td style="font-weight:bold; font-size:25px;background-image: linear-gradient(to right, #f5f6f7, #fc5404, #f5f6f7);
">Sports Name</td>
                    <td style="font-weight:bold; font-size:25px;background-image: linear-gradient(to right, #f5f6f7, #fc5404, #f5f6f7);
">Total Registration</td>
                    </tr>
            
                <?php
                for($i=0;$i<mysqli_num_rows($result4);$i++){
                    $data=mysqli_fetch_assoc($result4);
                    for($i=0;$i<mysqli_num_rows($result5);$i++){
                        $data=mysqli_fetch_assoc($result5);
                    ?>
               
               <tr>
               <td><?php echo $data["sports_name"];?></td>
               <td><?php echo $data["totalRegistration"];?></td>
               </tr>

               <?php } ?>
               <?php } ?>
               </table>
            </div>

        <div class="add-image-footer">
    <p style="padding:13px;m">&nbsp;&nbsp;Copyright © All right reserved iSports.in</p>
    </div>
    <form>
    <input type="hidden" name="adm_id" value="<?php echo $_SESSION['adminId']?>">
    </form>
    </body>
</html>








