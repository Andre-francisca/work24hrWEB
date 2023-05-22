<?php
    require "../include/db.php";
?>

<?php
if(isset($_POST['jtitle'])){
    
     $emid = mysqli_real_escape_string($con,$_POST["emid"]);
     $jtitle= mysqli_real_escape_string($con,$_POST["jtitle"]);
     $aopenings = mysqli_real_escape_string($con,$_POST["aopenings"]);
     $jobfunction = mysqli_real_escape_string($con,$_POST["jobfunction"]);
     $cindustry = mysqli_real_escape_string($con,$_POST["cindustry"]);
     $wtype = mysqli_real_escape_string($con,$_POST["wtype"]);
     $loc = mysqli_real_escape_string($con,$_POST["loc"]);
     $mqualification = mysqli_real_escape_string($con,$_POST["mqualification"]);
     $eyears = mysqli_real_escape_string($con,$_POST["eyears"]);
     $joblevel = mysqli_real_escape_string($con,$_POST["joblevel"]);
     $scurrency = mysqli_real_escape_string($con,$_POST["scurrency"]);
     $msalary = mysqli_real_escape_string($con,$_POST["msalary"]);
     $jobsummary = mysqli_real_escape_string($con,$_POST["jobsummary"]);
     $jobdesc = mysqli_real_escape_string($con,$_POST["jobdesc"]);
      $date = date('Y-m-d H:i:s');
      $date = date('Y-m-d H:i:s');
    


    //  $output = print_r($_FILES);
    //   echo json_encode($output);
    
                
                $q = "INSERT INTO `job_post`(`emid`, `jtitle`, `aopenings`, `jobfunction`, `cindustry`, `wtype`, `loc`, `mqualification`, `eyears`, `joblevel`, `scurrency`, `msalary`, `jobsummary`, `jobdesc`, `date`, `status`)
                VALUES ('$emid','$jtitle','$aopenings','$jobfunction','$cindustry','$wtype','$loc','$mqualification','$eyears','$joblevel','$scurrency','$msalary','$jobsummary','$jobdesc','$date', '1')";
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