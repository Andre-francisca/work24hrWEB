<?php
require "../include/db.php";
require "../include/random.php";


if(isset($_POST['plan']) == "primary-plan"){ 
    
    $amount = htmlspecialchars($_POST['amount']);
    $userid = htmlspecialchars($_POST['userid']);
    // date("Y-m-d H:i:s");
    $activatedate = date('Y-m-d');
    $enddatelevel = date("Y-m-d",strtotime(date("Y-m-d ",strtotime($activatedate))."+ 14 day"));
    // $enddate1 = date("Y-m-d",strtotime(date("Y-m-d",strtotime($activatedate))."+ 5 day"));
    // $enddatesaving = date("Y-m-d",strtotime(date("Y-m-d",strtotime($activatedate))."+ 60 day"));
     $date = date("Y-m-d");
     $tid = $random;
     
      if($amount<30 ||  $amount>199){
                        $output = "errorlimit";  
                        echo json_encode($output);
                    }
                    else{
                        
                         $sql = "SELECT * FROM users WHERE id = '$userid' ";
                        $result = mysqli_query($con,$sql);
                        $num = mysqli_num_rows($result);
                        if($num>0){
                            $rows = mysqli_fetch_assoc($result);
                            $balance = $rows['balance'];
                            $referredby = $rows['referredby'];
                            if($balance < 30){
                                $output = "errorinsufficient";  
                                echo json_encode($output);
                            }
                            else if($amount > $balance){
                                 $output = "errorinsufficient";  
                                echo json_encode($output);
                            }
                            else{
        
                                     $q = "INSERT INTO investment(userId,investType,dailyProfit,totalProfit,activateDate,endDate,amountInvested,status,plancode) VALUES('$userid','primary-plan','0.01','0.0','$activatedate','$enddatelevel','$amount','active','$tid')";
                                    $result = mysqli_query($con,$q);
                                     
                                    if($result){
                                       
                                        $output = "success";  
                                        echo json_encode($output);
                                        
                                                  $q = "UPDATE users SET balance=balance-$amount WHERE id = '$userid'";
                                                    $result = mysqli_query($con,$q);
                                                    if($result){
                                                        
                                                         $sql = "SELECT * FROM investment WHERE userId = '$userid' AND plancode ='$tid'";
                                                            $result = mysqli_query($con,$sql);
                                                           if($result){
                                                               
                                                               $rows = mysqli_fetch_assoc($result);
                                                               
                                                               $amountinvested = $rows['amountInvested'];
                                                               $intamount = $amountinvested * 0.08;
                                                               
                                                               $query="SELECT * FROM users WHERE id='$userid' ";
                                                                $result = mysqli_query($con,$query);
                                                               
                                                                    if($result){
                                                                         $row = mysqli_fetch_assoc($result);
                                                                        $refby =  $row['referredby'];
                                                                               
                                                                            if(empty($refby)) {
                                                                         
                                                                            } else{
                                                                                             $sql = "SELECT * FROM checkrefs WHERE referrer = '$refby' AND userid='$userid'";
                                                                                            $result = mysqli_query($con,$sql);
                                                                                             $num = mysqli_num_rows($result);
                                                                                            if($num>0){
                                                                                                
                                                                                                
                                                                                            }else{
                                                                                                $q = "INSERT INTO `checkrefs`(`userid`, `referrer`)VALUES('$userid','$refby')";
                                                                                                $result = mysqli_query($con,$q);
                                                                                                
                                                                                                if($result){
                                                                                                      $q = "INSERT INTO `interestwallet`(`interestdate`, `intTransID`, `intDetails`, `interestamount`, `intusername`) 
                                                                                                            VALUES ('$date','$tid','Referral bonus','$intamount','$referredby')";
                                                                                                            $result=mysqli_query($con,$q);
                                                                                                            if($result){
                                                                                                                
                                                                                                                $q = "UPDATE users SET  refbonus=refbonus+$intamount, balance=balance+$intamount WHERE username = '$referredby'";
                                                                                                                $result = mysqli_query($con,$q);
                                                                                                                if($result){
                                                                                                                    // echo "success";
                                                                                                                }
                                                                                                            }
                                                                                                }
                                                                                            }
                                                                            }
                                                                 
                                                                    }
                                                           
                                                           
                                             
                                                               
                                                           }
                                                        
                                                        
                                                        
                                                         
                                                        
                                                    }
                                        
                                        
                                    }
                              
        
                              
                            }
                        }
                        
                    }
    
    
    
    
}
else if(isset($_POST['plan1'])){ 
    
    $amount = htmlspecialchars($_POST['amount1']);
    $userid = htmlspecialchars($_POST['userid']);
    // date("Y-m-d H:i:s");
    $activatedate = date('Y-m-d');
    $enddatelevel = date("Y-m-d",strtotime(date("Y-m-d ",strtotime($activatedate))."+ 14 day"));
    // $enddate1 = date("Y-m-d",strtotime(date("Y-m-d",strtotime($activatedate))."+ 5 day"));
    // $enddatesaving = date("Y-m-d",strtotime(date("Y-m-d",strtotime($activatedate))."+ 60 day"));
     $date = date("Y-m-d");
     $tid = $random;
     
      if($amount<200 ||  $amount>4999){
                        $output = "errorlimit";  
                        echo json_encode($output);
                    }
                    else{
                        
                         $sql = "SELECT * FROM users WHERE id = '$userid' ";
                        $result = mysqli_query($con,$sql);
                        $num = mysqli_num_rows($result);
                        if($num>0){
                            $rows = mysqli_fetch_assoc($result);
                            $balance = $rows['balance'];
                            $referredby = $rows['referredby'];
                            if($balance < 200){
                                $output = "errorinsufficient";  
                                echo json_encode($output);
                            }
                            else if($amount > $balance){
                                 $output = "errorinsufficient";  
                                echo json_encode($output);
                            }
                            else{
        
                                     $q = "INSERT INTO investment(userId,investType,dailyProfit,totalProfit,activateDate,endDate,amountInvested,status,plancode) VALUES('$userid','standard-plan','0.018','0.0','$activatedate','$enddatelevel','$amount','active','$tid')";
                                    $result = mysqli_query($con,$q);
                                     
                                    if($result){
                                       
                                        $output = "success";  
                                        echo json_encode($output);
                                        
                                                  $q = "UPDATE users SET balance=balance-$amount WHERE id = '$userid'";
                                                    $result = mysqli_query($con,$q);
                                                    if($result){
                                                        
                                                         $sql = "SELECT * FROM investment WHERE userId = '$userid' AND plancode ='$tid'";
                                                            $result = mysqli_query($con,$sql);
                                                           if($result){
                                                               
                                                               $rows = mysqli_fetch_assoc($result);
                                                               
                                                               $amountinvested = $rows['amountInvested'];
                                                               $intamount = $amountinvested * 0.08;
                                                               
                                                               $query="SELECT * FROM users WHERE id='$userid' ";
                                                                $result = mysqli_query($con,$query);
                                                               
                                                                    if($result){
                                                                         $row = mysqli_fetch_assoc($result);
                                                                        $refby =  $row['referredby'];
                                                                               
                                                                            if(empty($refby)) {
                                                                         
                                                                            } else{
                                                                                             $sql = "SELECT * FROM checkrefs WHERE referrer = '$refby' AND userid='$userid'";
                                                                                            $result = mysqli_query($con,$sql);
                                                                                             $num = mysqli_num_rows($result);
                                                                                            if($num>0){
                                                                                                
                                                                                                
                                                                                            }else{
                                                                                                $q = "INSERT INTO `checkrefs`(`userid`, `referrer`)VALUES('$userid','$refby')";
                                                                                                $result = mysqli_query($con,$q);
                                                                                                
                                                                                                if($result){
                                                                                                      $q = "INSERT INTO `interestwallet`(`interestdate`, `intTransID`, `intDetails`, `interestamount`, `intusername`) 
                                                                                                            VALUES ('$date','$tid','Referral bonus','$intamount','$referredby')";
                                                                                                            $result=mysqli_query($con,$q);
                                                                                                            if($result){
                                                                                                                
                                                                                                                $q = "UPDATE users SET  refbonus=refbonus+$intamount, balance=balance+$intamount WHERE username = '$referredby'";
                                                                                                                $result = mysqli_query($con,$q);
                                                                                                                if($result){
                                                                                                                    // echo "success";
                                                                                                                }
                                                                                                            }
                                                                                                }
                                                                                            }
                                                                            }
                                                                 
                                                                    }
                                                           
                                                           
                                             
                                                               
                                                           }
                                                        
                                                        
                                                        
                                                         
                                                        
                                                    }
                                        
                                        
                                    }
                              
        
                              
                            }
                        }
                        
                    }
    
    
    
    
}
else if(isset($_POST['plan2'])){ 
    
    $amount = htmlspecialchars($_POST['amount2']);
    $userid = htmlspecialchars($_POST['userid']);
    // date("Y-m-d H:i:s");
    $activatedate = date('Y-m-d');
    $enddatelevel = date("Y-m-d",strtotime(date("Y-m-d ",strtotime($activatedate))."+ 14 day"));
    // $enddate1 = date("Y-m-d",strtotime(date("Y-m-d",strtotime($activatedate))."+ 5 day"));
    // $enddatesaving = date("Y-m-d",strtotime(date("Y-m-d",strtotime($activatedate))."+ 60 day"));
     $date = date("Y-m-d");
     $tid = $random;
     
      if($amount<5000 ||  $amount>24999){
                        $output = "errorlimit";  
                        echo json_encode($output);
                    }
                    else{
                        
                         $sql = "SELECT * FROM users WHERE id = '$userid' ";
                        $result = mysqli_query($con,$sql);
                        $num = mysqli_num_rows($result);
                        if($num>0){
                            $rows = mysqli_fetch_assoc($result);
                            $balance = $rows['balance'];
                            $referredby = $rows['referredby'];
                            if($balance < 5000){
                                $output = "errorinsufficient";  
                                echo json_encode($output);
                            }
                            else if($amount > $balance){
                                 $output = "errorinsufficient";  
                                echo json_encode($output);
                            }
                            else{
        
                                     $q = "INSERT INTO investment(userId,investType,dailyProfit,totalProfit,activateDate,endDate,amountInvested,status,plancode) VALUES('$userid','expert-plan','0.023','0.0','$activatedate','$enddatelevel','$amount','active','$tid')";
                                    $result = mysqli_query($con,$q);
                                     
                                    if($result){
                                       
                                        $output = "success";  
                                        echo json_encode($output);
                                        
                                                  $q = "UPDATE users SET balance=balance-$amount WHERE id = '$userid'";
                                                    $result = mysqli_query($con,$q);
                                                    if($result){
                                                        
                                                         $sql = "SELECT * FROM investment WHERE userId = '$userid' AND plancode ='$tid'";
                                                            $result = mysqli_query($con,$sql);
                                                           if($result){
                                                               
                                                               $rows = mysqli_fetch_assoc($result);
                                                               
                                                               $amountinvested = $rows['amountInvested'];
                                                               $intamount = $amountinvested * 0.08;
                                                               
                                                               $query="SELECT * FROM users WHERE id='$userid' ";
                                                                $result = mysqli_query($con,$query);
                                                               
                                                                    if($result){
                                                                         $row = mysqli_fetch_assoc($result);
                                                                        $refby =  $row['referredby'];
                                                                               
                                                                            if(empty($refby)) {
                                                                         
                                                                            } else{
                                                                                             $sql = "SELECT * FROM checkrefs WHERE referrer = '$refby' AND userid='$userid'";
                                                                                            $result = mysqli_query($con,$sql);
                                                                                             $num = mysqli_num_rows($result);
                                                                                            if($num>0){
                                                                                                
                                                                                                
                                                                                            }else{
                                                                                                $q = "INSERT INTO `checkrefs`(`userid`, `referrer`)VALUES('$userid','$refby')";
                                                                                                $result = mysqli_query($con,$q);
                                                                                                
                                                                                                if($result){
                                                                                                      $q = "INSERT INTO `interestwallet`(`interestdate`, `intTransID`, `intDetails`, `interestamount`, `intusername`) 
                                                                                                            VALUES ('$date','$tid','Referral bonus','$intamount','$referredby')";
                                                                                                            $result=mysqli_query($con,$q);
                                                                                                            if($result){
                                                                                                                
                                                                                                                $q = "UPDATE users SET  refbonus=refbonus+$intamount, balance=balance+$intamount WHERE username = '$referredby'";
                                                                                                                $result = mysqli_query($con,$q);
                                                                                                                if($result){
                                                                                                                    // echo "success";
                                                                                                                }
                                                                                                            }
                                                                                                }
                                                                                            }
                                                                            }
                                                                 
                                                                    }
                                                           
                                                           
                                             
                                                               
                                                           }
                                                        
                                                        
                                                        
                                                         
                                                        
                                                    }
                                        
                                        
                                    }
                              
        
                              
                            }
                        }
                        
                    }
    
    
    
    
}
else if(isset($_POST['plan3'])){ 
    
    $amount = htmlspecialchars($_POST['amount3']);
    $userid = htmlspecialchars($_POST['userid']);
    // date("Y-m-d H:i:s");
    $activatedate = date('Y-m-d');
    $enddatelevel = date("Y-m-d",strtotime(date("Y-m-d ",strtotime($activatedate))."+ 7 day"));
    // $enddate1 = date("Y-m-d",strtotime(date("Y-m-d",strtotime($activatedate))."+ 5 day"));
    // $enddatesaving = date("Y-m-d",strtotime(date("Y-m-d",strtotime($activatedate))."+ 60 day"));
     $date = date("Y-m-d");
     $tid = $random;
     
      if($amount<25000 ||  $amount>49999){
                        $output = "errorlimit";  
                        echo json_encode($output);
                    }
                    else{
                        
                         $sql = "SELECT * FROM users WHERE id = '$userid' ";
                        $result = mysqli_query($con,$sql);
                        $num = mysqli_num_rows($result);
                        if($num>0){
                            $rows = mysqli_fetch_assoc($result);
                            $balance = $rows['balance'];
                            $referredby = $rows['referredby'];
                            if($balance < 25000){
                                $output = "errorinsufficient";  
                                echo json_encode($output);
                            }
                            else if($amount > $balance){
                                 $output = "errorinsufficient";  
                                echo json_encode($output);
                            }
                            else{
        
                                     $q = "INSERT INTO investment(userId,investType,dailyProfit,totalProfit,activateDate,endDate,amountInvested,status,plancode) VALUES('$userid','ultimate-plan','0.026','0.0','$activatedate','$enddatelevel','$amount','active','$tid')";
                                    $result = mysqli_query($con,$q);
                                     
                                    if($result){
                                       
                                        $output = "success";  
                                        echo json_encode($output);
                                        
                                                  $q = "UPDATE users SET balance=balance-$amount WHERE id = '$userid'";
                                                    $result = mysqli_query($con,$q);
                                                    if($result){
                                                        
                                                         $sql = "SELECT * FROM investment WHERE userId = '$userid' AND plancode ='$tid'";
                                                            $result = mysqli_query($con,$sql);
                                                           if($result){
                                                               
                                                               $rows = mysqli_fetch_assoc($result);
                                                               
                                                               $amountinvested = $rows['amountInvested'];
                                                               $intamount = $amountinvested * 0.08;
                                                               
                                                               $query="SELECT * FROM users WHERE id='$userid' ";
                                                                $result = mysqli_query($con,$query);
                                                               
                                                                    if($result){
                                                                         $row = mysqli_fetch_assoc($result);
                                                                        $refby =  $row['referredby'];
                                                                               
                                                                            if(empty($refby)) {
                                                                         
                                                                            } else{
                                                                                             $sql = "SELECT * FROM checkrefs WHERE referrer = '$refby' AND userid='$userid'";
                                                                                            $result = mysqli_query($con,$sql);
                                                                                             $num = mysqli_num_rows($result);
                                                                                            if($num>0){
                                                                                                
                                                                                                
                                                                                            }else{
                                                                                                $q = "INSERT INTO `checkrefs`(`userid`, `referrer`)VALUES('$userid','$refby')";
                                                                                                $result = mysqli_query($con,$q);
                                                                                                
                                                                                                if($result){
                                                                                                      $q = "INSERT INTO `interestwallet`(`interestdate`, `intTransID`, `intDetails`, `interestamount`, `intusername`) 
                                                                                                            VALUES ('$date','$tid','Referral bonus','$intamount','$referredby')";
                                                                                                            $result=mysqli_query($con,$q);
                                                                                                            if($result){
                                                                                                                
                                                                                                                $q = "UPDATE users SET  refbonus=refbonus+$intamount, balance=balance+$intamount WHERE username = '$referredby'";
                                                                                                                $result = mysqli_query($con,$q);
                                                                                                                if($result){
                                                                                                                    // echo "success";
                                                                                                                }
                                                                                                            }
                                                                                                }
                                                                                            }
                                                                            }
                                                                 
                                                                    }
                                                           
                                                           
                                             
                                                               
                                                           }
                                                        
                                                        
                                                        
                                                         
                                                        
                                                    }
                                        
                                        
                                    }
                              
        
                              
                            }
                        }
                        
                    }
    
    
    
    
}
    
