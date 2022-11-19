<?php
session_start();
// echo $_SESSION['facultyName'];
// echo $_SESSION['facultyId'];
if($_SESSION['adminId'] == ""  || $_SESSION['adminName'] == ""){
    header("location:adm_login.php");
}
$sno = $_REQUEST['sno'];
include_once("connection.php");
$query="select * from sports where sno = $sno";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result) ==1){
    $data = mysqli_fetch_assoc($result);
    $sno = $data['sno'];
    $img=$data['img'];
    $sports_name=$data['sports_name'];
    $sports_desc=$data['sports_desc'];
    //echo "here";exit;
}else{
    $sno = "0";
    $img="";
    $sports_name="";
    $sports_desc="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSports: Edit-Sports</title>
    <link rel="icon" href="images/logo/lpu.png">

</head>
<style>
 *{
    margin:0;
    padding:0;
}
.form{
    border:1px solid #ddd;
    padding-top:8px;
    padding-left:10px;
    width:400px;
    height:30px;
}
.cbutton{
    background-color:#fc5404; 
    color:white; 
    width:100px; 
    height:30px;
    font-size:15px;
    border-radius:10px;
    border:2px solid #fc5404;
    font-weight: bold;
}
.cbutton:hover{
    color:#fc5404;
    background-color:white;
    cursor: pointer;
}
.add-image-main{
    background-color: #f5f5f5;
    margin-left: 270px;
    height:567px;
    display:inline;
}
.add-image-main-box{
    box-shadow: 0px 0px 15px silver;
    margin-top:-1065px;
    height:490px;
    width:1125px;
    margin-left: 320px;
    padding-left:30px;
    padding-top:65px;
    font-weight: bold;
    font-family: Open Sans,sans-serif;
}





* {
    margin: 0;
    padding: 0;
}

/* body {
    background-image: linear-gradient(to right, white, #bdc3c7);
} */

.header-admin {
    height: 60px;
    width: 100%;
    background-color: #324148;
}

h3 {
    color: #ffffff;
    font-family: Open Sans, sans-serif;
    font-weight: bold;
    margin-left: 20px;
    padding-top: 20px;
}

.dashboard {
    height: 1097px;
    width: 270px;
    background-color: #324148;
}

.dashboard-heading {
    color: #ffffff;
    font-family: Open Sans, sans-serif;
    padding-top: 15px;
    background-color: #fc5404;
    padding-left: 20px;
    padding-bottom: 14px;
}

.dashboard-gallery,
.dashboard-slider,
.dashboard-sports,
.dashboard-notice,
.dashboard-about-us,
.dashboard-contact-us,
.dashboard-logout {
    color: white;
    font-family: Open Sans, sans-serif;
    padding-top: 15px;
    background-color: #324148;
    padding-left: 20px;
    padding-bottom: 14px;

}

.dashboard-gallery:hover,
.dashboard-slider:hover,
.dashboard-sports:hover,
.dashboard-notice:hover,
.dashboard-about-us:hover,
.dashboard-contact-us:hover,
.dashboard-logout:hover {
    background-color: #f5f6f7;
    color: #fc5404;
    cursor: pointer;
}

.dropdown-gallery,
.dropdown-slider,
.dropdown-sports,
.dropdown-notice,
.dropdown-about-us,
.dropdown-contact-us {
    background-color: #324148;
    margin-left: 50px;
}

.dropdown-gallery a,
.dropdown-slider a,
.dropdown-sports a,
.dropdown-notice a,
.dropdown-about-us a,
.dropdown-contact-us a {
    color: #ffffff;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-gallery a:hover,
.dropdown-slider a:hover,
.dropdown-sports a:hover,
.dropdown-notice a:hover,
.dropdown-about-us a:hover,
.dropdown-contact-us a:hover {
    color: #fc5404;
    background-color: #f5f6f7;
}

.dashboard-logout {
    margin-top: 1px;
    padding-left: 80px;
}

.dashboard-logout:hover {
    border: 1px solid silver;
}

.div-one {
    background-color: #999999;
    height: 100%;
    width: 100%;
    float: left;
    position: relative;
    margin-left: 270px;
    margin-top: -661px;
}

.add-image-footer {
    background-color: #fafafa;
    height: 45px;
    margin-left: 270px;
    margin-top: -17px;
    font-size: 16px;
    font-family: Open Sans, sans-serif;
    font-weight: bold;
    border: 1px solid #ddd;
    color: #333;
}

</style>
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


<div class="add-image-main">
    <div class="add-image-main-box">
<form action="dblogic.php?q=21" method="POST" enctype="multipart/form-data">
                <span style=" padding-top:20px;">Upload Sports Images&nbsp;</span>
                <span style="color:#fc5404;">(width:560 px and height:373 px)</span>
                <div class="form" style="height:30px;width:410px; border-radius:10px;">
                    <input type="file" class="cfile" name="nfile">
                    <img src="<?php echo $data["img"];?>" style="margin-left: 455px;height: 131px;margin-top: -80px;">
                </div><br><br>
                Sports Name: <input type="text" class="csports_name" name="nsports_name" required="" value="<?php echo $sports_name;?>"
                    style="height:25px;width:210px; border-radius:10px;"><br><br><br><br><br>
                Sports Description: <br><textarea class="csports_desc" name="nsports_desc" required="" value="<?php echo $sports_desc;?>"
                    style="width:280px;height:100px; border-radius:10px;margin-left:170px; margin-top:-50px;"><?php echo $sports_desc;?></textarea><br><br>
                <input type="submit" class="cbutton" name="nbutton" value="Update">
                <input type="hidden" name="nsno" value="<?php echo $sno;?>">
                
        </form>
    </div>
</div>
<div class="add-image-footer">
    <p style="padding:13px;m">&nbsp;&nbsp;Copyright © All right reserved iSports.in</p>
    </div>
</body>
</html>