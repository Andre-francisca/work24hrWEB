<?php

require "../include/db.php";


?>
<?php

 if($_POST["message"])  
 { 

  $message = mysqli_real_escape_string($con,$_POST['message']);
  $appid = $_POST['appid'];

         
           $q ="UPDATE job_application SET statusapp = '$message' WHERE app_id = '$appid'";
            $result = mysqli_query($con,$q);
         
         if($result){
         
                 $output = "success";  
                echo json_encode($output);
           
         }
 
      else{
        $output = "error";  
        echo json_encode($output);
      }
  }

  
?>