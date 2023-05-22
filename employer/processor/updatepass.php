<?php
require "../include/db.php";

if(isset($_POST['cpass'])){ 
    $cpass = htmlspecialchars($_POST['cpass']);
    $cpass = md5($cpass);
    $npass = htmlspecialchars($_POST['npass']);
    $npass = md5($npass);
     $emid = mysqli_real_escape_string($con,$_POST["emid"]);

    $q = "Select * FROM employers where rpassword='$cpass' AND emid ='$emid'";
    $result = mysqli_query($con,$q);
    $num = mysqli_num_rows($result);
    if($num>0){
        $sql = "UPDATE employers SET rpassword = '$npass' WHERE emid = '$emid' ";
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