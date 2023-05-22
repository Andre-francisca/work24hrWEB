<?php
require "../include/db.php";
?>

<?php
 
 if(isset($_POST["jobappid"]))  
 { 
 $sql = "SELECT * FROM job_application j join job_post jp ON j.jobid = jp.jobid JOIN users u ON j.user_id = u.user_id WHERE app_id = '".$_POST["jobappid"]."'";
  $result = mysqli_query($con, $sql);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);
  }
?>