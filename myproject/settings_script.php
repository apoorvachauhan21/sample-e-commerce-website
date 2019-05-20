<?php 
include 'includes/common.php';
     $email=$_SESSION['email'];
     $sel = "SELECT * FROM users where email='$email'";
$select_query_result = mysqli_query($con, $sel) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
$row = mysqli_fetch_array($select_query_result);
$pass=$row['password'];
     $type_pass= md5($_POST['oldpassword']);
     if(strcmp($type_pass, $pass)==0)
     {
         $new_pass=md5($_POST['newpassword']);
         $re_new_pass=md5($_POST['renewpassword']);
         if(strcmp($re_new_pass, $new_pass)==0)
         {
            $update__name_query="UPDATE users SET password='$new_pass' WHERE email='$email'";
            $update_name_result= mysqli_query($con, $update__name_query) or die(mysqli_error($con));
            header('Location:products.php');
         } 
         else
         {
             echo'New password and Re-Entered Password does not matches';
             header('Location:settings.php');
         }
     }
     else
     {
         echo'Incorrect Password';
     }
             
             
     
     
    
    






?>