else if(isset($_POST['plan4'])){ 
    
    $amount = htmlspecialchars($_POST['amount4']);
    $userid = htmlspecialchars($_POST['userid']);
    // date("Y-m-d H:i:s");
    $activatedate = date('Y-m-d');
    $enddatelevel = date("Y-m-d",strtotime(date("Y-m-d ",strtotime($activatedate))."+ 14 day"));
    // $enddate1 = date("Y-m-d",strtotime(date("Y-m-d",strtotime($activatedate))."+ 5 day"));
    // $enddatesaving = date("Y-m-d",strtotime(date("Y-m-d",strtotime($activatedate))."+ 60 day"));
     $date = date("Y-m-d");
     $tid = $random;
     
      if($amount<50000){
                        $output = "errorlimit";  
                        echo json_encode($output);
                    }
                    else{
                        
                         $sql = "SELECT * FROM users WHERE id = '$userid' ";
                        $result = mysqli_query($con,$sql);
                        $num = mysqli_num_rows($result);
                        if($num>0){
                            $rows = mysqli_fetch_assoc($result);
                            $balance = $rows['balance'];
                            $referredby = $rows['referredby'];
                            if($balance < 50000){
                                $output = "errorinsufficient";  
                                echo json_encode($output);
                            }
                            else if($amount > $balance){
                                 $output = "errorinsufficient";  
                                echo json_encode($output);
                            }
                            else{
        
                                     $q = "INSERT INTO investment(userId,investType,dailyProfit,totalProfit,activateDate,endDate,amountInvested,status,plancode) VALUES('$userid','master-plan','0.03','0.0','$activatedate','$enddatelevel','$amount','active','$tid')";
                                    $result = mysqli_query($con,$q);
                                     
                                    if($result){
                                       
                                        $output = "success";  
                                        echo json_encode($output);
                                        
                                                  $q = "UPDATE users SET balance=balance-$amount WHERE id = '$userid'";
                                                    $result = mysqli_query($con,$q);
                                                    if($result){
                                                        
                                                         $sql = "SELECT * FROM investment WHERE userId = '$userid' AND plancode ='$tid'";
                                                            $result = mysqli_query($con,$sql);
                                                           if($result){
                                                               
                                                               $rows = mysqli_fetch_assoc($result);
                                                               
                                                               $amountinvested = $rows['amountInvested'];
                                                               $intamount = $amountinvested * 0.08;
                                                               
                                                               $query="SELECT * FROM users WHERE id='$userid' ";
                                                                $result = mysqli_query($con,$query);
                                                               
                                                                    if($result){
                                                                         $row = mysqli_fetch_assoc($result);
                                                                        $refby =  $row['referredby'];
                                                                               
                                                                            if(empty($refby)) {
                                                                         
                                                                            } else{
                                                                                             $sql = "SELECT * FROM checkrefs WHERE referrer = '$refby' AND userid='$userid'";
                                                                                            $result = mysqli_query($con,$sql);
                                                                                             $num = mysqli_num_rows($result);
                                                                                            if($num>0){
                                                                                                
                                                                                                
                                                                                            }else{
                                                                                                $q = "INSERT INTO `checkrefs`(`userid`, `referrer`)VALUES('$userid','$refby')";
                                                                                                $result = mysqli_query($con,$q);
                                                                                                
                                                                                                if($result){
                                                                                                      $q = "INSERT INTO `interestwallet`(`interestdate`, `intTransID`, `intDetails`, `interestamount`, `intusername`) 
                                                                                                            VALUES ('$date','$tid','Referral bonus','$intamount','$referredby')";
                                                                                                            $result=mysqli_query($con,$q);
                                                                                                            if($result){
                                                                                                                
                                                                                                                $q = "UPDATE users SET  refbonus=refbonus+$intamount, balance=balance+$intamount WHERE username = '$referredby'";
                                                                                                                $result = mysqli_query($con,$q);
                                                                                                                if($result){
                                                                                                                    // echo "success";
                                                                                                                }
                                                                                                            }
                                                                                                }
                                                                                            }
                                                                            }
                                                                 
                                                                    }
                                                           
                                                           
                                             
                                                               
                                                           }
                                                        
                                                        
                                                        
                                                         
                                                        
                                                    }
                                        
                                        
                                    }
                              
        
                              
                            }
                        }
                        
                    }
    
    
    
    
}

