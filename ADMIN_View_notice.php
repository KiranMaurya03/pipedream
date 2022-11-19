<?php
session_start();
// echo $_SESSION['facultyName'];
// echo $_SESSION['facultyId'];
if($_SESSION['adminId'] == ""  || $_SESSION['adminName'] == ""){
    header("location:adm_login.php");
}
include_once("connection.php");
$query="select * from notice";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>iSports: Admin-Panel</title>
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/ADMIN_View_notice.css">
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
            <h4><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;<a href="dashboard.php"
                    style="text-decoration:none;color:white;">Dashboard</a></h4>
        </div>

        <div class="dashboard-gallery">
            <h4><i class="fa fa-picture-o"></i>&nbsp;&nbsp;&nbsp;Manage Gallery <i class="fa fa-arrow-right"
                    style="margin-left:60px"></i>&nbsp;&nbsp;&nbsp;</h4>
        </div>

        <div class="dropdown-gallery">
            <a href="ADMIN_Add_gallery.php" target="_self">Add Image</a>
            <a href="ADMIN_View_gallery.php" target="_self">View Image</a>
        </div>
        <div class="dashboard-slider">
            <h4><i class="fa fa-sliders"></i>&nbsp;&nbsp;&nbsp;&nbsp;Manage Slider <i class="fa fa-arrow-right"
                    style="margin-left:70px"></i>&nbsp;&nbsp;&nbsp;</h4>
        </div>
        <div class="dropdown-slider">
            <a href="ADMIN_Add_slider.php" target="_self">Add Slider</a>
            <a href="ADMIN_View_slider.php" target="_self">View Slider</a>
        </div>
        <div class="dashboard-sports">
            <h4><i class="fa fa-futbol-o"></i>&nbsp;&nbsp;&nbsp;Manage Sports <i class="fa fa-arrow-right"
                    style="margin-left:65px"></i>&nbsp;&nbsp;&nbsp;</h4>
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
            <h4><i class="fa fa-graduation-cap"></i>&nbsp;&nbsp;&nbsp;Manage Student<i class="fa fa-arrow-right"
                    style="margin-left:65px"></i></h4>
        </div>
        <div class="dropdown-sports">
            <a href="ADMIN_View_student.php" target="_self">View Registered Student</a>
            <a href="ADMIN_View_sports_selected_student.php" target="_self">View Sports Selected Student</a>
        </div>
        <div class="dashboard-sports">
            <h4><i class="fa fa-users"></i>&nbsp;&nbsp;&nbsp;Manage Faculty<i class="fa fa-arrow-right"
                    style="margin-left:65px"></i>&nbsp;&nbsp;&nbsp;</h4>
        </div>
        <div class="dropdown-sports">
            <a href="ADMIN_View_faculty.php" target="_self">View Faculty</a>
        </div>


        <div class="dashboard-notice">
            <h4><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;&nbsp;Manage Notice <i class="fa fa-arrow-right"
                    style="margin-left:67px"></i>&nbsp;&nbsp;&nbsp;</h4>
        </div>
        <div class="dropdown-notice">
            <a href="ADMIN_Add_notice.php" target="_self">Add Notice</a>
            <a href="ADMIN_View_notice.php" target="_self">View Notice</a>
        </div>
        <div class="dashboard-about-us">
            <h4><i class="fa fa-pencil "></i>&nbsp;&nbsp;&nbsp;Manage About Us <i class="fa fa-arrow-right"
                    style="margin-left:47px"></i>&nbsp;&nbsp;&nbsp;</h4>
        </div>
        <div class="dropdown-about-us">
            <a href="ADMIN_About_college.php" target="_self">About College</a>
            <a href="ADMIN_About_sports.php" target="_self">About Sports</a>
        </div>
        <div class="dashboard-contact-us">
            <h4><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;Manage Contact Us <i class="fa fa-arrow-right"
                    style="margin-left:35px"></i>&nbsp;&nbsp;&nbsp;</h4>
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
        <p style="padding:13px;">&nbsp;&nbsp;Manage Notice&nbsp;&nbsp;/&nbsp;&nbsp;View Notice</p>
    </div>
    <div class="add-image-main">
        <div class="add-image-main-box">
            <p><u>Notice Record</u></p><br><br>
        </div>
    </div>
    <div class="table-div">
        <center>
            <table>
                <tr>
                    <td style="font-weight:bold; font-size:17px;">S_No</td>
                    <td style="font-weight:bold; font-size:17px;">Title</td>
                    <td style="font-weight:bold; font-size:17px;">Description</td>
                    <td style="font-weight:bold; font-size:17px;">Notice_pdf</td>
                    <td style="font-weight:bold; font-size:17px;">Uploaded. Date</td>
                    <td style="font-weight:bold; font-size:17px;">Uploaded Status</td>
                    <td style="font-weight:bold; font-size:17px;">Action</td>
                </tr>
                <?php
                for($i=0;$i<mysqli_num_rows($result);$i++){
                    $data = mysqli_fetch_assoc($result);
                    ?>
                <tr>
                    <td style="text-align:center;"><?php echo ($i+1);?></td>
                    <td><?php echo $data["notice_title"];?></td>
                    <td><?php echo $data["notice_description"];?></td>
                    <td><?php echo $data["notice_pdf"];?></td>
                    <td><?php echo $data["date_time"];?></td>
                    <td><?php echo ($data["active_status"]== "T")?"Enabled":"Disabled";?></td>
                    <td>
                        <?php
                if($data["active_status"]== "T"){?>
                        <a href="dblogic.php?q=15&notice_id=<?php echo $data["sno"];?>"
                            style="text-decoration:none; color:green;">Disabled</a>
                        <?php } else { ?>
                        <a href="dblogic.php?q=14&notice_id=<?php echo $data["sno"];?>"
                            style="text-decoration:none; color:red;">Enabled</a>
                        <?php
                }
                ?>

                    </td>
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
</body>

</html>