<?php require "./assets/template/header.php" ?>
<?php require "./include/random.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
   <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php
                  $title = 'referral-Withdrawal';
            ?>
                <?php
                 
                 require "./assets/template/title.php";
                
                ?>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- MAIN CONTENT GOES HERE -->
    <?php

                 use PHPMailer\PHPMailer\PHPMailer;
                require "PHPMailer/PHPMailer.php";
                require "PHPMailer/Exception.php";
                require "PHPMailer/SMTP.php";

?>
<?php



                if(isset($_POST['refsend'])){
                
                      $amount = mysqli_real_escape_string($con,$_POST['amount']);
                      $gateway = htmlspecialchars($_POST['gateway']);
                      $userid = htmlspecialchars($_POST['userid']);
                      $email = htmlspecialchars($_POST['email']);
                      $fname = htmlspecialchars($_POST['fname']);
                      $cryptoaddress = mysqli_real_escape_string($con,$_POST['cryptoaddress']);
                      $date = date('Y-m-d');
                      $tid = $random;
                      
                      
                      if($gateway === 'Bitcoin'){
                            
                         $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $refbonus = $row['refbonus'];
                            
                             if($amount>$refbonus){
                                
                                         $error = true;
                                        $errorposter =  '<div class="alert alert-danger alert-dismissible " role="alert">
                                        Insufficient fund in your Referral Bonus wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO referralWithdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','BITCOIN','$date','Pending','$cryptoaddress')";
                                        $result  = mysqli_query($con,$q);
                                        if($result){
                                            
                                                        $to = $email;
                                                         $from = 'support@threefoldinvest.com';
                                                        $fromName = 'ThreeFoldInvest';
                                                        $mail = new PHPMailer();
                                                        $mail ->setFrom($from, $fromName);
                                                        $mail ->addAddress($to);
                                                        // $mail ->addAttachment($file);
                                                        $mail ->Subject = 'Referral Bonus Withdrawal Order';
                                                        
                                                        $body = "<html><head><title>Referral Bonus Withdrawal Order</title></head>
                                                                     <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                       <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                                   <div style='padding:12px;'>
                                                                   <p><b>Dear</b> $fname, </p>
                                                                   <p> We have received your Referral Bonus Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                                   
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
                                                     echo "<script>window.location='./referral-withdrawal-order'</script>";
                                                       
                                                         
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
                        
                          
                      }else if($gateway === 'Ethereum'){
                               $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $refbonus = $row['refbonus'];
                            
                             if($amount>$refbonus){
                                
                                         $error = true;
                                        $errorposter =  '<div class="alert alert-danger alert-dismissible " role="alert">
                                        Insufficient fund in your Referral Bonus wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO referralWithdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','ETHEREUM','$date','Pending','$cryptoaddress')";
                                        $result  = mysqli_query($con,$q);
                                        if($result){
                                            
                                                        $to = $email;
                                                         $from = 'support@threefoldinvest.com';
                                                         $fromName = 'ThreeFoldInvest';
                                                        $mail = new PHPMailer();
                                                        $mail ->setFrom($from, $fromName);
                                                        $mail ->addAddress($to);
                                                        // $mail ->addAttachment($file);
                                                        $mail ->Subject = 'Referral Bonus Withdrawal Order';
                                                        
                                                        $body = "<html><head><title>Referral Bonus Withdrawal Order</title></head>
                                                                 <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                   <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                                   <div style='padding:12px;'>
                                                                   <p><b>Dear</b> $fname, </p>
                                                                   <p> We have received your Referral Bonus Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                                   
                                                                   <p><b>Order Number:</b> $tid </p>
                                                                   <p><b>Amount:</b>  $$amount</p>
                                                                   <p><b>Gateway:</b>  Ethereum</p>
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
                                                     echo "<script>window.location='./referral-withdrawal-order'</script>";
                                                       
                                                         
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
                      
                      else if($gateway === 'PM'){
                               $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $refbonus = $row['refbonus'];
                            
                             if($amount>$refbonus){
                                
                                         $error = true;
                                        $errorposter =  '<div class="alert alert-danger alert-dismissible " role="alert">
                                        Insufficient fund in your Referral Bonus wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO referralWithdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','PERFECT MONEY','$date','Pending','$cryptoaddress')";
                                        $result  = mysqli_query($con,$q);
                                        if($result){
                                            
                                                        $to = $email;
                                                         $from = 'support@threefoldinvest.com';
                                                         $fromName = 'ThreeFoldInvest';
                                                        $mail = new PHPMailer();
                                                        $mail ->setFrom($from, $fromName);
                                                        $mail ->addAddress($to);
                                                        // $mail ->addAttachment($file);
                                                        $mail ->Subject = 'Referral Bonus Withdrawal Order';
                                                        
                                                        $body = "<html><head><title>Referral Bonus Withdrawal Order</title></head>
                                                                 <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                   <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                                   <div style='padding:12px;'>
                                                                   <p><b>Dear</b> $fname, </p>
                                                                   <p> We have received your Referral Bonus Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                                   
                                                                   <p><b>Order Number:</b> $tid </p>
                                                                   <p><b>Amount:</b>  $$amount</p>
                                                                   <p><b>Gateway:</b>  PERFECT MONEY</p>
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
                                                     echo "<script>window.location='./referral-withdrawal-order'</script>";
                                                       
                                                         
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
                      else if($gateway === 'USDC'){
                               $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $refbonus = $row['refbonus'];
                            
                             if($amount>$refbonus){
                                
                                         $error = true;
                                        $errorposter =  '<div class="alert alert-danger alert-dismissible " role="alert">
                                        Insufficient fund in your Referral Bonus wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO referralWithdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','USD COIN','$date','Pending','$cryptoaddress')";
                                        $result  = mysqli_query($con,$q);
                                        if($result){
                                            
                                                        $to = $email;
                                                         $from = 'support@threefoldinvest.com';
                                                         $fromName = 'ThreeFoldInvest';
                                                        $mail = new PHPMailer();
                                                        $mail ->setFrom($from, $fromName);
                                                        $mail ->addAddress($to);
                                                        // $mail ->addAttachment($file);
                                                        $mail ->Subject = 'Referral Bonus Withdrawal Order';
                                                        
                                                        $body = "<html><head><title>Referral Bonus Withdrawal Order</title></head>
                                                                 <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                   <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                                   <div style='padding:12px;'>
                                                                   <p><b>Dear</b> $fname, </p>
                                                                   <p> We have received your Referral Bonus Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                                   
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
                                                     echo "<script>window.location='./referral-withdrawal-order'</script>";
                                                       
                                                         
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
                      else if($gateway === 'BitcoinCash'){
                               $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $refbonus = $row['refbonus'];
                            
                             if($amount>$refbonus){
                                
                                         $error = true;
                                        $errorposter =  '<div class="alert alert-danger alert-dismissible " role="alert">
                                        Insufficient fund in your Referral Bonus wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO referralWithdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','BITCOIN CASH','$date','Pending','$cryptoaddress')";
                                        $result  = mysqli_query($con,$q);
                                        if($result){
                                            
                                                        $to = $email;
                                                       $from = 'support@threefoldinvest.com';
                                                         $fromName = 'ThreeFoldInvest';
                                                        $mail = new PHPMailer();
                                                        $mail ->setFrom($from, $fromName);
                                                        $mail ->addAddress($to);
                                                        // $mail ->addAttachment($file);
                                                        $mail ->Subject = 'Referral Bonus Withdrawal Order';
                                                        
                                                        $body = "<html><head><title>Referral Bonus Withdrawal Order</title></head>
                                                                        <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                   <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                                   <div style='padding:12px;'>
                                                                   <p><b>Dear</b> $fname, </p>
                                                                   <p> We have received your Referral Bonus Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                                   
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
                                                     echo "<script>window.location='./referral-withdrawal-order'</script>";
                                                       
                                                         
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
                      
                      }else if($gateway === 'Solana'){
                               $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $refbonus = $row['refbonus'];
                            
                             if($amount>$refbonus){
                                
                                         $error = true;
                                        $errorposter =  '<div class="alert alert-danger alert-dismissible " role="alert">
                                        Insufficient fund in your Referral Bonus wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO referralWithdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','SOLANA','$date','Pending','$cryptoaddress')";
                                        $result  = mysqli_query($con,$q);
                                        if($result){
                                            
                                                        $to = $email;
                                                        $from = 'info@strancof.com';
                                                        $fromName = 'Strancof';
                                                        $mail = new PHPMailer();
                                                        $mail ->setFrom($from, $fromName);
                                                        $mail ->addAddress($to);
                                                        // $mail ->addAttachment($file);
                                                        $mail ->Subject = 'Referral Bonus Withdrawal Order';
                                                        
                                                        $body = "<html><head><title>Referral Bonus Withdrawal Order</title></head>
                                                                    <body  style='background:#aeccc1'>
                                                                 
                                                                    <div style='border:solid 1px gray;width:70%;margin:auto;background:#fff'> 
                                                                   <div style='background:#f8f8f8;color:#fff;'><img src='https://www.strancof.com/images/strancoflogo.png' style='padding:12px;' width='130px'> </div>
                                                                   <div style='padding:12px;'>
                                                                   <p><b>Dear</b> $fname, </p>
                                                                   <p> We have received your Referral Bonus Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                                   
                                                                   <p><b>Order Number:</b> $tid </p>
                                                                   <p><b>Amount:</b>  $$amount</p>
                                                                   <p><b>Gateway:</b>  SOLANA</p>
                                                                   <p><b>Date:</b> $date </p>
                                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                                   
                                                                   <p>Sincerely,</p>
                                                                   <p>Strancof.</p>
                                                                   
                                                                   <center><p><a href='https://www.strancof.com'>visit our website</a> | <a href='https://www.strancof.com/login'>log in to your account</a> | <a href='https://www.strancof.com/contact'>get support </a></p>
                                                                   <p>Copyright © Strancof, All rights reserved. </p>
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
                                                        $mail->Username = 'info@strancof.com';
                                                        $mail->Password = 'strancofv1@'; 
                                                        
                                                        
                                                        
                                                            if($mail->Send()){
                                                            //   echo '<script> alert("Success")</script>';
                                                            }else{
                                                                // echo '<script> alert("error")</script>';
                                                            }
                                                     
                                                     echo "<script>window.location='./referral-withdrawal-order'</script>";
                                                       
                                                         
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
                      
                      }else if($gateway === 'PerfectMoney'){
                               $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $refbonus = $row['refbonus'];
                            
                             if($amount>$refbonus){
                                
                                         $error = true;
                                        $errorposter =  '<div class="alert alert-danger alert-dismissible " role="alert">
                                        Insufficient fund in your Referral Bonus wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO referralWithdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','PERFECT MONEY','$date','Pending','$cryptoaddress')";
                                        $result  = mysqli_query($con,$q);
                                        if($result){
                                            
                                                        $to = $email;
                                                        $from = 'info@strancof.com';
                                                        $fromName = 'Strancof';
                                                        $mail = new PHPMailer();
                                                        $mail ->setFrom($from, $fromName);
                                                        $mail ->addAddress($to);
                                                        // $mail ->addAttachment($file);
                                                        $mail ->Subject = 'Referral Bonus Withdrawal Order';
                                                        
                                                        $body = "<html><head><title>Referral Bonus Withdrawal Order</title></head>
                                                                    <body  style='background:#aeccc1'>
                                                                 
                                                                    <div style='border:solid 1px gray;width:70%;margin:auto;background:#fff'> 
                                                                   <div style='background:#f8f8f8;color:#fff;'><img src='https://www.strancof.com/images/strancoflogo.png' style='padding:12px;' width='130px'> </div>
                                                                   <div style='padding:12px;'>
                                                                   <p><b>Dear</b> $fname, </p>
                                                                   <p> We have received your Referral Bonus Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                                   
                                                                   <p><b>Order Number:</b> $tid </p>
                                                                   <p><b>Amount:</b>  $$amount</p>
                                                                   <p><b>Gateway:</b>  PERFECT MONEY</p>
                                                                   <p><b>Date:</b> $date </p>
                                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                                   
                                                                   <p>Sincerely,</p>
                                                                   <p>Strancof.</p>
                                                                   
                                                                   <center><p><a href='https://www.strancof.com'>visit our website</a> | <a href='https://www.strancof.com/login'>log in to your account</a> | <a href='https://www.strancof.com/contact'>get support </a></p>
                                                                   <p>Copyright © Strancof, All rights reserved. </p>
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
                                                        $mail->Username = 'info@strancof.com';
                                                        $mail->Password = 'strancofv1@'; 
                                                        
                                                        
                                                        
                                                            if($mail->Send()){
                                                            //   echo '<script> alert("Success")</script>';
                                                            }else{
                                                                // echo '<script> alert("error")</script>';
                                                            }
                                                     
                                                     echo "<script>window.location='./referral-withdrawal-order'</script>";
                                                       
                                                         
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
                      
                      }else if($gateway === 'Tether'){
                               $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $refbonus = $row['refbonus'];
                            
                             if($amount>$refbonus){
                                
                                         $error = true;
                                        $errorposter =  '<div class="alert alert-danger alert-dismissible " role="alert">
                                        Insufficient fund in your Referral Bonus wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO referralWithdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','TETHER','$date','Pending','$cryptoaddress')";
                                        $result  = mysqli_query($con,$q);
                                        if($result){
                                            
                                                        $to = $email;
                                                            $from = 'support@threefoldinvest.com';
                                                             $fromName = 'ThreeFoldInvest';
                                                        $mail = new PHPMailer();
                                                        $mail ->setFrom($from, $fromName);
                                                        $mail ->addAddress($to);
                                                        // $mail ->addAttachment($file);
                                                        $mail ->Subject = 'Referral Bonus Withdrawal Order';
                                                        
                                                        $body = "<html><head><title>Referral Bonus Withdrawal Order</title></head>
                                                                    <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                   <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                                   <div style='padding:12px;'>
                                                                   <p><b>Dear</b> $fname, </p>
                                                                   <p> We have received your Referral Bonus Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                                   
                                                                   <p><b>Order Number:</b> $tid </p>
                                                                   <p><b>Amount:</b>  $$amount</p>
                                                                   <p><b>Gateway:</b>  TETHER</p>
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
                                                     echo "<script>window.location='./referral-withdrawal-order'</script>";
                                                       
                                                         
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
                      
                      }else if($gateway === 'Litecoin'){
                               $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $refbonus = $row['refbonus'];
                            
                             if($amount>$refbonus){
                                
                                         $error = true;
                                        $errorposter =  '<div class="alert alert-danger alert-dismissible " role="alert">
                                        Insufficient fund in your Referral Bonus wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO referralWithdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','LITECOIN','$date','Pending','$cryptoaddress')";
                                        $result  = mysqli_query($con,$q);
                                        if($result){
                                            
                                                        $to = $email;
                                                            $from = 'support@threefoldinvest.com';
                                                             $fromName = 'ThreeFoldInvest';
                                                        $mail = new PHPMailer();
                                                        $mail ->setFrom($from, $fromName);
                                                        $mail ->addAddress($to);
                                                        // $mail ->addAttachment($file);
                                                        $mail ->Subject = 'Referral Bonus Withdrawal Order';
                                                        
                                                        $body = "<html><head><title>Referral Bonus Withdrawal Order</title></head>
                                                                    <body  style='background:#aeccc1'>
                                                    <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                                   <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                                                   <div style='padding:12px;'>
                                                                   <p><b>Dear</b> $fname, </p>
                                                                   <p> We have received your Referral Bonus Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                                   
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
                                                     echo "<script>window.location='./referral-withdrawal-order'</script>";
                                                       
                                                         
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
                      
                      
                      else if($gateway === 'BNB'){
                               $q = "Select * FROM users where id='$userid'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $refbonus = $row['refbonus'];
                            
                             if($amount>$refbonus){
                                
                                         $error = true;
                                        $errorposter =  '<div class="alert alert-danger alert-dismissible " role="alert">
                                        Insufficient fund in your Referral Bonus wallet!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                            }
                            else{
                                
                                        $q = "INSERT INTO referralWithdrawal(userID,amount,transID,gateway,date,status,cryptoaddress) 
                                        VALUES ('$userid','$amount','$tid','BNB','$date','Pending','$cryptoaddress')";
                                        $result  = mysqli_query($con,$q);
                                        if($result){
                                            
                                                        $to = $email;
                                                        $from = 'info@strancof.com';
                                                        $fromName = 'Strancof';
                                                        $mail = new PHPMailer();
                                                        $mail ->setFrom($from, $fromName);
                                                        $mail ->addAddress($to);
                                                        // $mail ->addAttachment($file);
                                                        $mail ->Subject = 'Referral Bonus Withdrawal Order';
                                                        
                                                        $body = "<html><head><title>Referral Bonus Withdrawal Order</title></head>
                                                                    <body  style='background:#aeccc1'>
                                                                 
                                                                    <div style='border:solid 1px gray;width:70%;margin:auto;background:#fff'> 
                                                                   <div style='background:#f8f8f8;color:#fff;'><img src='https://www.strancof.com/images/strancoflogo.png' style='padding:12px;' width='130px'> </div>
                                                                   <div style='padding:12px;'>
                                                                   <p><b>Dear</b> $fname, </p>
                                                                   <p> We have received your Referral Bonus Withdrawal Order and will be processing it shortly. The details of the order are below: </p>
                                                                   
                                                                   <p><b>Order Number:</b> $tid </p>
                                                                   <p><b>Amount:</b>  $$amount</p>
                                                                   <p><b>Gateway:</b>  BNB</p>
                                                                   <p><b>Date:</b> $date </p>
                                                                   <p>You will receive an email from us shortly once your order is confirmed.</p>
                                                                   
                                                                   <p>Sincerely,</p>
                                                                   <p>Strancof.</p>
                                                                   
                                                                   <center><p><a href='https://www.strancof.com'>visit our website</a> | <a href='https://www.strancof.com/login'>log in to your account</a> | <a href='https://www.strancof.com/contact'>get support </a></p>
                                                                   <p>Copyright © Strancof, All rights reserved. </p>
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
                                                        $mail->Username = 'info@strancof.com';
                                                        $mail->Password = 'strancofv1@'; 
                                                        
                                                        
                                                        
                                                            if($mail->Send()){
                                                            //   echo '<script> alert("Success")</script>';
                                                            }else{
                                                                // echo '<script> alert("error")</script>';
                                                            }
                                                     
                                                     echo "<script>window.location='./referral-withdrawal-order'</script>";
                                                       
                                                         
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
                                    $mail ->Subject = 'User Referral Withdrawal Notification';
                                    // $mail ->Body = $body;
                                    $mail->Body = "<html><head><title>User Referral Withdrawal Notification</title></head>
                                                <body  style='background:#aeccc1'>
                                                                             
                                                <div style='border:solid 1px gray;width:70%;margin:auto;color:#000;background:#fff'> 
                                               <div style='background:#eee;color:#fff;'><img src='https://threefoldinvest.com/themes/threefoldinvest/assets/images/threefoldlogoblack.png' width='200px' style='padding:12px;'> </div>
                                               <div style='padding:12px;'>
                                               <p>Hi Admin,  </p>
                                               <p>$fname with email: $email,  has sent a referral withdrawal order of <b>$$amount</b>,<br> kindly attend to it.</p>
                                            
                                              
                                              <p>Sincerely</p>
                                              <p>ThreeFoldInvest</p>
                                               
                                               <center><p><a href='https://www.threefoldinvest.com'>visit our website</a> | <a href='https://threefoldinvest.com/login'>log in to your account</a> | <a href='https://www.threefoldinvest.com/contact'>get support </a></p>
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
                                <i class="ti-wallet"></i>
                            </span>
                            <span class="text">Referral Withdrawal Process</span>
                        </a>
                        </div>
                        <div class="container py-5">
                        <div class="p-5 bg-white rounded shadow mb-5">
                            <span> <?php if(isset($errorpost)) echo $errorpost;  ?>  </span>
	                        <span> <?php if(isset($errorposter)) echo $errorposter;  ?>  </span>
	                          <div  class="d-flex align-items-center justify-content-center h-100 mb-4 mt-4">
                                    <a href="referral-wallet" class="btn btn-dark  btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="ti-home"></i>
                                        </span>
                                        <span class="text">Back to Referral Bonus</span>
                                    </a>
                                    </div>
                          
                 
                      
                              
                               
                                
                                   <form action="" id="form-data" method="POST">
                                  
                                              <div class="mb-2">
                                                        <div class="row">
                                                       <div class="col-lg-12">
                                                 
                                                        <label>Total Referral Bonus</label>
                                                        <br>
                                                        <input type='text' class="form-control"  value="<?php  echo '$'.$refbonus ?>" readonly>
                                                    </div>
                                                       <div class="col-lg-12">
                                                     
                                                         <label for="" class="mt-2"><b>GATEWAY</b></label>
                                                        <br>
                                                           <select name="gateway" class=" form-control form-select form-control-lg" id="gateway" required>
                                                            <option value="">Select Gateway</option>
                                                            <option value="Bitcoin">Bitcoin</option>
                                                            <option value="Ethereum">Ethereum</option>
                                                            <option value="BitcoinCash">Bitcoin Cash</option>
                                                            <option value="Litecoin">Litecoin</option>
                                                            <option value="Tether">Tether (USDT)</option>
                                                            <!--<option value="PM">Perfect Money</option>-->
                                                            <option value="USDC">USD COIN</option>
                                                    
                                                          </select>
                                                                      
                                                       
                                                    </div>
                                                      </div>
                                              </div>
                                  
                                   
                                   
                                      <label for="" class=""><b>Amount($)</b></label>
                                       <p>  <b>Limit:</b> 5 - 100000 USD </p>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000" name="amount"  class="form-control" placeholder="Enter Amount" required>
                                        <label for="" class=" mt-2"><b>Enter Your CRYPTO Address</b></label>
                                       <input type="text"  name="cryptoaddress"  id="cryptoaddress" class="form-control mt-2" placeholder="" required>
                                        <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">
                                        <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                        <input type="hidden" name="fname" id="fname" value="<?php echo $fname ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="refsend">WITHDRAW</button>
                                    </form>
                              
                          
                          
                         
                          
                
                        </div>
                        </div>
                                                
                </div>
            </div>
        </div>
        <!-- main content area end -->
      <?php require "./assets/template/footer.php" ?>
      <script>
  $("#details").addClass('active');
  </script> 