else if(isset($_POST['plan5'])){ 
    
    $amount = htmlspecialchars($_POST['amount5']);
    $userid = htmlspecialchars($_POST['userid']);
    // date("Y-m-d H:i:s");
    $activatedate = date('Y-m-d');
    $enddatelevel = date("Y-m-d",strtotime(date("Y-m-d ",strtotime($activatedate))."+ 30 day"));
    // $enddate1 = date("Y-m-d",strtotime(date("Y-m-d",strtotime($activatedate))."+ 5 day"));
    // $enddatesaving = date("Y-m-d",strtotime(date("Y-m-d",strtotime($activatedate))."+ 60 day"));
     $date = date("Y-m-d");
     $tid = $random;
     
      if($amount<20 ||  $amount>49999){
                        $output = "errorlimit";  
                        echo json_encode($output);
                    }
                    else{
                        
                         $sql = "SELECT * FROM users WHERE id = '$userid' ";
                        $result = mysqli_query($con,$sql);
                        $num = mysqli_num_rows($result);
                        if($num>0){
                            $rows = mysqli_fetch_assoc($result);
                            $balance = $rows['balance'];
                            $referredby = $rows['referredby'];
                            if($balance < 20){
                                $output = "errorinsufficient";  
                                echo json_encode($output);
                            }
                            else if($amount > $balance){
                                 $output = "errorinsufficient";  
                                echo json_encode($output);
                            }
                            else{
        
                                     $q = "INSERT INTO investment(userId,investType,dailyProfit,totalProfit,activateDate,endDate,amountInvested,status,plancode) VALUES('$userid','savings-plan','0.006','0.0','$activatedate','$enddatelevel','$amount','active','$tid')";
                                    $result = mysqli_query($con,$q);
                                     
                                    if($result){
                                       
                                        $output = "success";  
                                        echo json_encode($output);
                                        
                                                  $q = "UPDATE users SET balance=balance-$amount WHERE id = '$userid'";
                                                    $result = mysqli_query($con,$q);
                                                    if($result){
                                                        
                                                         $sql = "SELECT * FROM investment WHERE userId = '$userid' AND plancode ='$tid'";
                                                            $result = mysqli_query($con,$sql);
                                                           if($result){
                                                               
                                                               $rows = mysqli_fetch_assoc($result);
                                                               
                                                               $amountinvested = $rows['amountInvested'];
                                                               $intamount = $amountinvested * 0.08;
                                                               
                                                               $query="SELECT * FROM users WHERE id='$userid' ";
                                                                $result = mysqli_query($con,$query);
                                                               
                                                                    if($result){
                                                                         $row = mysqli_fetch_assoc($result);
                                                                        $refby =  $row['referredby'];
                                                                               
                                                                            if(empty($refby)) {
                                                                         
                                                                            } else{
                                                                                             $sql = "SELECT * FROM checkrefs WHERE referrer = '$refby' AND userid='$userid'";
                                                                                            $result = mysqli_query($con,$sql);
                                                                                             $num = mysqli_num_rows($result);
                                                                                            if($num>0){
                                                                                                
                                                                                                
                                                                                            }else{
                                                                                                $q = "INSERT INTO `checkrefs`(`userid`, `referrer`)VALUES('$userid','$refby')";
                                                                                                $result = mysqli_query($con,$q);
                                                                                                
                                                                                                if($result){
                                                                                                      $q = "INSERT INTO `interestwallet`(`interestdate`, `intTransID`, `intDetails`, `interestamount`, `intusername`) 
                                                                                                            VALUES ('$date','$tid','Referral bonus','$intamount','$referredby')";
                                                                                                            $result=mysqli_query($con,$q);
                                                                                                            if($result){
                                                                                                                
                                                                                                                $q = "UPDATE users SET  refbonus=refbonus+$intamount, balance=balance+$intamount WHERE username = '$referredby'";
                                                                                                                $result = mysqli_query($con,$q);
                                                                                                                if($result){
                                                                                                                    // echo "success";
                                                                                                                }
                                                                                                            }
                                                                                                }
                                                                                            }
                                                                            }
                                                                 
                                                                    }
                                                           
                                                           
                                             
                                                               
                                                           }
                                                        
                                                        
                                                        
                                                         
                                                        
                                                    }
                                        
                                        
                                    }
                              
        
                              
                            }
                        }
                        
                    }
    
    
    
    
}

