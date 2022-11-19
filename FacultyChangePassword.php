<?php
session_start();
// echo $_SESSION['facultyName'];
// echo $_SESSION['facultyId'];
if($_SESSION['facultyId'] == ""  || $_SESSION['facultyName'] == ""){
    header("location:fac_login.php");
}
error_reporting(0);
$error = $_REQUEST['err'];
include_once("connection.php");
$query="select * from faculty where fac_id = ".$_SESSION['facultyId'];
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>iSports: Faculty Change Password</title>
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/FacultyChangePassword.css">
        <link rel="icon" href="images/logo/lpu.png">
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
                    href="email:info@smsvaranasi.com">info@smsvaranasi.com</a>
            </div>
        </header>
    </div>
    <div class="nav-class" style="padding-bottom:25px;">
        <nav class="nav-bar">
            <ul style="margin-right:1220px;">

                <li><a href="index.php"><img class="logo" src="images/logo/logo.jpg" alt="isports logo"
                            style="margin-top: -10px;margin-left: -20px; display:inline-block"></a></li>


            </ul>
            <ul style="margin-top:-60px;">
                <li><a href="index.php" target="_blank">Home</a></li>
                <li><a href="about.php" target="_blank">About Us</a></li>
                <li><a href="contact.php" target="_blank">Contact Us</a></li>
            </ul>
            <div class="button" style="margin-left:1200px;"><i class="fa fa-user-circle-o" style="font-size:60px;position:absolute;top:80px;right:220px;"></i>



            <?php
                        $data=mysqli_fetch_assoc($result);
                        ?>
                        <div class="sports-css">
                        <h1 style="margin-top:-35px;margin-left:120px;"><?php echo $data['fac_id']?></h1>
                        <h1 style="margin-left:125px;"><?php echo $data['fac_name']?></h1>
                        <h1 style="margin-left:125px;font-size:17px;"><?php echo $data['fac_designation']?></h1>                      
                    </div>
                    </a></button> 
                    <a href="dblogic.php?q=26" class="mediaaa"><i class="fa fa-sign-out sign-out"
                            style="font-size:35px; margin-left:155px;position:absolute;top:90px;"></i></a>
                    
                    </div>
</div>

<?php
            if(isset($error)){
                if($error==3){
                    echo "<font color='red'><b>Your Password has been changed!!! </b></font>";
                }
                else{
                    echo "<font color='red'><b>Your old password and current password is not same!!! </b></font>";
                }
            }
?>

<div class="add-image-main">    
        <div class="add-image-main-box" style="width:1120px;">
        <p><u>Change Password</u></p><br><br>
        <form  name="frm" onsubmit="return Function()" action="dblogic.php?q=30" method="POST" style="text-align:center;">
            Old  Password : <input type="password" placeholder="Enter your old password" class="pass" name="oldPassword" required="" style="height:22px;width:250px;border-radius:10px;margin-left:42px;"><br><br>
            New Password : <input type="password" placeholder="Enter your new password" class="newPass" name="newPassword" required="" style="height:22px;width:250px;border-radius:10px;margin-left:36px;"><br><br>
            Confirm Password : <input type="password" placeholder="Confirm your password" class="conPass" name="conPassword" required="" style="height:22px;width:250px;border-radius:10px;margin-left:10px;"><br>
    <br><br><button class="cbutton" name="nbutton">Upload</button>
    </form>
    </div>
</div>

    </body>
</html>