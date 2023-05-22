<?php
    require "../include/db.php";
?>

<?php
if(isset($_POST['fname'])){
    
     $fname = mysqli_real_escape_string($con,$_POST["fname"]);
     $lname = mysqli_real_escape_string($con,$_POST["lname"]);
     $userid = mysqli_real_escape_string($con,$_POST["userid"]);
     $email = mysqli_real_escape_string($con,$_POST["email"]);
     $phone = mysqli_real_escape_string($con,$_POST["phone"]);
    
    
     
    //  $output = print_r($_FILES);
    //   echo json_encode($output);
    
    if($fname !=""){
        
            $q = "UPDATE users SET  fname='$fname', lname='$lname', phone='$phone' WHERE id = '$userid'";
                $result = mysqli_query($con,$q);
                
                if($result){
                    
                     $output = 1;  
                    echo json_encode($output);
                } else{
                     $output = 0;  
                     echo json_encode($output);
                }
        
    }
     
 
     
}

?>