else if(isset($_POST['plan6'])){ 
    
    $amount = htmlspecialchars($_POST['amount6']);
    $userid = htmlspecialchars($_POST['userid']);
    // date("Y-m-d H:i:s");
    $activatedate = date('Y-m-d');
    $enddatelevel = date("Y-m-d",strtotime(date("Y-m-d ",strtotime($activatedate))."+ 730 day"));
    // $enddate1 = date("Y-m-d",strtotime(date("Y-m-d",strtotime($activatedate))."+ 5 day"));
    // $enddatesaving = date("Y-m-d",strtotime(date("Y-m-d",strtotime($activatedate))."+ 60 day"));
     $date = date("Y-m-d");
     $tid = $random;
     
      if($amount<20000){
                        $output = "errorlimit";  
                        echo json_encode($output);
                    }
                    else{
                        
                         $sql = "SELECT * FROM users WHERE id = '$userid' ";
                        $result = mysqli_query($con,$sql);
                        $num = mysqli_num_rows($result);
                        if($num>0){
                            $rows = mysqli_fetch_assoc($result);
                            $balance = $rows['balance'];
                            $referredby = $rows['referredby'];
                            if($balance < 20000){
                                $output = "errorinsufficient";  
                                echo json_encode($output);
                            }
                            else if($amount > $balance){
                                 $output = "errorinsufficient";  
                                echo json_encode($output);
                            }
                            else{
        
                                     $q = "INSERT INTO investment(userId,investType,dailyProfit,totalProfit,activateDate,endDate,amountInvested,status,plancode) VALUES('$userid','mortgage-plan','0.02','0.0','$activatedate','$enddatelevel','$amount','active','$tid')";
                                    $result = mysqli_query($con,$q);
                                     
                                    if($result){
                                       
                                        $output = "success";  
                                        echo json_encode($output);
                                        
                                                  $q = "UPDATE users SET balance=balance-$amount WHERE id = '$userid'";
                                                    $result = mysqli_query($con,$q);
                                                    if($result){
                                                        
                                                         $sql = "SELECT * FROM investment WHERE userId = '$userid' AND plancode ='$tid'";
                                                            $result = mysqli_query($con,$sql);
                                                           if($result){
                                                               
                                                               $rows = mysqli_fetch_assoc($result);
                                                               
                                                               $amountinvested = $rows['amountInvested'];
                                                               $intamount = $amountinvested * 0.08;
                                                               
                                                               $query="SELECT * FROM users WHERE id='$userid' ";
                                                                $result = mysqli_query($con,$query);
                                                               
                                                                    if($result){
                                                                         $row = mysqli_fetch_assoc($result);
                                                                        $refby =  $row['referredby'];
                                                                               
                                                                            if(empty($refby)) {
                                                                         
                                                                            } else{
                                                                                             $sql = "SELECT * FROM checkrefs WHERE referrer = '$refby' AND userid='$userid'";
                                                                                            $result = mysqli_query($con,$sql);
                                                                                             $num = mysqli_num_rows($result);
                                                                                            if($num>0){
                                                                                                
                                                                                                
                                                                                            }else{
                                                                                                $q = "INSERT INTO `checkrefs`(`userid`, `referrer`)VALUES('$userid','$refby')";
                                                                                                $result = mysqli_query($con,$q);
                                                                                                
                                                                                                if($result){
                                                                                                      $q = "INSERT INTO `interestwallet`(`interestdate`, `intTransID`, `intDetails`, `interestamount`, `intusername`) 
                                                                                                            VALUES ('$date','$tid','Referral bonus','$intamount','$referredby')";
                                                                                                            $result=mysqli_query($con,$q);
                                                                                                            if($result){
                                                                                                                
                                                                                                                $q = "UPDATE users SET  refbonus=refbonus+$intamount, balance=balance+$intamount WHERE username = '$referredby'";
                                                                                                                $result = mysqli_query($con,$q);
                                                                                                                if($result){
                                                                                                                    // echo "success";
                                                                                                                }
                                                                                                            }
                                                                                                }
                                                                                            }
                                                                            }
                                                                 
                                                                    }
                                                           
                                                           
                                             
                                                               
                                                           }
                                                        
                                                        
                                                        
                                                         
                                                        
                                                    }
                                        
                                        
                                    }
                              
        
                              
                            }
                        }
                        
                    }
    
    
    
    
}

    
    
    ?>