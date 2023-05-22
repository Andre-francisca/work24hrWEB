<?php
    require "../include/db.php";
?>

<?php
if(isset($_POST['jobid'])){
    
     $jobid = mysqli_real_escape_string($con,$_POST["jobid"]);
     $emid = mysqli_real_escape_string($con,$_POST["emid"]);
     $userid = mysqli_real_escape_string($con,$_POST["userid"]);
     $cvfile = $_FILES['cvfile']['name'];
     $status = "pending";
    
   
       $date = date('Y.m.d H:i:s');
    
    
     $q = "SELECT * FROM job_application WHERE jobid = '$jobid' AND user_id = '$userid' ";
    $result = mysqli_query($con,$q);
    $num = mysqli_num_rows($result);
     
     if($num > 0){
         
          $output = 3;  
         echo json_encode($output);
     }
     else{
         
         
                             if($cvfile !=''){
                             $file = '../upload/'.basename($_FILES['cvfile']['name']);
                            if(move_uploaded_file($_FILES['cvfile']['tmp_name'], $file)){
                                
                                $q = "INSERT INTO `job_application`(`jobid`, `emid`, `user_id`, `date_applied`, `statusapp`, `cvfile`) VALUES ('$jobid','$emid','$userid','$date','$status','$cvfile')";
                               
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
                        
                                     $output = 0;  
                                     echo json_encode($output);
                                
                        
                    }
         
         
     }
    //  $output = print_r($_FILES);
    //   echo json_encode($output);
    
    

     
 
     
}

?>