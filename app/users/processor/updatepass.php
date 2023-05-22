<?php
require "../include/db.php";

if(isset($_POST['cpass'])){ 
    $cpass = htmlspecialchars($_POST['cpass']);
    $cpass = md5($cpass);
    $npass = htmlspecialchars($_POST['npass']);
    $npass = md5($npass);
    $userid = htmlspecialchars($_POST['userid']);

    $q = "Select * FROM users where password='$cpass' AND id ='$userid'";
    $result = mysqli_query($con,$q);
    $num = mysqli_num_rows($result);
    if($num>0){
        $sql = "UPDATE users SET password = '$npass' WHERE id = '$userid' ";
       $result = mysqli_query($con, $sql); 
       if($result){
        $output = "success";  
        echo json_encode($output);
       }
     
    }
    else{
        $output = "cpasserror";  
        echo json_encode($output);
    }


}
?>