<?php 

if(isset($_SESSION['userid']))
{
    $userid = $_SESSION['userid'];
    $sql = "SELECT * FROM users WHERE user_id = '{$userid}'";
    $result = mysqli_query($con, $sql);
    if ($result)
    { 
        $row_cnt=mysqli_num_rows($result);
        if($row_cnt>0){ 
            $row=mysqli_fetch_assoc($result);
            $fname=$row[ 'firstname'] ;
            $uid=$row['user_id'];
            $lname=$row[ 'lastname']; 
            $cv =$row['cv']; 
            $nat = $row['nationality']; 
            $pimage = $row['profile_image']; 
            $phone=$row[ 'phone_number'];
            $email=$row[ 'email'];
            }
        } 
    }else {
        
        // header("location:https://www.work24hr.com/app/login");
        // exit;
        
        }
         ?>