<?php
    require "../include/db.php";
?>

<?php
if(isset($_POST['email'])){
    
     $fname = mysqli_real_escape_string($con,$_POST["fname"]);
     $lname = mysqli_real_escape_string($con,$_POST["lname"]);
     $email = mysqli_real_escape_string($con,$_POST["email"]);
     $loc = mysqli_real_escape_string($con,$_POST["loc"]);
     $gender = mysqli_real_escape_string($con,$_POST["gender"]);
     $phone = mysqli_real_escape_string($con,$_POST["phone"]);
     $dob = mysqli_real_escape_string($con,$_POST["dob"]);
     $password = mysqli_real_escape_string($con,$_POST["password"]);
     $passwordcrypt = md5($password);
     $nationality = mysqli_real_escape_string($con,$_POST["nationality"]);
     $qualification = mysqli_real_escape_string($con,$_POST["qualification"]);
     $jobfunction = mysqli_real_escape_string($con,$_POST["jobfunction"]);
     $yearsofexperience = mysqli_real_escape_string($con,$_POST["yearsofexperience"]);
     $cvfile = $_FILES['cvfile']['name'];
     $availability = mysqli_real_escape_string($con,$_POST["availability"]);
    
     
        $time_zone_from="UTC";
        $time_zone_to='Africa/Accra';
        // $display_date = new DateTime($date_time_format, new DateTimeZone($time_zone_from));
        // $display_date = setTimezone(new DateTimeZone($time_zone_to));
       $date = date('Y.m.d H:i:s');
    
    
     
    //  $output = print_r($_FILES);
    //   echo json_encode($output);
    
    
    if($cvfile !=''){
             $file = '../upload/'.basename($_FILES['cvfile']['name']);
            if(move_uploaded_file($_FILES['cvfile']['tmp_name'], $file)){
                
                $q = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `dob`, `gender`, `nationality`, `location`, `phone_number`, `h_qualification`, `current_job_function`, `year_of_experience`, `availability`, `cv`, `profile_image`, `reg_date`)
                VALUES ('$fname','$lname','$email','$passwordcrypt','$dob','$gender','$nationality','$loc','$phone','$qualification','$jobfunction','$yearsofexperience','$availability','$cvfile','','$date')";
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
        
             $q = "INSERT INTO `users`( `firstname`, `lastname`, `email`, `password`, `dob`, `gender`, `nationality`, `location`, `phone_number`, `h_qualification`, `current_job_function`, `year_of_experience`, `availability`, `cv`, `profile_image`, `reg_date`)
                VALUES ('$fname','$lname','$email','$passwordcrypt','$dob','$gender','$nationality','$loc','$phone','$qualification','$jobfunction','$yearsofexperience','$availability','$cvfile','','$date')";
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