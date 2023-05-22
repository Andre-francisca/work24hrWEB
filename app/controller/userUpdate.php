<?php
    require "../include/db.php";
?>


<?php
if(isset($_POST['fname'])){
    
   $fname = mysqli_real_escape_string($con,$_POST["fname"]);
     $lname = mysqli_real_escape_string($con,$_POST["lname"]);
     $userid = $_POST["userid"];
     $email = mysqli_real_escape_string($con,$_POST["email"]);
     $phone = mysqli_real_escape_string($con,$_POST["phone"]);
     $image = $_FILES['image']['name'];
   

    
     
    //  $output = print_r($_FILES);
    //   echo json_encode($output);
    
    
    if($image !=''){
             $file = '../upload/'.basename($_FILES['image']['name']);
            if(move_uploaded_file($_FILES['image']['tmp_name'], $file)){
                
                $q = "UPDATE users SET  profile_image = '$image',firstname='$fname', lastname='$lname', phone_number='$phone' WHERE user_id = '$userid'";
                $result = mysqli_query($con,$q);
                
                if($result){
                    
                     $output = 1;  
                    echo json_encode($output);
                } else{
                     $output = 0;  
                     echo json_encode($output);
                }
                
                
                
            }else{
                
                $output = 2;  
                echo json_encode($output);
            }
        
    }else{
        
            $q = "UPDATE users SET  firstname='$fname', lastname='$lname', phone_number='$phone' WHERE user_id = '$userid'";
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