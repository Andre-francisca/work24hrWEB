<?php

require "../include/db.php";


?>
<?php

 if($_POST["uid"])  
 { 

  $uid = mysqli_real_escape_string($con,$_POST['uid']);
  $amount = mysqli_real_escape_string($con,$_POST['amount']);
  $planid = mysqli_real_escape_string($con,$_POST['planid']);



                                            // $enddate = $rows['endDate'];
                                            // $now = strtotime(date("Y-m-d"));
                                            // $your_date = strtotime($enddate);
                                            // $datediff = $your_date - $now;
                                            // $number = floor($datediff/(60*60*24));
                                            
                        $sql = "SELECT * FROM investment WHERE id = '$planid' ";
                        $result = mysqli_query($con,$sql);
                        
                        
                        if($result){
                            
                            $rows = mysqli_fetch_assoc($result);
                            
                                            $enddate = $rows['endDate'];
                                            $dailyprofit = $rows['dailyProfit'];
                                            $now = strtotime(date("Y-m-d"));
                                          
                                if($dailyprofit === "0.0060"){
                                    
                                    $output = "savingerror";  
                                         echo json_encode($output);
                                    
                                }       
                                else if($dailyprofit === "0.0200"){
                                    
                                    $output = "mortgageerror";  
                                         echo json_encode($output);
                                    
                                }else{
                                    
                                    
                                      $q ="UPDATE investment set totalProfit = totalProfit -  $amount   WHERE id = $planid";
                                            $result = mysqli_query($con,$q);
                                         
                                         if($result){
                                             
                                            $q ="UPDATE users set balance = balance +  $amount   WHERE id = $uid";
                                            $result = mysqli_query($con,$q);
                                            
                                            if($result){
                                                 $output = "success";  
                                                echo json_encode($output);
                                            }
                                         }
                                 
                                      else{
                                        $output = "error";  
                                        echo json_encode($output);
                                      }
                                    
                                }       
                            
                        }
                         else{
                                        $output = "error";  
                                        echo json_encode($output);
                                      }
                        
                        

         
         
  }

  
?>