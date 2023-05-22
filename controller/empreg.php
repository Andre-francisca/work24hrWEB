<?php
    require "../include/db.php";
?>

<?php
if(isset($_POST['email'])){
    
     $fname = mysqli_real_escape_string($con,$_POST["fname"]);
     $lname = mysqli_real_escape_string($con,$_POST["lname"]);
     $email = mysqli_real_escape_string($con,$_POST["email"]);
     $pcompany = mysqli_real_escape_string($con,$_POST["position-company"]);
     $cname = mysqli_real_escape_string($con,$_POST["cname"]);
     $phone = mysqli_real_escape_string($con,$_POST["phone"]);
     $cindustry = mysqli_real_escape_string($con,$_POST["cindustry"]);
     $password = mysqli_real_escape_string($con,$_POST["password"]);
     $passwordcrypt = md5($password);
     $nemployees = mysqli_real_escape_string($con,$_POST["nemployees"]);
     $typeofemployer = mysqli_real_escape_string($con,$_POST["typeofemployer"]);
     $website = mysqli_real_escape_string($con,$_POST["website"]);
     $cperson = mysqli_real_escape_string($con,$_POST["cperson"]);
     $cphone = mysqli_real_escape_string($con,$_POST["cphone"]);
     $ccountry = mysqli_real_escape_string($con,$_POST["ccountry"]);
     $caddress = mysqli_real_escape_string($con,$_POST["caddress"]);
    
     
        $time_zone_from="UTC";
        $time_zone_to='Africa/Accra';
        // $display_date = new DateTime($date_time_format, new DateTimeZone($time_zone_from));
        // $display_date = setTimezone(new DateTimeZone($time_zone_to));
       $date = date('Y.m.d H:i:s');
    
    
     
    //  $output = print_r($_FILES);
    //   echo json_encode($output);
    
    
   
                
                $q = "INSERT INTO `employers`( `rfname`, `rlname`, `remail`, `rposition`, `rphone`, `rpassword`, `cname`, `cindustryt`, `nemployees`, `typeofemployer`, `website`, `cperson`, `cphone`, `ccountry`, `caddress`, `companylogo`) 
                VALUES ('$fname','$lname','$email','$pcompany','$phone','$passwordcrypt','$cname','$cindustry','$nemployees','$typeofemployer','$website','$cperson','$cphone','$ccountry','$caddress','')";
                $result = mysqli_query($con,$q);
                
                if($result){
                    
                     $output = 1;  
                    echo json_encode($output);
                } else{
                     $output = 0;  
                     echo json_encode($output);
                }
                
                
        
        
  
     
 
     
}

?>