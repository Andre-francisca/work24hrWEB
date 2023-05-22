<?php require "./assets/template/header.php" ?>
<?php require "./include/random.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
   <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php
                  $title = 'Deposit-process';
            ?>
                <?php
                 
                 require "./assets/template/title.php";
                 
                 

                
                ?>
                
       
            <!-- page title area end -->
            <?php


                use PHPMailer\PHPMailer\PHPMailer;
                require "PHPMailer/PHPMailer.php";
                require "PHPMailer/Exception.php";
                require "PHPMailer/SMTP.php";

                 $error = false;
                 if(isset($_POST['depbtc'])){
                      $amount = htmlspecialchars($_POST['amount']);
                      $btcgate = htmlspecialchars($_POST['gateway']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $btctransid = htmlspecialchars($_POST['btctransid']);
                      $date = date('Y-m-d');
                        $tid = $random;
                      
                      $q = "INSERT INTO deposit(userID,USD,BTC,ETH,transID,status,date,depositMethod,confirmID,USDT,BNB) 
                        VALUES ('$userid','$amount','0.0','0.0','$tid','Pending','$date','BITCOIN','$btctransid','0.0','0.0')";
                        $result  = mysqli_query($con,$q);
                        if($result){
                            
                           
                            
                            
                                        $to = $email;
                                         $from = 'support@threefoldinvest.com';
                                        $fromName = 'ThreeFoldInvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                         $mail->CharSet = 'UTF-8';
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Deposit Order';
                                        $body = "<html><head><title>Deposit Order</title></head>
                                                     <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                      <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Deposit Order and will be processing it shortly. The details of the order are below: </p>
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  BITCOIN</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                       <p>Sincerely</p>
                                                  <p>ThreeFoldInvest</p>
                                                        <center><p><a href='https://www.ThreeFoldInvest.com'>visit our website</a> | <a href='https://ThreeFoldInvest.com/login'>log in to your account</a> | <a href='https://www.ThreeFoldInvest.com/contact'>get support </a></p>
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
                                            
                                             echo "<script>window.location='confirmation'</script>";
                                            }else{
                                                // echo '<script> alert("error")</script>';
                                            }
                                     
                                    
                                        sendemail_admin("$fname","$email","$amount");
                                         
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
                 else if(isset($_POST['depeth'])){
                      $amount = htmlspecialchars($_POST['amount']);
                      $gateway = htmlspecialchars($_POST['gateway']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $ethtransid = htmlspecialchars($_POST['ethtransid']);
                      $date = date('Y-m-d');
                        $tid = $random;
                      
                      $q = "INSERT INTO deposit(userID,USD,BTC,ETH,transID,status,date,depositMethod,confirmID,USDT,BNB) 
                        VALUES ('$userid','$amount','0.0','0.0','$tid','Pending','$date','ETHEREUM','$ethtransid','0.0','0.0')";
                        $result  = mysqli_query($con,$q);
                        if($result){
                            
                                        $to = $email;
                                         $from = 'support@threefoldinvest.com';
                                        $fromName = 'ThreeFoldInvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Deposit Order';
                                        $body = "<html><head><title>Deposit Order</title></head>
                                                      <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                      <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Deposit Order and will be processing it shortly. The details of the order are below: </p>
                                                   
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  ETHEREUM</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                   
                                                      <p>Sincerely</p>
                                                  <p>ThreeFoldInvest</p>
                                                        <center><p><a href='https://www.ThreeFoldInvest.com'>visit our website</a> | <a href='https://ThreeFoldInvest.com/login'>log in to your account</a> | <a href='https://www.ThreeFoldInvest.com/contact'>get support </a></p>
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
                                             echo "<script>window.location='confirmation'</script>";
                                            }else{
                                                // echo '<script> alert("error")</script>';
                                            }
                                     
                                     
                                      sendemail_admin("$fname","$email","$amount");
                                    
                                       
                                         
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
                 else if(isset($_POST['depLITE'])){
                      $amount = htmlspecialchars($_POST['amount']);
                      $gateway = htmlspecialchars($_POST['gateway']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $LITEtransid = htmlspecialchars($_POST['LITEtransid']);
                      $date = date('Y-m-d');
                        $tid = $random;
                      
                      $q = "INSERT INTO deposit(userID,USD,BTC,ETH,transID,status,date,depositMethod,confirmID,USDT,BNB) 
                        VALUES ('$userid','$amount','0.0','0.0','$tid','Pending','$date','LITECOIN','$LITEtransid','0.0','0.0')";
                        $result  = mysqli_query($con,$q);
                        if($result){
                            
                                        $to = $email;
                                         $from = 'support@threefoldinvest.com';
                                        $fromName = 'ThreeFoldInvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Deposit Order';
                                        $body = "<html><head><title>Deposit Order</title></head>
                                                      <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                      <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Deposit Order and will be processing it shortly. The details of the order are below: </p>
                                                   
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  LITECOIN</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                   
                                                      <p>Sincerely</p>
                                                  <p>ThreeFoldInvest</p>
                                                        <center><p><a href='https://www.ThreeFoldInvest.com'>visit our website</a> | <a href='https://ThreeFoldInvest.com/login'>log in to your account</a> | <a href='https://www.ThreeFoldInvest.com/contact'>get support </a></p>
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
                                             echo "<script>window.location='confirmation'</script>";
                                            }else{
                                                // echo '<script> alert("error")</script>';
                                            }
                                     
                                    
                                        sendemail_admin("$fname","$email","$amount");
                                         
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
                 else if(isset($_POST['depBNB'])){
                      $amount = htmlspecialchars($_POST['amount']);
                      $gateway = htmlspecialchars($_POST['gateway']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $BNBtransid = htmlspecialchars($_POST['BNBtransid']);
                      $date = date('Y-m-d');
                        $tid = $random;
                      
                      $q = "INSERT INTO deposit(userID,USD,BTC,ETH,transID,status,date,depositMethod,confirmID,USDT,BNB) 
                        VALUES ('$userid','$amount','0.0','0.0','$tid','Pending','$date','BNB','$BNBtransid','0.0','0.0')";
                        $result  = mysqli_query($con,$q);
                        if($result){
                            
                                        $to = $email;
                                        $from = 'support@threefoldinvest.com';
                                        $fromName = 'ThreeFoldInvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Deposit Order';
                                        $body = "<html><head><title>Deposit Order</title></head>
                                                    <body  style='background:#ff5e15'>
                                                 
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;background:#fff'> 
                                                   <div style='background:#f8f8f8;color:#fff;'><img src='https://www.ThreeFoldInvest.com/images/ThreeFoldInvestlogo.png' style='padding:12px;' width='130px'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Deposit Order and will be processing it shortly. The details of the order are below: </p>
                                                   
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  BNB</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                   
                                                   <p>Sincerely,</p>
                                                   <p>ThreeFoldInvest.</p>
                                                   
                                                   <center><p><a href='https://www.ThreeFoldInvest.com'>visit our website</a> | <a href='https://www.ThreeFoldInvest.com/login'>log in to your account</a> | <a href='https://www.ThreeFoldInvest.com/contact'>get support </a></p>
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
                                        $mail->Password = 'ThreeFoldInvestv1@'; 
                                        
                                        
                                        
                                            if($mail->Send()){
                                            //   echo '<script> alert("Success")</script>';
                                             echo "<script>window.location='confirmation'</script>";
                                            }else{
                                                // echo '<script> alert("error")</script>';
                                            }
                                     
                                    
                                       
                                         
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
                 else if(isset($_POST['depbtccash'])){
                      $amount = htmlspecialchars($_POST['amount']);
                      $gateway = htmlspecialchars($_POST['gateway']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $bcashtransid = htmlspecialchars($_POST['bcashtransid']);
                      $date = date('Y-m-d');
                        $tid = $random;
                      
                      $q = "INSERT INTO deposit(userID,USD,BTC,ETH,transID,status,date,depositMethod,confirmID,USDT,BNB) 
                        VALUES ('$userid','$amount','0.0','0.0','$tid','Pending','$date','BITCOIN CASH','$bcashtransid','0.0','0.0')";
                        $result  = mysqli_query($con,$q);
                        if($result){
                            
                                        $to = $email;
                                          $from = 'support@threefoldinvest.com';
                                        $fromName = 'ThreeFoldInvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Deposit Order';
                                        
                                        $body = "<html><head><title>Deposit Order</title></head>
                                                      <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                      <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Deposit Order and will be processing it shortly. The details of the order are below: </p>
                                                   
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  BITCOIN CASH</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                   
                                                          <p>Sincerely</p>
                                                  <p>ThreeFoldInvest</p>
                                                        <center><p><a href='https://www.ThreeFoldInvest.com'>visit our website</a> | <a href='https://ThreeFoldInvest.com/login'>log in to your account</a> | <a href='https://www.ThreeFoldInvest.com/contact'>get support </a></p>
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
                                      
                                      
                                     echo "<script>window.location='confirmation'</script>";
                                       
                                         
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
                 else if(isset($_POST['depsolana'])){
                      $amount = htmlspecialchars($_POST['amount']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $soltransid = htmlspecialchars($_POST['soltransid']);
                      $date = date('Y-m-d');
                        $tid = $random;
                      
                      $q = "INSERT INTO deposit(userID,USD,BTC,ETH,transID,status,date,depositMethod,confirmID,USDT,BNB) 
                        VALUES ('$userid','$amount','0.0','0.0','$tid','Pending','$date','SOLANA','$soltransid','0.0','0.0')";
                        $result  = mysqli_query($con,$q);
                        if($result){
                            
                                        $to = $email;
                                        $from = 'support@threefoldinvest.com';
                                        $fromName = 'ThreeFoldInvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Deposit Order';
                                        
                                        $body = "<html><head><title>Deposit Order</title></head>
                                                    <body  style='background:#ff5e15'>
                                                 
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;background:#fff'> 
                                                   <div style='background:#f8f8f8;color:#fff;'><img src='https://www.ThreeFoldInvest.com/images/ThreeFoldInvestlogo.png' style='padding:12px;' width='130px'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Deposit Order and will be processing it shortly. The details of the order are below: </p>
                                                   
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  SOLANA</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                   
                                                   <p>Sincerely,</p>
                                                   <p>ThreeFoldInvest.</p>
                                                   
                                                   <center><p><a href='https://www.ThreeFoldInvest.com'>visit our website</a> | <a href='https://www.ThreeFoldInvest.com/login'>log in to your account</a> | <a href='https://www.ThreeFoldInvest.com/contact'>get support </a></p>
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
                                        $mail->Password = 'ThreeFoldInvestv1@'; 
                                        
                                        
                                        
                                            if($mail->Send()){
                                            //   echo '<script> alert("Success")</script>';
                                            }else{
                                                // echo '<script> alert("error")</script>';
                                            }
                                     
                                     echo "<script>window.location='confirmation'</script>";
                                       
                                         
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
                 else if(isset($_POST['depUSDT'])){
                      $amount = htmlspecialchars($_POST['amount']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $USDTtransid = htmlspecialchars($_POST['USDTtransid']);
                      $date = date('Y-m-d');
                        $tid = $random;
                      
                      $q = "INSERT INTO deposit(userID,USD,BTC,ETH,transID,status,date,depositMethod,confirmID,USDT,BNB) 
                        VALUES ('$userid','$amount','0.0','0.0','$tid','Pending','$date','USDT','$USDTtransid','0.0','0.0')";
                        $result  = mysqli_query($con,$q);
                        if($result){
                            
                                        $to = $email;
                                         $from = 'support@threefoldinvest.com';
                                        $fromName = 'ThreeFoldInvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                        // $mail ->addAttachment($file);    
                                        $mail ->Subject = 'Deposit Order';
                                        
                                        $body = "<html><head><title>Deposit Order</title></head>
                                                   <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                      <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Deposit Order and will be processing it shortly. The details of the order are below: </p>
                                                   
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  USDT</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                   
                                                    <p>Sincerely</p>
                                                  <p>ThreeFoldInvest</p>
                                                        <center><p><a href='https://www.ThreeFoldInvest.com'>visit our website</a> | <a href='https://ThreeFoldInvest.com/login'>log in to your account</a> | <a href='https://www.ThreeFoldInvest.com/contact'>get support </a></p>
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
                                     
                                     echo "<script>window.location='confirmation'</script>";
                                       
                                         
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
                 else if(isset($_POST['deppm'])){
                      $amount = htmlspecialchars($_POST['amount']);
                       $pmgate = htmlspecialchars($_POST['gateway']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $pmtransid = htmlspecialchars($_POST['pmtransid']);
                      $date = date('Y-m-d');
                      $tid = $random;
                      
                      $q = "INSERT INTO deposit(userID,USD,BTC,ETH,transID,status,date,depositMethod,confirmID,USDT,BNB) 
                        VALUES ('$userid','$amount','0.0','0.0','$tid','Pending','$date','PERFECT MONEY','$pmtransid','0.0','0.0')";
                        $result  = mysqli_query($con,$q);
                       if($result){
                            
                                        $to = $email;
                                         $from = 'support@threefoldinvest.com';
                                        $fromName = 'ThreeFoldInvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                         $mail->CharSet = 'UTF-8';
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Deposit Order';
                                        $body = "<html><head><title>Deposit Order</title></head>
                                                     <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                      <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Deposit Order and will be processing it shortly. The details of the order are below: </p>
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  PERFECT MONEY</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                       <p>Sincerely</p>
                                                  <p>ThreeFoldInvest</p>
                                                        <center><p><a href='https://www.ThreeFoldInvest.com'>visit our website</a> | <a href='https://ThreeFoldInvest.com/login'>log in to your account</a> | <a href='https://www.ThreeFoldInvest.com/contact'>get support </a></p>
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
                                            
                                             echo "<script>window.location='confirmation'</script>";
                                            }else{
                                                // echo '<script> alert("error")</script>';
                                            }
                                     
                                    
                                        sendemail_admin("$fname","$email","$amount");
                                         
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
                 else if(isset($_POST['depUSDC'])){
                      $amount = htmlspecialchars($_POST['amount']);
                     
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $USDCtransid = htmlspecialchars($_POST['USDCtransid']);
                      $date = date('Y-m-d');
                      $tid = $random;
                      
                      $q = "INSERT INTO deposit(userID,USD,BTC,ETH,transID,status,date,depositMethod,confirmID,USDT,BNB) 
                        VALUES ('$userid','$amount','0.0','0.0','$tid','Pending','$date','USD COIN','$USDCtransid','0.0','0.0')";
                        $result  = mysqli_query($con,$q);
                   if($result){
                            
                                        $to = $email;
                                         $from = 'support@threefoldinvest.com';
                                        $fromName = 'ThreeFoldInvest';
                                        $mail = new PHPMailer();
                                        $mail ->setFrom($from, $fromName);
                                        $mail ->addAddress($to);
                                         $mail->CharSet = 'UTF-8';
                                        // $mail ->addAttachment($file);
                                        $mail ->Subject = 'Deposit Order';
                                        $body = "<html><head><title>Deposit Order</title></head>
                                                     <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                      <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                   <div style='padding:12px;'>
                                                   <p><b>Dear</b> $fname, </p>
                                                   <p> We have received your Deposit Order and will be processing it shortly. The details of the order are below: </p>
                                                   <p><b>Order Number:</b> $tid </p>
                                                   <p><b>Amount:</b>  $$amount</p>
                                                   <p><b>Gateway:</b>  USD COIN</p>
                                                   <p><b>Date:</b> $date </p>
                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                       <p>Sincerely</p>
                                                  <p>ThreeFoldInvest</p>
                                                        <center><p><a href='https://www.ThreeFoldInvest.com'>visit our website</a> | <a href='https://ThreeFoldInvest.com/login'>log in to your account</a> | <a href='https://www.ThreeFoldInvest.com/contact'>get support </a></p>
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
                                            
                                             echo "<script>window.location='confirmation'</script>";
                                            }else{
                                                // echo '<script> alert("error")</script>';
                                            }
                                     
                                    
                                        sendemail_admin("$fname","$email","$amount");
                                         
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
                
                
                
                ?>
                                        <?php
                                             $sql = "SELECT * FROM admin";
                                             $result = mysqli_query($con, $sql);
                                             if($result)
                                             { 
                                                $row=mysqli_fetch_assoc($result);
                                                $btcaddress=$row['btcaddress']; 
                                                $ethereumaddress=$row['ethereumaddress']; 
                                                $perfectmoneyaddress=$row['perfectmoneyaddress']; 
                                                $solanaaddress=$row['solana']; 
                                                $bitcoincashaddress=$row['bitcoincash']; 
                                                $USDT1=$row['USDT']; 
                                                $BNB1=$row['BNB']; 
                                                $litecoin1=$row['litecoin']; 
                                                
                                                // echo "<script>alert('working')</script>";
                                             }
                                             else{
                                                //  echo mysqli_error($con);
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
                                    $mail ->Subject = 'User Deposit Notification';
                                    // $mail ->Body = $body;
                                    $mail->Body = "<html><head><title>User Deposit Notification</title></head>
                                                <body  style='background:#aeccc1'>
                                                                             
                                                <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                  <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                               <div style='padding:12px;'>
                                               <p>Hi Admin,  </p>
                                               <p>$fname with email: $email,  has sent a deposit order of <b>$$amount</b>,<br> kindly attend to it.</p>
                                            
                                              
                                              <p>Sincerely</p>
                                              <p>ThreeFoldInvest</p>
                                               
                                               <center><p><a href='https://www.ThreeFoldInvest.com'>visit our website</a> | <a href='https://ThreeFoldInvest.com/login'>log in to your account</a> | <a href='https://www.ThreeFoldInvest.com/contact'>get support </a></p>
                                                    <p>Copyright © ThreeFoldInvest, All rights reserved. </p>
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
                <div class="container-fluid">
                     <div  class="d-flex align-items-center justify-content-center h-100 mb-4 mt-4">
                        <a href="#" class="btn btn-dark  btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-wallet"></i>
                            </span>
                            <span class="text">Confirm Deposit</span>
                        </a>
                        </div>
                        <div class="container py-5">
                                    
                        <div class="p-5 bg-white rounded shadow mb-5">
                           
                                    <span> <?php if(isset($errorpost)) echo $errorpost;  ?>  </span>
	                                <span> <?php if(isset($errorposter)) echo $errorposter;  ?>  </span>
                          <?php
                          if(isset($_POST['subbtc'])){
                              
                               $amount = htmlspecialchars($_POST['amount']);
                               $btcgate = htmlspecialchars($_POST['btcgate']);

                               ?>
                               <p>You have requested <b class="text-success"><?php echo $amount.'USD'; ?></b>. Pay <b class="text-success"><?php echo $amount.'USD'; ?></b> for successful deposit.</p>
                               <b>Please follow the instruction below</b>
                               <br>
                               <p>Make your payment to the following Bitcoin Wallet Address</p>
                               <br>
                                  <div class="input-group mb-3">
                                <input type="text" id="foo" readonly class="form-control mr-2 " value="<?php echo $btcaddress ?>"   aria-describedby="button-addon2">
                                <button class="btn btn-dark" type="button"  text-sm data-clipboard-target="#foo"><small><i class="ti-clipboard" style="font-size:13px"></i>&nbsp;copy </small></button>
                                </div>
                                <p>Payment Transacton ID <b class="text-danger">*</b></p>
                                   <form action="" id="form-data" method="POST">
                                    <label for="" class="mt-2">Paste the transferred Bitcoin transaction ID</label>
                                     <input type="hidden" name="gateway" value="<?php echo $btcgate   ?>">
                                     <input type="hidden" name="amount" value="<?php echo $amount ?>">
                                      <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                    <input type="text"  name="btctransid"  id="btctransid" class="form-control mt-2" placeholder="" required>
                                    <input type="hidden" id="userid" name="userid" value="<?php echo $userid ?>">
                                    <button class="btn btn-success mt-2 btn-block" type="submit" name="depbtc">Pay Now</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subeth'])){
                               $eth = htmlspecialchars($_POST['eth']);
                                $amount = htmlspecialchars($_POST['usd']);
                               
                                 ?>
                               <p>You have requested <b class="text-success"><?php echo $amount.'USD'; ?></b>. Pay <b class="text-success"><?php echo $amount.'USD'; ?></b> for successful deposit.</p>
                               <b>Please follow the instruction below</b>
                               <p>Make your payment to the following Ethereum Wallet Address</p>
                                <div class="input-group mb-3">
                                <input type="text" id="foo" readonly class="form-control mr-2 " value="<?php echo $ethereumaddress ?>"   aria-describedby="button-addon2">
                                <button class="btn btn-dark " type="button"  text-sm data-clipboard-target="#foo"><small><i class="ti-clipboard" style="font-size:13px"></i>&nbsp;copy </small></button>
                                </div>
                                <p>Payment Transacton ID <b class="text-danger">*</b></p>
                                   <form action="" id="form-data" method="POST">
                                      <label for="" class="mt-2">Paste the transferred ethereum transaction ID</label>
                                       <input type="hidden" name="gateway" value="<?php echo $eth   ?>">
                                     <input type="hidden" name="amount" value="<?php echo $amount ?>">
                                     <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                    <input type="text"  name="ethtransid"  id="ethtransid" class="form-control mt-2" placeholder="" required>
                                    <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="depeth">Pay Now</button>
                                    </form>
                               <?php
                               
                                 
                          }
                          else if(isset($_POST['subbtcash'])){
                               $btcash = htmlspecialchars($_POST['btcash']);
                               $amount = htmlspecialchars($_POST['amount']);
                               
                                  
                                 ?>
                               <p>You have requested <b class="text-success"><?php echo $amount.'USD'; ?></b>. Pay <b class="text-success"><?php echo $amount.'USD'; ?></b> for successful deposit.</p>
                               <b>Please follow the instruction below</b>
                               <p>Make your payment to the following Bitcoin Cash Wallet Address</p>
                                  <div class="input-group mb-3">
                                <input type="text" id="foo" readonly class="form-control mr-2 " value="<?php echo $bitcoincashaddress ?>"   aria-describedby="button-addon2">
                                <button class="btn btn-dark" type="button"  text-sm data-clipboard-target="#foo"><small><i class="ti-clipboard" style="font-size:13px"></i>&nbsp;copy </small></button>
                                </div>
                                <p>Payment Transacton ID <b class="text-danger">*</b></p>
                                   <form action="" id="form-data" method="POST">
                                      <label for="" class="mt-2">Paste the transferred Bitcoin Cash transaction ID</label>
                                     <input type="hidden" name="gateway" value="<?php echo $btcash   ?>">
                                     <input type="hidden" name="amount" value="<?php echo $amount ?>">
                                     <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                    <input type="text"  name="bcashtransid"  id="bcashtransid" class="form-control mt-2" placeholder="" required>
                                    <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="depbtccash">Pay Now</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subsolana'])){
                               $solana = htmlspecialchars($_POST['solana']);
                               $amount = htmlspecialchars($_POST['amount']);
                               
                                   ?>
                               <p>You have requested <b class="text-success"><?php echo $amount.'USD'; ?></b>. Pay <b class="text-success"><?php echo $amount.'USD'; ?></b> for successful deposit.</p>
                               <b>Please follow the instruction below</b>
                               <p>Make your payment to the following Solana Wallet Address</p>
                                <div class="input-group mb-3">
                                <input type="text" id="foo" readonly class="form-control mr-2 " value="<?php echo $solanaaddress ?>"   aria-describedby="button-addon2">
                                <button class="btn btn-dark" type="button"  text-sm data-clipboard-target="#foo"><small><i class="ti-clipboard" style="font-size:13px"></i>&nbsp;copy </small></button>
                                </div>
                                <p>Payment Transacton ID <b class="text-danger">*</b></p>
                                   <form action="" id="form-data" method="POST">
                                      <label for="" class="mt-2">Paste the transferred Solana transaction ID</label>
                                     <input type="hidden" name="gateway" value="<?php echo $btcash   ?>">
                                     <input type="hidden" name="amount" value="<?php echo $amount ?>">
                                     <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                    <input type="text"  name="soltransid"  id="soltransid" class="form-control mt-2" placeholder="" required>
                                    <input type="hidden" id="userid" name="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="depsolana">Pay Now</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subpm'])){
                               $pm = htmlspecialchars($_POST['pm']);
                               $amount = htmlspecialchars($_POST['amount']);
                               
                                      ?>
                               <p>You have requested <b class="text-success"><?php echo $amount.'USD'; ?></b>. Pay <b class="text-success"><?php echo $amount.'USD'; ?></b> for successful deposit.</p>
                               <b>Please follow the instruction below</b>
                               <p>Make your payment to the following Perfect Money Wallet Address</p>
                                <div class="input-group mb-3">
                                <input type="text" id="foo" readonly class="form-control mr-2 " value="<?php echo $perfectmoneyaddress ?>"   aria-describedby="button-addon2">
                                 <button class="btn btn-dark" type="button"  text-sm data-clipboard-target="#foo"><small><i class="ti-clipboard" style="font-size:13px"></i>&nbsp;copy </small></button>
                                </div>
                                <p>Payment Transacton ID <b class="text-danger">*</b></p>
                                   <form action="" id="form-data" method="POST">
                                      <label for="" class="mt-2">Paste the transferred Perfect Money transaction ID</label>
                                     <input type="hidden" name="gateway" value="<?php echo $pm   ?>">
                                     <input type="hidden" name="amount" value="<?php echo $amount ?>">
                                     <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                    <input type="text"  name="pmtransid"  id="pmtransid" class="form-control mt-2" placeholder="" required>
                                    <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="deppm">Pay Now</button>
                                    </form>
                               <?php
                          }
                          
                          else if(isset($_POST['subUSDT'])){
                               $USDT = htmlspecialchars($_POST['USDT']);
                               $amount = htmlspecialchars($_POST['amount']);
                               
                                      ?>
                               <p>You have requested <b class="text-success"><?php echo $amount.'USD'; ?></b>. Pay <b class="text-success"><?php echo $amount.'USD'; ?></b> for successful deposit.</p>
                               <b>Please follow the instruction below</b>
                               <p>Make your payment to the following USDT(Tether) Wallet Address</p>
                                <div class="input-group mb-3">
                                <input type="text" id="foo" readonly class="form-control mr-2 " value="<?php echo $USDT1 ?>"   aria-describedby="button-addon2">
                                <button class="btn btn-dark" type="button"  text-sm data-clipboard-target="#foo"><small><i class="ti-clipboard" style="font-size:13px"></i>&nbsp;copy </small></button>
                                </div>
                                <p>Payment Transacton ID <b class="text-danger">*</b></p>
                                   <form action="" id="form-data" method="POST">
                                      <label for="" class="mt-2">Paste the transferred USDT(Tether) transaction ID</label>
                                     <input type="hidden" name="gateway" value="<?php echo $USDT   ?>">
                                     <input type="hidden" name="amount" value="<?php echo $amount ?>">
                                     <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                    <input type="text"  name="USDTtransid"  id="USDTtransid" class="form-control mt-2" placeholder="" required>
                                    <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="depUSDT">Pay Now</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subBNB'])){
                               $BNB = htmlspecialchars($_POST['BNB']);
                               $amount = htmlspecialchars($_POST['amount']);
                               
                                      ?>
                               <p>You have requested <b class="text-success"><?php echo $amount.'USD'; ?></b>. Pay <b class="text-success"><?php echo $amount.'USD'; ?></b> for successful deposit.</p>
                               <b>Please follow the instruction below</b>
                               <p>Make your payment to the following BNB (Bianance coin) Wallet Address</p>
                                <div class="input-group mb-3">
                                <input type="text"  readonly class="form-control mr-2 " value="<?php echo $BNB1 ?>"   aria-describedby="button-addon2">
                                <button class="btn btn-dark" type="button"  text-sm data-clipboard-target="#foo"><small><i class="fas fa-copy"></i>&nbsp;copy </small></button>
                                </div>
                                <p>Payment Transacton ID <b class="text-danger">*</b></p>
                                   <form action="" id="form-data" method="POST">
                                      <label for="" class="mt-2">Paste the transferred BNB transaction ID</label>
                                     <input type="hidden" name="gateway" value="<?php echo $BNB   ?>">
                                     <input type="hidden" name="amount" value="<?php echo $amount ?>">
                                     <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                    <input type="text"  name="BNBtransid"  id="BNBtransid" class="form-control mt-2" placeholder="" required>
                                    <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="depBNB">Pay Now</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subLITE'])){
                               $LITE = htmlspecialchars($_POST['LITE']);
                               $amount = htmlspecialchars($_POST['amount']);
                               
                                      ?>
                               <p>You have requested <b class="text-success"><?php echo $amount.'USD'; ?></b>. Pay <b class="text-success"><?php echo $amount.'USD'; ?></b> for successful deposit.</p>
                               <b>Please follow the instruction below</b>
                               <p>Make your payment to the following LITECOIN  Wallet Address</p>
                                <div class="input-group mb-3">
                               <input type="text" id="foo" readonly class="form-control mr-2 " value="<?php echo $litecoin1 ?>"   aria-describedby="button-addon2">
                                <button class="btn btn-dark " type="button"  text-sm data-clipboard-target="#foo"><small><i class="ti-clipboard" style="font-size:13px"></i>&nbsp;copy </small></button>
                                </div>
                                <p>Payment Transacton ID <b class="text-danger">*</b></p>
                                   <form action="" id="form-data" method="POST">
                                      <label for="" class="mt-2">Paste the transferred LITECOIN transaction ID</label>
                                     <input type="hidden" name="gateway" value="<?php echo $LITE   ?>">
                                     <input type="hidden" name="amount" value="<?php echo $amount ?>">
                                     <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                    <input type="text"  name="LITEtransid"  id="LITEtransid" class="form-control mt-2" placeholder="" required>
                                    <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="depLITE">Pay Now</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subUSDC'])){
                               $USDC = htmlspecialchars($_POST['USDC']);
                               $amount = htmlspecialchars($_POST['amount']);
                               
                                      ?>
                               <p>You have requested <b class="text-success"><?php echo $amount.'USD'; ?></b>. Pay <b class="text-success"><?php echo $amount.'USD'; ?></b> for successful deposit.</p>
                               <b>Please follow the instruction below</b>
                               <p>Make your payment to the following USD COIN  Wallet Address</p>
                                <div class="input-group mb-3">
                                  <input type="text" id="foo" readonly class="form-control mr-2 " value="<?php echo $BNB1 ?>"   aria-describedby="button-addon2">
                                <button class="btn btn-dark " type="button"  text-sm data-clipboard-target="#foo"><small><i class="ti-clipboard" style="font-size:13px"></i>&nbsp;copy </small></button>
                                </div>
                                <p>Payment Transacton ID <b class="text-danger">*</b></p>
                                   <form action="" id="form-data" method="POST">
                                      <label for="" class="mt-2">Paste the transferred USD COIN transaction ID</label>
                                     <input type="hidden" name="gateway" value="<?php echo $USDC   ?>">
                                     <input type="hidden" name="amount" value="<?php echo $amount ?>">
                                     <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                    <input type="text"  name="USDCtransid"  id="USDCtransid" class="form-control mt-2" placeholder="" required>
                                    <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="depUSDC">Pay Now</button>
                                    </form>
                               <?php
                          }
                          
                          ?>
                          
                
                        </div>
                        </div>
                                                
                </div>
        </div>
        <!-- main content area end -->
      <?php require "./assets/template/footer.php" ?>
      <script>
  $("#deposit").addClass('active');
  </script> 
  <script>
var clipboard = new ClipboardJS('.btn');
clipboard.on('success', function(e) {
    console.info('Action:', e.action);
    console.info('Text:', e.text);
    console.info('Trigger:', e.trigger);
    
    alert("Copied the text: " + e.text);

    e.clearSelection();
});

clipboard.on('error', function(e) {
    console.error('Action:', e.action);
    console.error('Trigger:', e.trigger);
});
</script>
