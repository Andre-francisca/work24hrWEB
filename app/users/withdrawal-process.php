<?php require "./assets/template/header.php" ?>
<?php require "./include/random.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
   <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php
                  $title = 'Withdrawal-Process';
            ?>
                <?php
                 
                 require "./assets/template/title.php";
                
                ?>
                
                <?php

                 use PHPMailer\PHPMailer\PHPMailer;
                require "PHPMailer/PHPMailer.php";
                require "PHPMailer/Exception.php";
                require "PHPMailer/SMTP.php";

?>

                    <?php
                 $error = false;
                 if(isset($_POST['depbtc'])){
                      $amount = mysqli_real_escape_string($con,$_POST['amount']);
                      $btcgate = htmlspecialchars($_POST['gateway']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $btctransid = htmlspecialchars($_POST['btctransid']);
                      $date = date('Y-m-d');
                        $tid = $random;
                      
                       $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $interestbalance = $row['balance'];
                            
                             if($amount>$interestbalance){
                                
                                         $error = true;
                                        $errorposter =  '<div class="alert alert-danger alert-dismissible " role="alert">
                                        Insufficient fund in your Wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO withdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','BITCOIN','$date','Pending','$btctransid')";
                                        $result  = mysqli_query($con,$q);
                                        if($result){
                                            
                                                        $to = $email;
                                                     $from = 'support@threefoldinvest.com';
                                                        $fromName = 'ThreeFoldInvest';
                                                        $mail = new PHPMailer();
                                                        $mail ->setFrom($from, $fromName);
                                                        $mail ->addAddress($to);
                                                        // $mail ->addAttachment($file);
                                                        $mail ->Subject = 'Withdrawal Order';
                                                        
                                                        $body = "<html><head><title>Withdrawal Order</title></head>
                                                                     <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                     <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                                   <div style='padding:12px;'>
                                                                   <p><b>Dear</b> $fname, </p>
                                                                   <p> We have received your Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                                   
                                                                   <p><b>Order Number:</b> $tid </p>
                                                                   <p><b>Amount:</b>  $$amount</p>
                                                                   <p><b>Gateway:</b>  BITCOIN</p>
                                                                   <p><b>Date:</b> $date </p>
                                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                                   
                                                                    <p>Sincerely</p>
                                                                      <p>ThreeFoldInvest</p>
                                                                            <center><p><a href='https://www.threefoldinvest.com'>visit our website</a> | <a href='https://threefoldinvest.com/login'>log in to your account</a> | <a href='https://www.threefoldinvest.com/contact'>get support </a></p>
                                                                            <p>Copyright © ThreeFoldInvest, All rights reserved. </p>
                                                                            </center>
                                                                    
                                                                   </div>
                                                                   </div>
                                                                   </body>
                                                                   </html>";
                                                        $mail ->Body = $body;
                                                        $mail->IsHTML(true);
                                                        $mail->IsSMTP();
                                                        $mail->SMTPAuth = true; 
                                                        $mail->SMTPOptions = array(
                                                                'ssl' => array(
                                                                    'verify_peer' => false,
                                                                    'verify_peer_name' => false,
                                                                    'allow_self_signed' => true
                                                                )
                                                            );
                                                 
                                                       $mail->SMTPSecure = 'ssl'; 
                                                        $mail->Host = 'smtppro.zoho.com';
                                                        $mail->Port = 465;  
                                                        $mail->Username = 'support@threefoldinvest.com';
                                                        $mail->Password = 'Threefold001@'; 
                                                        
                                                        
                                                        
                                                            if($mail->Send()){
                                                            //   echo '<script> alert("Success")</script>';
                                                            }else{
                                                                // echo '<script> alert("error")</script>';
                                                            }
                                                      sendemail_admin("$fname","$email","$amount");
                                                      
                                                     echo "<script>window.location='withdrawal-order'</script>";
                                                       
                                                         
                                                     }
                                                        else{
                                                        $error = true;
                                                        $errorposter =  '<div class="alert alert-warning alert-dismissible " role="alert">
                                                        Something went wrong! try again
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>';
                                                    }
                            }
                            
                        }
                        
                        
                      
       
                
                
                 }
                 else if(isset($_POST['depeth'])){
                      $amount = htmlspecialchars($_POST['usd']);
                      $gateway = htmlspecialchars($_POST['gateway']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $ethtransid = htmlspecialchars($_POST['ethtransid']);
                      $date = date('Y-m-d');
                        $tid = $random;
                        
                        $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $interestbalance = $row['balance'];
                            
                             if($amount>$interestbalance){
                                
                                        $error = true;
                                        $errorposter =  '<div class="alert alert-danger alert-dismissible " role="alert">
                                        Insufficient fund in your Wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                $q = "INSERT INTO withdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                VALUES ('$userid','$amount','$tid','ETHEREUM','$date','Pending','$ethtransid')";
                                $result  = mysqli_query($con,$q);
                                if($result){
                                        $to = $email;
                                        $from = 'support@threefoldinvest.com';
                                         $fromName = 'ThreeFoldInvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Withdrawal Order';
                                       
                                        $body = "<html><head><title>Withdrawal Order</title></head>
                                               <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                     <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                   
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  ETHEREUM</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                   
                                                  <p>Sincerely</p>
                                                  <p>ThreeFoldInvest</p>
                                                        <center><p><a href='https://www.threefoldinvest.com'>visit our website</a> | <a href='https://threefoldinvest.com/login'>log in to your account</a> | <a href='https://www.threefoldinvest.com/contact'>get support </a></p>
                                                        <p>Copyright © ThreeFoldInvest, All rights reserved. </p>
                                                        </center>
                                                    
                                                   </div>
                                                   </div>
                                                   </body>
                                                   </html>";
                                        $mail ->Body = $body;
                                        $mail->IsHTML(true);
                                        $mail->IsSMTP();
                                        $mail->SMTPAuth = true; 
                                        $mail->SMTPOptions = array(
                                                'ssl' => array(
                                                    'verify_peer' => false,
                                                    'verify_peer_name' => false,
                                                    'allow_self_signed' => true
                                                )
                                            );
                                 
                                        $mail->SMTPSecure = 'ssl'; 
                                        $mail->Host = 'smtppro.zoho.com';
                                        $mail->Port = 465;  
                                        $mail->Username = 'support@threefoldinvest.com';
                                        $mail->Password = 'Threefold001@';
                                        
                                        
                                        
                                            if($mail->Send()){
                                            //   echo '<script> alert("Success")</script>';
                                            }else{
                                                // echo '<script> alert("error")</script>';
                                            }
                                      sendemail_admin("$fname","$email","$amount");
                                     echo "<script>window.location='withdrawal-order'</script>";
                                       
                                         
                                     }
                                        else{
                                        $error = true;
                                        $errorposter =  '<div class="alert alert-warning alert-dismissible " role="alert">
                                        Something went wrong! try again
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                                    }
                                
                            }
                            
                        }
                        
                   
                
                
                 }
                 else if(isset($_POST['depbtccash'])){
                      $amount = htmlspecialchars($_POST['amount']);
                      $gateway = htmlspecialchars($_POST['gateway']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $bcashtransid = htmlspecialchars($_POST['bcashtransid']);
                      $date = date('Y-m-d');
                      $tid = $random;
                        
                        $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $interestbalance = $row['balance'];
                            
                             if($amount>$interestbalance){
                                
                                 $error = true;
                                        $errorposter =  '<div class="alert alert-danger alert-dismissible " role="alert">
                                        Insufficient fund in your Wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                  $q = "INSERT INTO withdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                 VALUES ('$userid','$amount','$tid','BITCOIN CASH','$date','Pending','$bcashtransid')";
                                $result  = mysqli_query($con,$q);
                                if($result){
                            
                                        $to = $email;
                                      $from = 'support@threefoldinvest.com';
                                    $fromName = 'ThreeFoldInvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Withdrawal Order';
                                        
                                        $body = "<html><head><title>Withdrawal Order</title></head>
                                                          <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                     <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                   
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  BITCOIN CASH</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                   
                                                    <p>Sincerely</p>
                                                      <p>ThreeFoldInvest</p>
                                                            <center><p><a href='https://www.threefoldinvest.com'>visit our website</a> | <a href='https://threefoldinvest.com/login'>log in to your account</a> | <a href='https://www.threefoldinvest.com/contact'>get support </a></p>
                                                            <p>Copyright © ThreeFoldInvest, All rights reserved. </p>
                                                            </center>
                                                    
                                                   </div>
                                                   </div>
                                                   </body>
                                                   </html>";
                                        $mail ->Body = $body;
                                        $mail->IsHTML(true);
                                        $mail->IsSMTP();
                                        $mail->SMTPAuth = true; 
                                        $mail->SMTPOptions = array(
                                                'ssl' => array(
                                                    'verify_peer' => false,
                                                    'verify_peer_name' => false,
                                                    'allow_self_signed' => true
                                                )
                                            );
                                 
                                       $mail->SMTPSecure = 'ssl'; 
                                        $mail->Host = 'smtppro.zoho.com';
                                        $mail->Port = 465;  
                                        $mail->Username = 'support@threefoldinvest.com';
                                        $mail->Password = 'Threefold001@';
                                        
                                        
                                            if($mail->Send()){
                                            //   echo '<script> alert("Success")</script>';
                                            }else{
                                                // echo '<script> alert("error")</script>';
                                            }
                                      sendemail_admin("$fname","$email","$amount");
                                     echo "<script>window.location='withdrawal-order'</script>";
                                       
                                         
                                     }
                                        else{
                                        $error = true;
                                        $errorposter =  '<div class="alert alert-warning alert-dismissible " role="alert">
                                        Something went wrong! try again
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                                    }
                                
                            }
                            
                        }
                        
                      
             
                
                
                 }
                 else if(isset($_POST['depsolana'])){
                      $amount = htmlspecialchars($_POST['amount']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $soltransid = htmlspecialchars($_POST['soltransid']);
                      $date = date('Y-m-d');
                        $tid = $random;
                      
                           $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $interestbalance = $row['balance'];
                            
                             if($amount>$interestbalance){
                                
                                 $error = true;
                                        $errorposter =  '<div class="alert alert-danger alert-dismissible " role="alert">
                                        Insufficient fund in your interest wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                $q = "INSERT INTO withdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                VALUES ('$userid','$amount','$tid','SOLANA','$date','Pending','$soltransid')";
                                    $result  = mysqli_query($con,$q);
                                    if($result){
                                        
                                        $to = $email;
                                        $from = 'support@threefoldinvest.com';
                                        $fromName = 'threefoldinvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Withdrawal Order';
                                      
                                        $body = "<html><head><title>Withdrawal Order</title></head>
                                                    <body  style='background:#aeccc1'>
                                                 
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;background:#fff'> 
                                                  <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                   
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  SOLANA</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                   
                                                   <p>Sincerely,</p>
                                                   <p>threefoldinvest.</p>
                                                   
                                                   <center><p><a href='https://www.threefoldinvest.com'>visit our website</a> | <a href='https://www.threefoldinvest.com/login'>log in to your account</a> | <a href='https://www.threefoldinvest.com/contact'>get support </a></p>
                                                   <p>Copyright © threefoldinvest, All rights reserved. </p>
                                                   </center>
                                                    
                                                   </div>
                                                   </div>
                                                   </body>
                                                   </html>";
                                         $mail ->Body = $body;
                                        $mail->IsHTML(true);
                                        $mail->IsSMTP();
                                        $mail->SMTPAuth = true; 
                                        $mail->SMTPOptions = array(
                                                'ssl' => array(
                                                    'verify_peer' => false,
                                                    'verify_peer_name' => false,
                                                    'allow_self_signed' => true
                                                )
                                            );
                                 
                                         $mail->SMTPSecure = 'ssl'; 
                                        $mail->Host = 'smtppro.zoho.com';
                                        $mail->Port = 465;  
                                        $mail->Username = 'support@threefoldinvest.com';
                                        $mail->Password = 'threefoldinvestv1@'; 
                                        
                                        
                                        
                                            if($mail->Send()){
                                            //   echo '<script> alert("Success")</script>';
                                            }else{
                                                // echo '<script> alert("error")</script>';
                                            }
                                     
                                     echo "<script>window.location='withdrawal-order'</script>";
                                       
                                         
                                     }
                                        else{
                                            echo mysqli_error($con);
                                        $error = true;
                                        $errorposter =  '<div class="alert alert-warning alert-dismissible " role="alert">
                                        Something went wrong! try again
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                                    }
                                
                            }
                            
                        }
                        
                   
                
                
                 }
                 else if(isset($_POST['deppm'])){
                      $amount = htmlspecialchars($_POST['amount']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $pmtransid = htmlspecialchars($_POST['pmtransid']);
                      $date = date('Y-m-d');
                      $tid = $random;
                      
                           $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $interestbalance = $row['balance'];
                            
                             if($amount>$interestbalance){
                                 $error = true;
                                        $errorposter =  '<div class="alert alert-warning alert-dismissible " role="alert">
                                        Insufficient fund in your interest wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO withdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','PERFECT MONEY','$date','Pending','$pmtransid')";
                                    $result  = mysqli_query($con,$q);
                                    if($result){
                            
                                        $to = $email;
                                        $from = 'support@threefoldinvest.com';
                                        $fromName = 'threefoldinvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Withdrawal Order';
                                       
                                        $body = "<html><head><title>Withdrawal Order</title></head>
                                                    <body  style='background:#aeccc1'>
                                                 
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;background:#fff'> 
                                                  <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                   
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  PERFECT MONEY</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                   
                                                   <p>Sincerely,</p>
                                                   <p>threefoldinvest.</p>
                                                   
                                                   <center><p><a href='https://www.threefoldinvest.com'>visit our website</a> | <a href='https://www.threefoldinvest.com/login'>log in to your account</a> | <a href='https://www.threefoldinvest.com/contact'>get support </a></p>
                                                   <p>Copyright © threefoldinvest, All rights reserved. </p>
                                                   </center>
                                                    
                                                   </div>
                                                   </div>
                                                   </body>
                                                   </html>";
                                          $mail ->Body = $body;
                                        $mail->IsHTML(true);
                                        $mail->IsSMTP();
                                        $mail->SMTPAuth = true; 
                                        $mail->SMTPOptions = array(
                                                'ssl' => array(
                                                    'verify_peer' => false,
                                                    'verify_peer_name' => false,
                                                    'allow_self_signed' => true
                                                )
                                            );
                                 
                                         $mail->SMTPSecure = 'ssl'; 
                                        $mail->Host = 'smtppro.zoho.com';
                                        $mail->Port = 465;  
                                        $mail->Username = 'support@threefoldinvest.com';
                                        $mail->Password = 'threefoldinvestv1@'; 
                                        
                                        
                                        
                                            if($mail->Send()){
                                            //   echo '<script> alert("Success")</script>';
                                            }else{
                                                // echo '<script> alert("error")</script>';
                                            }
                                     
                                     echo "<script>window.location='withdrawal-order'</script>";
                                       
                                         
                                     }
                                        else{
                                        $error = true;
                                        $errorposter =  '<div class="alert alert-warning alert-dismissible " role="alert">
                                        Something went wrong! try again
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                                    }
                                
                            }
                            
                        }
                      
              
                
                
                 }
                 else if(isset($_POST['depUSDT'])){
                      $amount = htmlspecialchars($_POST['amount']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $USDTtransid = htmlspecialchars($_POST['USDTtransid']);
                      $date = date('Y-m-d');
                      $tid = $random;
                      
                           $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $interestbalance = $row['balance'];
                            
                             if($amount>$interestbalance){
                                 $error = true;
                                        $errorposter =  '<div class="alert alert-warning alert-dismissible " role="alert">
                                        Insufficient fund in your Wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO withdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','USDT Tether','$date','Pending','$USDTtransid')";
                                    $result  = mysqli_query($con,$q);
                                    if($result){
                            
                                        $to = $email;
                                       $from = 'support@threefoldinvest.com';
                                       $fromName = 'ThreeFoldInvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Withdrawal Order';
                                       
                                        $body = "<html><head><title>Withdrawal Order</title></head>
                                                      <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                     <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                   
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  USDT Tether</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                   
                                                     <p>Sincerely</p>
                                                      <p>ThreeFoldInvest</p>
                                                            <center><p><a href='https://www.threefoldinvest.com'>visit our website</a> | <a href='https://threefoldinvest.com/login'>log in to your account</a> | <a href='https://www.threefoldinvest.com/contact'>get support </a></p>
                                                            <p>Copyright © ThreeFoldInvest, All rights reserved. </p>
                                                            </center>
                                                    
                                                   </div>
                                                   </div>
                                                   </body>
                                                   </html>";
                                          $mail ->Body = $body;
                                        $mail->IsHTML(true);
                                        $mail->IsSMTP();
                                        $mail->SMTPAuth = true; 
                                        $mail->SMTPOptions = array(
                                                'ssl' => array(
                                                    'verify_peer' => false,
                                                    'verify_peer_name' => false,
                                                    'allow_self_signed' => true
                                                )
                                            );
                                 
                                       $mail->SMTPSecure = 'ssl'; 
                                        $mail->Host = 'smtppro.zoho.com';
                                        $mail->Port = 465;  
                                        $mail->Username = 'support@threefoldinvest.com';
                                        $mail->Password = 'Threefold001@';
                                        
                                        
                                        
                                            if($mail->Send()){
                                            //   echo '<script> alert("Success")</script>';
                                            }else{
                                                // echo '<script> alert("error")</script>';
                                            }
                                      sendemail_admin("$fname","$email","$amount");
                                     echo "<script>window.location='withdrawal-order'</script>";
                                       
                                         
                                     }
                                        else{
                                        $error = true;
                                        $errorposter =  '<div class="alert alert-warning alert-dismissible " role="alert">
                                        Something went wrong! try again
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                                    }
                                
                            }
                            
                        }
                      
              
                
                
                 } else if(isset($_POST['depLITE'])){
                      $amount = htmlspecialchars($_POST['amount']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $LITEtransid = htmlspecialchars($_POST['LITECOINtransid']);
                      $date = date('Y-m-d');
                      $tid = $random;
                      
                           $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $interestbalance = $row['balance'];
                            
                             if($amount>$interestbalance){
                                 $error = true;
                                        $errorposter =  '<div class="alert alert-warning alert-dismissible " role="alert">
                                        Insufficient fund in your Wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO withdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','LITECOIN','$date','Pending','$LITEtransid')";
                                    $result  = mysqli_query($con,$q);
                                    if($result){
                            
                                        $to = $email;
                                       $from = 'support@threefoldinvest.com';
                                       $fromName = 'ThreeFoldInvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Withdrawal Order';
                                       
                                        $body = "<html><head><title>Withdrawal Order</title></head>
                                                      <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                     <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                   
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  LITECOIN</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                   
                                                     <p>Sincerely</p>
                                                      <p>ThreeFoldInvest</p>
                                                            <center><p><a href='https://www.threefoldinvest.com'>visit our website</a> | <a href='https://threefoldinvest.com/login'>log in to your account</a> | <a href='https://www.threefoldinvest.com/contact'>get support </a></p>
                                                            <p>Copyright © ThreeFoldInvest, All rights reserved. </p>
                                                            </center>
                                                    
                                                   </div>
                                                   </div>
                                                   </body>
                                                   </html>";
                                          $mail ->Body = $body;
                                        $mail->IsHTML(true);
                                        $mail->IsSMTP();
                                        $mail->SMTPAuth = true; 
                                        $mail->SMTPOptions = array(
                                                'ssl' => array(
                                                    'verify_peer' => false,
                                                    'verify_peer_name' => false,
                                                    'allow_self_signed' => true
                                                )
                                            );
                                 
                                       $mail->SMTPSecure = 'ssl'; 
                                        $mail->Host = 'smtppro.zoho.com';
                                        $mail->Port = 465;  
                                        $mail->Username = 'support@threefoldinvest.com';
                                        $mail->Password = 'Threefold001@';
                                        
                                        
                                        
                                            if($mail->Send()){
                                            //   echo '<script> alert("Success")</script>';
                                            }else{
                                                // echo '<script> alert("error")</script>';
                                            }
                                      sendemail_admin("$fname","$email","$amount");
                                     echo "<script>window.location='withdrawal-order'</script>";
                                       
                                         
                                     }
                                        else{
                                        $error = true;
                                        $errorposter =  '<div class="alert alert-warning alert-dismissible " role="alert">
                                        Something went wrong! try again
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                                    }
                                
                            }
                            
                        }
                      
              
                
                
                 }
                 else if(isset($_POST['depUSDC'])){
                      $amount = htmlspecialchars($_POST['amount']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $USDCtransid = htmlspecialchars($_POST['USDCtransid']);
                      $date = date('Y-m-d');
                      $tid = $random;
                      
                           $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $interestbalance = $row['balance'];
                            
                             if($amount>$interestbalance){
                                 $error = true;
                                        $errorposter =  '<div class="alert alert-warning alert-dismissible " role="alert">
                                        Insufficient fund in your Wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO withdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','USD COIN','$date','Pending','$USDCtransid')";
                                    $result  = mysqli_query($con,$q);
                                    if($result){
                            
                                        $to = $email;
                                       $from = 'support@threefoldinvest.com';
                                       $fromName = 'ThreeFoldInvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Withdrawal Order';
                                       
                                        $body = "<html><head><title>Withdrawal Order</title></head>
                                                      <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                     <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                   
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  USD COIN</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                   
                                                     <p>Sincerely</p>
                                                      <p>ThreeFoldInvest</p>
                                                            <center><p><a href='https://www.threefoldinvest.com'>visit our website</a> | <a href='https://threefoldinvest.com/login'>log in to your account</a> | <a href='https://www.threefoldinvest.com/contact'>get support </a></p>
                                                            <p>Copyright © ThreeFoldInvest, All rights reserved. </p>
                                                            </center>
                                                    
                                                   </div>
                                                   </div>
                                                   </body>
                                                   </html>";
                                          $mail ->Body = $body;
                                        $mail->IsHTML(true);
                                        $mail->IsSMTP();
                                        $mail->SMTPAuth = true; 
                                        $mail->SMTPOptions = array(
                                                'ssl' => array(
                                                    'verify_peer' => false,
                                                    'verify_peer_name' => false,
                                                    'allow_self_signed' => true
                                                )
                                            );
                                 
                                       $mail->SMTPSecure = 'ssl'; 
                                        $mail->Host = 'smtppro.zoho.com';
                                        $mail->Port = 465;  
                                        $mail->Username = 'support@threefoldinvest.com';
                                        $mail->Password = 'Threefold001@';
                                        
                                        
                                        
                                            if($mail->Send()){
                                            //   echo '<script> alert("Success")</script>';
                                            }else{
                                                // echo '<script> alert("error")</script>';
                                            }
                                      sendemail_admin("$fname","$email","$amount");
                                     echo "<script>window.location='withdrawal-order'</script>";
                                       
                                         
                                     }
                                        else{
                                        $error = true;
                                        $errorposter =  '<div class="alert alert-warning alert-dismissible " role="alert">
                                        Something went wrong! try again
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                                    }
                                
                            }
                            
                        }
                      
              
                
                
                 }
                 else if(isset($_POST['depBNB'])){
                      $amount = htmlspecialchars($_POST['amount']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $BNBtransid = htmlspecialchars($_POST['BNBtransid']);
                      $date = date('Y-m-d');
                      $tid = $random;
                      
                           $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $interestbalance = $row['balance'];
                            
                             if($amount>$interestbalance){
                                 $error = true;
                                        $errorposter =  '<div class="alert alert-warning alert-dismissible " role="alert">
                                        Insufficient fund in your Wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO withdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','BNB Binance coin','$date','Pending','$BNBtransid')";
                                    $result  = mysqli_query($con,$q);
                                    if($result){
                            
                                        $to = $email;
                                        $from = 'support@threefoldinvest.com';
                                        $fromName = 'threefoldinvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Withdrawal Order';
                                       
                                        $body = "<html><head><title>Withdrawal Order</title></head>
                                                    <body  style='background:#aeccc1'>
                                                 
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;background:#fff'> 
                                                  <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                   
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  BNB Binance Coin</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                   
                                                   <p>Sincerely,</p>
                                                   <p>threefoldinvest.</p>
                                                   
                                                   <center><p><a href='https://www.threefoldinvest.com'>visit our website</a> | <a href='https://www.threefoldinvest.com/login'>log in to your account</a> | <a href='https://www.threefoldinvest.com/contact'>get support </a></p>
                                                   <p>Copyright © threefoldinvest, All rights reserved. </p>
                                                   </center>
                                                    
                                                   </div>
                                                   </div>
                                                   </body>
                                                   </html>";
                                          $mail ->Body = $body;
                                        $mail->IsHTML(true);
                                        $mail->IsSMTP();
                                        $mail->SMTPAuth = true; 
                                        $mail->SMTPOptions = array(
                                                'ssl' => array(
                                                    'verify_peer' => false,
                                                    'verify_peer_name' => false,
                                                    'allow_self_signed' => true
                                                )
                                            );
                                 
                                         $mail->SMTPSecure = 'ssl'; 
                                        $mail->Host = 'smtppro.zoho.com';
                                        $mail->Port = 465;  
                                        $mail->Username = 'support@threefoldinvest.com';
                                        $mail->Password = 'threefoldinvestv1@'; 
                                        
                                        
                                        
                                            if($mail->Send()){
                                            //   echo '<script> alert("Success")</script>';
                                            }else{
                                                // echo '<script> alert("error")</script>';
                                            }
                                     
                                     echo "<script>window.location='withdrawal-order'</script>";
                                       
                                         
                                     }
                                        else{
                                        $error = true;
                                        $errorposter =  '<div class="alert alert-warning alert-dismissible " role="alert">
                                        Something went wrong! try again
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                                    }
                                
                            }
                            
                        }
                      
              
                
                
                 }
                
                
                
                ?>
                 <?php
                 
                
                
                                  function sendemail_admin($fname,$email,$amount){
                                 
                                    $to = 'threefoldinvest@gmail.com';
                                    $from = 'support@threefoldinvest.com';
                                    $fromName = 'ThreeFoldInvest';
                                    $mail = new PHPMailer();
                                    $mail->CharSet =  "utf-8";
                                    $mail ->setFrom($from, $fromName);
                                    $mail ->addAddress($to);
                                    // $mail ->addAttachment($file);
                                    $mail ->Subject = 'User Withdrawal Notification';
                                    // $mail ->Body = $body;
                                    $mail->Body = "<html><head><title>User Withdrawal Notification</title></head>
                                                <body  style='background:#aeccc1'>
                                                                             
                                                <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                             <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                               <div style='padding:12px;'>
                                               <p>Hi Admin,  </p>
                                               <p>$fname with email: $email,  has sent a Withdrawal order of <b>$$amount</b>,<br> kindly attend to it.</p>
                                            
                                              
                                              <p>Sincerely</p>
                                              <p>ThreeFoldInvest</p>
                                               
                                               <center><p><a href='https://www.threefoldinvest.com'>visit our website</a> | <a href='https://threefoldinvest.com/login'>log in to your account</a> | <a href='https://www.threefoldinvest.com/contact'>get support </a></p>
                                                    <p>Copyright © threefoldinvest, All rights reserved. </p>
                                                    </center>
                                                
                                               </div>
                                               </div>
                                               </body>
                                               </html>";
                                    $mail->IsHTML(true);
                                    $mail->IsSMTP();
                                    $mail->SMTPAuth = true; 
                                    $mail->SMTPOptions = array(
                                            'ssl' => array(
                                                'verify_peer' => false,
                                                'verify_peer_name' => false,
                                                'allow_self_signed' => true
                                            )
                                        );
                             
                                   
                                     $mail->SMTPSecure = 'ssl'; 
                                    $mail->Host = 'smtppro.zoho.com';
                                    $mail->Port = 465;  
                                    $mail->Username = 'support@threefoldinvest.com';
                                    $mail->Password = 'Threefold001@'; 
                                    
                                    
                                        if($mail->Send()){
                                        //   echo '<script> alert("Success")</script>';
                                        
                                        //   echo json_encode(
                                        //         array(
                                        //             "status" => "success",
                                        //             "code" => "201",
                                        //             "message" => "verification mail sent!"
                                        //         )
                                        //     );
                                        }else{
                                            // echo '<script> alert("error")</script>';
                                               echo json_encode(
                                                array(
                                                    "status" => "error",
                                                    "code" => 400,
                                                    "message" => "error sending verification mail!"
                                                )
                                            );
                                        }
                                 
                             }  
                
                ?>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- MAIN CONTENT GOES HERE -->
         
                          <div class="container-fluid">
                     <div  class="d-flex align-items-center justify-content-center h-100 mb-4 mt-4">
                        <a href="#" class="btn btn-dark  btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="ti-wallet"></i>
                            </span>
                            <span class="text">Withdrawal Process</span>
                        </a>
                        </div>
                        <div class="container py-5">
                                
                        <div class="p-5 bg-white rounded shadow mb-5">
                            <span> <?php if(isset($errorpost)) echo $errorpost;  ?>  </span>
	                        <span> <?php if(isset($errorposter)) echo $errorposter;  ?>  </span>
	                          <div  class="d-flex align-items-center justify-content-center h-100 mb-4 mt-4">
                                    <a href="withdrawal" class="btn btn-dark  btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="ti-home"></i>
                                        </span>
                                        <span class="text">Back to Withdrawal</span>
                                    </a>
                                    </div>
                               <form>
                                   
                                      <label><b>Wallet Balance</b></label>
                                    <input type="text" class="form-control" placeholder="" aria-label="First name" value=" <?php   echo '$'.number_format($balance, 2, '.', ','); ?>" readonly>
                                  
                               </form>
                          <?php
                          if(isset($_POST['subbtc'])){
                               $btc = htmlspecialchars($_POST['btc']);

                               ?>
                                   <form action="" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="btcgate" value="<?php echo $btc; ?>" readonly class="form-control" >
                                     <b>Limit:</b> 5 - 100000 USD 
                                     <input type="text" name="bnumber" id="bnumber" value="" readonly class="form-control" placeholder="Value in BITCOIN">
                                     <label for="" class=""><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000" name="amount" id="amount"  class="form-control" placeholder="Enter Amount" required>
                                     <label for="" class=" mt-2"><b>Enter Your Bitcoin Address for Payment</b></label>
                                     <input type="text"  name="btctransid"  id="btctransid" class="form-control" placeholder="" required>
                                     <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                        <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="depbtc">WITHDRAW</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subeth'])){
                               $eth = htmlspecialchars($_POST['eth']);
                               
                                    ?>
                                   <form action="" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="ether" value="<?php echo $eth; ?>" readonly class="form-control" >
                                      <b>Limit:</b> 5 - 100000 USD 
                                       <input type="text" name="eth" id="eth" readonly class="form-control" placeholder="Value in Ethereum">
                                        <label for="" class=""><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000" name="usd" id="usd"  class="currencyField form-control mt-2" placeholder="Enter Amount" required>
                                           <label for="" class=" mt-2"><b>Enter Your Ethereum Address for Payment</b></label>
                                      <input type="text"  name="ethtransid"  id="ethtransid" class="form-control mt-2" placeholder="" required>
                                        <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="depeth">WITHDRAW</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subbtcash'])){
                               $btcash = htmlspecialchars($_POST['btcash']);
                               
                                    ?>
                                   <form action="" id="form-data"  method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="btcash" value="<?php echo $btcash; ?>" readonly class="form-control" >
                                     <p> <b>Limit:</b> 5 - 100000 USD  </p>
                                     <label for="" class=""><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000" name="amount" id="amount" class="form-control" placeholder="Enter Amount" required>
                                        <label for="" class=" mt-2"><b>Enter Your Bitcoin Cash Address for Payment</b></label>
                                      <input type="text"  name="bcashtransid"  id="bcashtransid" class="form-control mt-2" placeholder="" required>
                                        <input type="hidden" name="userid"  id="userid" value="<?php echo $userid ?>">
                                        <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="depbtccash">WITHDRAW</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subsolana'])){
                               $solana = htmlspecialchars($_POST['solana']);
                               
                                    ?>
                                   <form action="" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="solana" value="<?php echo $solana; ?>" readonly class="form-control" >
                                     <p> <b>Limit:</b> 5 - 100000 USD  </p>
                                     <label for="" class=""><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000" name="amount" id="amount" class="form-control" placeholder="Enter Amount" required>
                                           <label for="" class=" mt-2"><b>Enter Your Solana Address for Payment</b></label>
                                       <input type="text"  name="soltransid"  id="soltransid" class="form-control mt-2" placeholder="" required>
                                        <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="depsolana">WITHDRAW</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subpm'])){
                               $pm = htmlspecialchars($_POST['pm']);
                               
                                    ?>
                                   <form action="" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="pm" value="<?php echo $pm; ?>" readonly class="form-control" >
                                   
                                    <p>  <b>Limit:</b> 5 - 100000 USD </p>
                                      <label for="" class="mt-2"><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000" name="amount"  class="form-control" placeholder="Enter Amount" required>
                                        <label for="" class=" mt-2"><b>Enter Your Perfect Money Address for Payment</b></label>
                                       <input type="text"  name="pmtransid"  id="pmtransid" class="form-control mt-2" placeholder="" required>
                                        <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="deppm">WITHDRAW</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subUSDT'])){
                               $USDT = htmlspecialchars($_POST['USDT']);
                               
                                    ?>
                                   <form action="" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="USDT" value="<?php echo $USDT; ?>" readonly class="form-control" >
                                   
                                    <p>  <b>Limit:</b> 5 - 100000 USD </p>
                                      <label for="" class="mt-2"><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000" name="amount"  class="form-control" placeholder="Enter Amount" required>
                                        <label for="" class=" mt-2"><b>Enter Your USDT Tether Address for Payment</b></label>
                                       <input type="text"  name="USDTtransid"  id="USDTtransid" class="form-control mt-2" placeholder="" required>
                                        <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="depUSDT">WITHDRAW</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subLITE'])){
                               $LITECOIN = htmlspecialchars($_POST['LITECOIN']);
                               
                                    ?>
                                   <form action="" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="LITECOIN" value="<?php echo $LITECOIN; ?>" readonly class="form-control" >
                                   
                                    <p>  <b>Limit:</b> 5 - 100000 USD </p>
                                      <label for="" class="mt-2"><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000" name="amount"  class="form-control" placeholder="Enter Amount" required>
                                        <label for="" class=" mt-2"><b>Enter Your LITECOIN Address for Payment</b></label>
                                       <input type="text"  name="LITECOINtransid"  id="LITECOINtransid" class="form-control mt-2" placeholder="" required>
                                        <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="depLITE">WITHDRAW</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subUSDC'])){
                               $USDC = htmlspecialchars($_POST['USDC']);
                               
                                    ?>
                                   <form action="" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="USDC" value="<?php echo $USDC; ?>" readonly class="form-control" >
                                   
                                    <p>  <b>Limit:</b> 5 - 100000 USD </p>
                                      <label for="" class="mt-2"><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000" name="amount"  class="form-control" placeholder="Enter Amount" required>
                                        <label for="" class=" mt-2"><b>Enter Your USD COIN Address for Payment</b></label>
                                       <input type="text"  name="USDCtransid"  id="USDCtransid" class="form-control mt-2" placeholder="" required>
                                        <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="depUSDC">WITHDRAW</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subBNB'])){
                               $BNB = htmlspecialchars($_POST['BNB']);
                               
                                    ?>
                                   <form action="" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="BNB" value="<?php echo $BNB; ?>" readonly class="form-control" >
                                   
                                    <p>  <b>Limit:</b> 5 - 100000 USD </p>
                                      <label for="" class="mt-2"><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000" name="amount"  class="form-control" placeholder="Enter Amount" required>
                                        <label for="" class=" mt-2"><b>Enter Your BNB Binance coin Address for Payment</b></label>
                                       <input type="text"  name="BNBTtransid"  id="BNBTtransid" class="form-control mt-2" placeholder="" required>
                                        <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="depBNB">WITHDRAW</button>
                                    </form>
                               <?php
                          }
                          
                          ?>
                          
                
                        </div>
                        </div>
                                                
                </div>
            </div>
        </div>
        <!-- main content area end -->
      <?php require "./assets/template/footer.php" ?>
      <script>
  $("#withdrawal").addClass('active');
  </script> 