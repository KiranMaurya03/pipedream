<?php
session_start();
if($_SESSION['adminId'] == "" || $_SESSION['adminName'] == ""){
    header("location:adm_login.php");
}
error_reporting(0);
$error = $_REQUEST['err'];
include_once("connection.php");
// $query="select * from admin";
// $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>iSports: Admin-Panel</title>
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/AdminChangePassword.css">
        <link rel="icon" href="images/logo/lpu.png">
    </head>

    <body>
        <header class="header-admin">
            <h3 class="header-h3">ADMIN PANEL</h3>
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

                <div class="dashboard-logout">
                    <h4><i class="fa fa-sign-out "></i>&nbsp;&nbsp;&nbsp;<a href="dblogic.php?q=25" style="text-decoration:none;color:white;">Logout</a></i></h4>
                </div>
    </div>


    <?php
            if(isset($error)){
                if($error==3){
                    echo "<font color='#FF0000'><b>YOur Password has been changed!!! </b></font>";
                }
                else{
                    echo "<font color='#FF0000'><b>YOur old password and current password is not same!!! </b></font>";
                }
            }
?>

    <div class="add-image-header" style="margin-top:-1097px;">
    <p style="padding:13px;">&nbsp;&nbsp;Admin&nbsp;&nbsp;/&nbsp;&nbsp;Change Password</p>
    </div>
    <div class="add-image-main">    
        <div class="add-image-main-box" style="width:1120px;">
        <p><u>Change Password</u></p><br><br>
        <form  name="frm" onsubmit="return Function()" action="dblogic.php?q=31" method="POST" style="text-align:center;">
            Password : <input type="password" class="pass" name="oldPassword" required="" style="height:22px;width:250px;border-radius:10px;margin-left:70px;"><br><br>
            New Password : <input type="password" class="newPass" name="newPassword" required="" style="height:22px;width:250px;border-radius:10px;margin-left:36px;"><br><br>
            Confirm Password : <input type="password" class="conPass" name="conPassword" required="" style="height:22px;width:250px;border-radius:10px;margin-left:10px;"><br>
    <br><br><button class="cbutton" name="nbutton">Upload</button>
    </form>
    </div>
    </div>
<div class="add-image-footer">
    <p style="padding:13px;">&nbsp;&nbsp;Copyright © All right reserved iSports.in</p>
    </div>
    </body>
</html>