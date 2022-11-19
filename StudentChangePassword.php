<?php
session_start();
// echo $_SESSION['studentName'];
// echo $_SESSION['studentId'];
if($_SESSION['studentId'] == ""  || $_SESSION['studentName'] == ""){
    header("location:stud_login.php");
}
error_reporting(0);
$error = $_REQUEST['err'];
include_once("connection.php");
$query1="select * from student";
$result1=mysqli_query($conn,$query1);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>iSports: Student Change Password</title>
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/StudentChangePassword.css">
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
                        $data=mysqli_fetch_assoc($result1);
                        ?>
                        <div class="sports-css">
                        <h1 style="margin-top:-35px;margin-left:120px;"><?php echo $data['stu_roll']?></h1>
                        <h1 style="margin-left:125px;"><?php echo $data['stu_name']?></h1>
                        
                    </div>
                    </a></button> 
                    <a href="dblogic.php?q=4" class="mediaaa"><i class="fa fa-sign-out sign-out"
                            style="font-size:35px; margin-left:155px;position:absolute;top:90px;"></i></a>
                    
                    </div>
</div>


<?php
            if(isset($error)){
                if($error==2){
                    echo "<font color='#FF0000'><b>YOur Password has been changed!!! </b></font>";
                }
                else{
                    echo "<font color='#FF0000'><b>YOur old password and current password is not same!!! </b></font>";
                }
            }
?>



    <div class="add-image-main">    
        <div class="add-image-main-box" style="width:1000px;">
        <p style="color:#fc5404;text-align:center;font-size:25px;">Change Password</p><br><br>
        <form  name="frm" onsubmit="return Function()" action="dblogic.php?q=29" method="POST" style="text-align:center;">
            Current Password : <input type="password" placeholder="Enter your Current Password" class="pass" name="oldPassword" style="height:22px;width:250px;border-radius:10px;margin-left:13px;"><br><br>
            New Password : <input type="password" placeholder="Enter your New Password" class="newPass" name="newPassword" style="height:22px;width:250px;border-radius:10px;margin-left:36px;"><br><br>
            Confirm Password : <input type="password" placeholder="Confirm Your Password" class="conPass" name="confirmPassword" style="height:22px;width:250px;border-radius:10px;margin-left:10px;"><br>
    <br><br><input type="submit" class="cbutton" name="nbutton" style="text-align:center;margin-left:1px;">
    </form>
    </div>
</div>



<script>
    // function Function() {
    //     var oldpassword = document.getElementById('oldPassword').value;
    //     var newpassword = document.getElementById('newPassword').value;
    //     var confirmpassword = document.getElementById('confirmPassword').value;
    //     if (oldPassword == "" || newpassword == "" || confirmpassword == "") {
    //         alert('Please fill all the details');
    //     }
        
    //     else if (newpassword != confirmpassword) {
    //         alert("password mismatch");
    //     }
    // }


    function Function(){
        var oldpassword = document.form["frm"]["oldPassword"].value;
        var newpassword = document.form["frm"]["newPassword"].value;
        var conpassword = document.form["frm"]["conPassword"].value;
        if (oldPassword == "" || newpassword == "" || confirmpassword == "") {
            alert('Please fill all the details');
            return false;
        }
        else if(newpassword !== confirmpassword) {
            alert("password mismatch"); 
            return false;
        }
        else{
            return false;
        }

    }

</script>
    </body>
        

</html>