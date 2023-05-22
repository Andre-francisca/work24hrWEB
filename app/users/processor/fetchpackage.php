<?php
require "../include/db.php";
?>

<?php
 
 if(isset($_POST["planid"]))  
 { 
 $sql = "SELECT * FROM investment  WHERE id = '".$_POST["planid"]."'";
  $result = mysqli_query($con, $sql);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);
  }
?>