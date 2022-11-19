<?php
include("connection.php");
$value = $_REQUEST["q"];
switch($value){

    case 0:
        $adm_name = $_POST['nname'];
        $adm_id = $_POST['naid'];
        $adm_phone = $_POST['nphone'];
        $adm_email = $_POST['nemail'];
        $adm_password = MD5($_POST['npassword']);
        $adm_dob = $_POST['ndob'];
        $adm_gender = $_POST['ngender'];
        $query = "INSERT into admin (adm_name,adm_phone,adm_email,adm_gender,adm_dob,adm_added_on,adm_password,adm_id) values('$adm_name','$adm_phone','$adm_email','$adm_gender','$adm_dob',current_timestamp(),'$adm_password','$adm_id')";
        mysqli_query($conn,$query);
        header("location:adm_login.php");
        break;

    case 1:
        $stu_roll=$_POST['nroll'];
        $stu_name=$_POST['nname'];
        $stu_course=$_POST['ncourse'];
        $stu_semester=$_POST['nsemester'];
        $stu_phone=$_POST['nphone'];
        $stu_email=$_POST['nemail'];
        $stu_password=MD5($_POST['npassword']);
        $stu_dob=$_POST['ndob'];
        $stu_gender=$_POST['ngender'];
        $query1="select * from student where stu_email='$stu_email' or stu_roll='$stu_roll'";
        $result1=mysqli_query($conn,$query1);
        //echo mysqli_num_rows($result1);exit;

            if(mysqli_num_rows($result1)==1){
                header("location:stud_registration.php?err=0");    
                    }
            else{
                $query="INSERT INTO student (stu_roll,stu_name,stu_course,stu_semester,stu_phone,stu_email,stu_password,stu_dob,stu_gender,stu_added_on) values ('$stu_roll','$stu_name','$stu_course','$stu_semester','$stu_phone','$stu_email','$stu_password','$stu_dob','$stu_gender',current_timestamp())";
                $result=mysqli_query($conn,$query);
                header("location:stud_login.php");           
             }
    
        break;


    case 2:
        $fac_id=$_POST['nfid'];
        $fac_name=$_POST['nname'];
        $fac_designation=$_POST['ndesignation'];
        $fac_phone=$_POST['nphone'];
        $fac_email=$_POST['nemail'];
        $fac_password=MD5($_POST['npassword']);
        $fac_dob=$_POST['ndob'];
        $fac_gender=$_POST['ngender'];
        $query1="select * from faculty where fac_email='$fac_email' or fac_id='$fac_id'";
        $result1=mysqli_query($conn,$query1);

        if(mysqli_num_rows($result1)==1){
            header("location:fac_registration.php?err=0");           
         }
        else{
        $query="INSERT into faculty (fac_id,fac_name,fac_designation,fac_phone,fac_email,fac_password,fac_dob,fac_gender,fac_added_on) values('$fac_id','$fac_name','$fac_designation','$fac_phone','$fac_email','$fac_password','$fac_dob','$fac_gender',current_timestamp())";
        mysqli_query($conn,$query);
        header("location:fac_login.php");
        }
        break;

    case 3:
        $stu_email=$_POST['nid'];
        $stu_password=MD5($_POST['npassword']);
        $query="select * from student where stu_email = '$stu_email' and stu_password = '$stu_password'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1){
        $data = mysqli_fetch_assoc($result);
        if($data["stu_login_status"] == "T"){
        session_start();
        $_SESSION['studentId'] =$data["stu_id"];
        $_SESSION['studentName'] =$data["stu_name"];
        header("location:Stu_Sports_selection.php");
        }else{
            header("location:stud_login.php?err=1");
        }
        }else{
            header("location:stud_login.php?err=0");
        }
        break;

    case 4:  //Student Logout
        session_start();
        $_SESSION['studentId'] ="";
        $_SESSION['studentName'] ="";
        session_unset();
        session_destroy();
        header("location:stud_login.php");
        break;

    case 5:
        $fac_email=$_POST['nid'];
        $fac_password=MD5($_POST['npassword']);
        $query="select * from faculty where fac_email='$fac_email' and fac_password='$fac_password'";
        // echo $query;
        // exit();
        $result=mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $data = mysqli_fetch_assoc($result);
            if($data["fac_login_status"] == "T"){
            session_start();
            $_SESSION['facultyId'] =$data["fac_id"];
            $_SESSION['facultyName'] =$data["fac_name"];
            header("location:fac_check_sports.php");
            }else{
            header("location:fac_login.php?err=1");
            }
            }else{
            header("location:fac_login.php?err=0");
            }
            break;

            case 6:  //faculty Logout
            session_start();
            $_SESSION['facultyId'] ="";
            $_SESSION['facultyName'] ="";
            session_unset();
            session_destroy();
            header("location:fac_login.php");
            break;

            case 7:
            $adm_email=$_POST['nid'];
            $adm_password=MD5($_POST['npassword']);
            $query="select * from admin where adm_email='$adm_email' and adm_password='$adm_password'";
            // echo $query;
            // exit();
            $result=mysqli_query($conn, $query);
            if(mysqli_num_rows($result) == 1){
            $data = mysqli_fetch_assoc($result);
            //var_dump($data);
            session_start();
            $_SESSION['adminId'] =$data["adm_id"];
            $_SESSION['adminName'] =$data["adm_name"];
            header("location:dashboard.php");
            }else{
                header("location:adm_login.php?err=0");
            }
            break;
        
            case 8:  //admin Logout
                session_start();
                $_SESSION['adminId'] ="";
                $_SESSION['adminName'] ="";
                session_unset();
                session_destroy();
                header("location:adm_login.php");
                break;

            case 9:
                $stu_id = $_REQUEST['stu_id'];
                $query = "update  student set stu_login_status = 'T' where stu_id = $stu_id";
                mysqli_query($conn, $query);
                header("location:ADMIN_View_student.php");
                break;

            case 10:
                $stu_id = $_REQUEST['stu_id'];
                $query = "update student  set stu_login_status = 'F' where stu_id = $stu_id";
                mysqli_query($conn, $query);
                header("location:ADMIN_View_student.php");
                break;

            case 11:
                $sno = $_REQUEST['sno'];
                $query = "update faculty  set fac_login_status = 'T' where sno = $sno";
                mysqli_query($conn, $query);
                header("location:ADMIN_View_faculty.php");
                break;
        
            case 12:
                $sno = $_REQUEST['sno'];
                $query = "update faculty set fac_login_status = 'F' where sno = $sno";
                // echo "$query";
                // exit();
                mysqli_query($conn, $query);
                header("location:ADMIN_View_faculty.php");
                break;
           
            case 13:
                $notice_title=$_POST['nnotice_title'];
                $notice_description=($_POST['nnotice_description']);
                    $uploaded_file =$_FILES["nfile"]['tmp_name'];
                    $upload_dir = "pdf/";
                    $fileName = $_FILES['nfile']['name'];
                    $filePath = $upload_dir .$fileName;
                    move_uploaded_file($uploaded_file,$filePath);

                $query="INSERT INTO notice ( notice_title, notice_description,notice_pdf, date_time) VALUES ( '$notice_title', '$notice_description','$filePath', CURRENT_TIMESTAMP())";
                // echo "$query";
                // exit();
                mysqli_query($conn,$query);
                header("location:ADMIN_View_notice.php");
                break;

                
            case 14:
                $notice_id = $_REQUEST['notice_id'];
                $query = "update notice set active_status = 'T' where sno = $notice_id";
                mysqli_query($conn, $query);
                header("location:ADMIN_View_notice.php");
                break;


                // Notice
            case 15:
                $notice_id = $_REQUEST['notice_id'];
                $query = "update notice set active_status = 'F' where sno = $notice_id";
                mysqli_query($conn, $query);
                header("location:ADMIN_View_notice.php");
                break;


                // Contact
            case 16:
                $sno = $_POST['nsno'];
                $address=$_POST['naddress'];
                $phone=($_POST['nphone']);
                $mobile=($_POST['nmobile']);
                $email=($_POST['nemail']);
                // $map=($_POST['nmap']);
                if($sno == 0){
                $query="INSERT INTO contact (sno, address, phone, mobile,email, datetime) VALUES (NULL, '$address','$phone', '$mobile', '$email', CURRENT_TIMESTAMP())";
                }else{
                $query = "update contact set address = '$address', phone = '$phone', mobile = '$mobile', email = '$email' where sno = '$sno'";
                }
                mysqli_query($conn,$query);
                header("location:ADMIN_View_contact.php");
                break;

                
                    //About College
                case 17:
                    $sno = $_POST['nsno'];
                    $about_college=$_POST['about_college'];

                    $upload_dir = "images/";
                    $uploaded_file =$_FILES["nfile"]['tmp_name'];
                    $fileName = $_FILES['nfile']['name'];
                    // print_r($fileName);exit();

                    move_uploaded_file($uploaded_file,$upload_dir."college.png");

                    
                    if($sno == 0){
                    $query="INSERT INTO about_college (sno, about_college, date_time) VALUES (NULL, '$about_college', CURRENT_TIMESTAMP())";
                    }
                    // echo "$query";
                    // exit();
                    else{
                    $query = "update about_college set about_college = '$about_college' where sno = $sno";
                    }
                    mysqli_query($conn,$query);
                    header("location:ADMIN_About_college.php");
                    break;

                    //About Sports 
                case 18:
                    $sno = $_POST['nsno'];
                    $about_sports=$_POST['about_sports'];
                    $upload_dir = "images/";
                    $uploaded_file1 =$_FILES["nfile1"]['tmp_name'];
                    $uploaded_file2 =$_FILES["nfile2"]['tmp_name'];
                    $uploaded_file3 =$_FILES["nfile3"]['tmp_name'];
                    $fileName1 = $_FILES['nfile1']['name'];
                    $fileName2 = $_FILES['nfile2']['name'];
                    $fileName3 = $_FILES['nfile3']['name'];
                    // print_r($fileName);exit();

                    move_uploaded_file($uploaded_file1,$upload_dir."about1.png");
                    move_uploaded_file($uploaded_file2,$upload_dir."about2.png");
                    move_uploaded_file($uploaded_file3,$upload_dir."about3.png");

                    if($sno == 0){
                    $query="INSERT INTO about_sports (sno, about_sports, date_time) VALUES (NULL, '$about_sports', CURRENT_TIMESTAMP())";
                    }
                    // echo "$query";
                    // exit();
                    else{
                    $query = "update about_sports set about_sports = '$about_sports' where sno = $sno";
                    }
                    mysqli_query($conn,$query);
                    header("location:ADMIN_About_sports.php");
                    break;

                    
            
                    // Add_sports
                case 19:
                    $sports_name=($_POST['nsports_name']);
                    $sports_desc=($_POST['nsports_desc']);

                    $upload_dir = "images/sports/";
                    $uploaded_file =$_FILES["nfile"]['tmp_name'];
                    $fileName = $_FILES['nfile']['name'];
                    $filePath = $upload_dir .$fileName;
                    //  print_r($filePath);

                    move_uploaded_file($uploaded_file,$upload_dir.$fileName);
                    //  or die("error");
                    // exit;
                    $query="INSERT INTO sports (sno, sports_name, sports_desc, date_time, img) VALUES (NULL, '$sports_name', '$sports_desc', CURRENT_TIMESTAMP(),'$filePath')";
                    // echo "$query";
                    // exit();
                    mysqli_query($conn,$query);
                    header("location:ADMIN_View_sports.php");
                    break;
                    
                    
                case 20:
                    $upload_dir = "images/gallery/";
                    $uploaded_file =$_FILES["nfile"]['tmp_name'];
                    $fileName = $_FILES['nfile']['name'];
                    $filePath = $upload_dir .$fileName;
                    // print_r($fileName);exit();

                    move_uploaded_file($uploaded_file,$upload_dir.$fileName);
                    
                    $query="INSERT INTO gallery (sno, date_time, img) VALUES (NULL, CURRENT_TIMESTAMP(),'$filePath' )";
                    // echo "$query";
                    // exit();
                    mysqli_query($conn,$query);
                    header("location:ADMIN_View_gallery.php");
                    break;

                case 21:
                    $sno = $_POST['nsno'];
                    $sports_name=$_POST['nsports_name'];
                    $sports_desc=($_POST['nsports_desc']);
                    if(empty($_FILES['nfile']['name'])){
                        $query = "update sports set sports_name = '$sports_name', sports_desc = '$sports_desc' where sno = $sno";
                    }else{
                        /*Upload code here*/
                        $upload_dir = "images/sports/";
                        $uploaded_file =$_FILES["nfile"]['tmp_name'];
                        $fileName = $_FILES['nfile']['name'];
                        $filePath = $upload_dir .$fileName;
                        //  print_r($filePath);
                        move_uploaded_file($uploaded_file,$upload_dir.$fileName);
                        $query = "update sports set sports_name = '$sports_name', sports_desc = '$sports_desc', img = '$filePath'  where sno = $sno";
                    }
                    
                    mysqli_query($conn,$query);
                    header("location:ADMIN_View_sports.php");
                    break;


                case 22:
                    $sno = $_REQUEST['nsno'];
                    $query= "delete from sports where sno = $sno";
                    mysqli_query($conn,$query);
                    header("location:ADMIN_View_sports.php");
                    break;


                case 23:
                    $sno = $_REQUEST['nsno'];
                    $query= "delete from gallery where sno = $sno";
                    mysqli_query($conn,$query);
                    header("location:ADMIN_View_gallery.php");
                    break;



                case 24:
                    $tShirtSize = $_POST['tshirt'];
                    $studentId = $_POST['stu_id'];
                    $selectedSports = $_POST['sports'];

                    // print_r($selectedSports);exit();

                    $query1="DELETE FROM stud_sports_registration where student_id=$studentId";
                    mysqli_query($conn,$query1);
                    for($i=0;$i<sizeof($selectedSports );$i++){
                    $currentSportId = $selectedSports[$i];
                    $query="INSERT INTO stud_sports_registration ( shirt_size, student_id,sports_id, date_time) VALUES ( '$tShirtSize', '$studentId','$currentSportId', CURRENT_TIMESTAMP())";
                    // echo $query1;exit();
                    mysqli_query($conn,$query);
                    }
                    header("location:stu_sports_selection.php");
                    break;

                case 25:  //Admin Logout
                    session_start();
                    $_SESSION['adminId'] ="";
                    $_SESSION['adminName'] ="";
                    session_unset();
                        session_destroy();
                    header("location:adm_login.php");
                    break;


                case 26:  //faculty Logout
                    session_start();
                    $_SESSION['facultyId'] ="";
                    $_SESSION['facultyName'] ="";
                    session_unset();
                        session_destroy();
                    header("location:fac_login.php");
                    break;

                case 27: //Slider
                    $upload_dir = "images/slider/";
                    $uploaded_file =$_FILES["nfile"]['tmp_name'];
                    $fileName = $_FILES['nfile']['name'];
                    $filePath = $upload_dir .$fileName;
                    // print_r($fileName);exit();

                    move_uploaded_file($uploaded_file,$upload_dir.$fileName);
                    
                    $query="INSERT INTO slider (sno, date_time, img) VALUES (NULL, CURRENT_TIMESTAMP(),'$filePath' )";
                    // echo "$query";
                    // exit();
                    mysqli_query($conn,$query);
                    header("location:ADMIN_View_slider.php");
                    break;

                case 28: // delete slider
                        $sno = $_REQUEST['nsno'];
                        $query= "delete from slider where sno = $sno";
                        mysqli_query($conn,$query);
                        header("location:ADMIN_View_slider.php");
                        break;

                case 29: //  Student Change Password
                    session_start();
                    $stu_id=$_SESSION['studentId'];
                    $stu_currentPassword=$_POST['oldPassword'];
                    $stu_newPassword=$_POST['newPassword'];
                    $stu_conPassword=$_POST['conPassword'];
                    $query="select * from student where stu_id=".$stu_id;
                    $result=mysqli_query($conn,$query);
                    $currentdbpassword="";
                    for($i=0;$i<mysqli_num_rows($result);$i++){
                        $data=mysqli_fetch_assoc($result);
                        $currentdbpassword=$data['stu_password'];
                    }
                    if($currentdbpassword==MD5($stu_currentPassword)){
                        $query1 = "update student set stu_password = '".MD5($stu_newPassword)."' where stu_id = ".$stu_id;
                        mysqli_query($conn,$query1);
                        header("location:stud_login.php?err=2");
                    }else{
                        header("location:StudentChangePassword.php");
                    }
                    break;


                    case 30: //  Faculty Change Password
                        session_start();
                        $fac_id=$_SESSION['facultyId'];
                        $fac_currentPassword=$_POST['oldPassword'];
                        $fac_newPassword=$_POST['newPassword'];
                        $fac_conPassword=$_POST['conPassword'];
                        $query="select * from faculty where fac_id=".$fac_id;
                        
                        $result=mysqli_query($conn,$query);
                        $currentdbpassword="";
                        for($i=0;$i<mysqli_num_rows($result);$i++){
                            $data=mysqli_fetch_assoc($result);
                            $currentdbpassword=$data['fac_password'];
                            // echo $currentdbpassword;exit;
                        }
                        if($currentdbpassword==MD5($fac_currentPassword)){
                            $query1 = "update faculty set fac_password = '".MD5($fac_newPassword)."' where fac_id = ".$fac_id;
                            mysqli_query($conn,$query1);
                            header("location:fac_login.php?err=3");
                        }else{
                            header("location:FacultyChangePassword.php");
                        }
                        break;
                    


                        case 31: //  Admin Change Password
                            session_start();
                            $adm_id=$_SESSION['adminId'];
                            $adm_currentPassword=$_POST['oldPassword'];
                            $adm_newPassword=$_POST['newPassword'];
                            $adm_conPassword=$_POST['conPassword'];
                            $query="select * from admin where adm_id=".$adm_id;
                            // echo $query;exit;
                            $result=mysqli_query($conn,$query);
                            $currentdbpassword="";
                            for($i=0;$i<mysqli_num_rows($result);$i++){
                                $data=mysqli_fetch_assoc($result);
                                $currentdbpassword=$data['adm_password'];
                            }
                            if($currentdbpassword==MD5($adm_currentPassword)){
                                $query1 = "update admin set adm_password = '".MD5($adm_newPassword)."' where adm_id = ".$adm_id;
                                mysqli_query($conn,$query1);
                                header("location:adm_login.php?err=3");
                            }else{
                                header("location:AdminChangePassword.php");
                            }
                            break;
                   
                    // case 32: 

                    //         $content=($_POST['ncontent']);
                    //         $upload_dir = "images/sports/";
                    //         $uploaded_file =$_FILES["nfile"]['tmp_name'];
                    //         $fileName = $_FILES['nfile']['name'];
                    //         $filePath = $upload_dir .$fileName;
                    //         //  print_r($filePath);
        
                    //         move_uploaded_file($uploaded_file,$upload_dir.$fileName);
                    //         //  or die("error");
                    //         // exit;
                    //         $query="INSERT INTO stud_sports_registration (ssr_id, content,  img, date_time ) VALUES (NULL, '$content',  CURRENT_TIMESTAMP(),'$filePath')";
                    //         // echo "$query";
                    //         // exit();
                    //         mysqli_query($conn,$query);
                    //         header("location:Stu_sports_selection.php");
                    //         break;
                            

}
?>
