<?php
require "../include/db.php";
mysqli_set_charset($con,"utf8mb4");
header('Content-Type: text/html; charset=utf-8');
?>
<?php
// session_start();
if(isset($_POST['email'])){
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
     $passnew = md5($password);
    
    $q = "SELECT * FROM users WHERE email = '$email' AND password = '$passnew' ";
    $result = mysqli_query($con,$q);
    $num = mysqli_num_rows($result);
    header("Content-type: application/json;charset=utf8");

            if($num>0){ 
               
                         $rows = mysqli_fetch_assoc($result);
                             $userid =  $rows['user_id'];
                            $fname = $rows['firstname'];
                            $lname = $rows['lastname'];
                           
                             //set session 
                             $_SESSION['userid'] = $userid;                    
                              //end of session code
                             $output = 1;  
                            echo json_encode($output);
                            
                       
                
              
                 }
            else{
                $output = 0;  
                echo json_encode($output);
               }

    

}
?>