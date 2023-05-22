<?php
    require "../include/db.php";
?>

<?php
if(isset($_POST['fname'])){
    
     $fname = mysqli_real_escape_string($con,$_POST["fname"]);
     $lname = mysqli_real_escape_string($con,$_POST["lname"]);
     $emid = mysqli_real_escape_string($con,$_POST["emid"]);
     $image = $_FILES['image']['name'];
     $email = mysqli_real_escape_string($con,$_POST["email"]);
     $phone = mysqli_real_escape_string($con,$_POST["phone"]);
     $country = mysqli_real_escape_string($con,$_POST["country"]);

    
     
    //  $output = print_r($_FILES);
    //   echo json_encode($output);
    
    
    if($image !=''){
             $file = '../upload/'.basename($_FILES['image']['name']);
            if(move_uploaded_file($_FILES['image']['tmp_name'], $file)){
                
                $q = "UPDATE employers SET companylogo ='$image', rfname='$fname', rlname='$lname', remail='$email', cphone='$phone' WHERE emid = '$emid'";
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
        
            $q = "UPDATE employers SET  rfname='$fname', rlname='$lname', remail='$email', cphone='$phone' WHERE emid = '$emid'";
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