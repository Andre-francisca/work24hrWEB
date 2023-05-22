<?php
require "../include/db.php";
?>
<?php 
// session_start();
if(isset($_SESSION['employerid']))
{
    $employerid = $_SESSION['employerid'];
    $sql = "SELECT * FROM employers WHERE emid = '{$employerid}'";
    $result = mysqli_query($con, $sql);
    if ($result)
    { 
        $row_cnt=mysqli_num_rows($result);
        if($row_cnt==1){ 
            $row=mysqli_fetch_assoc($result);
            $fname=$row[ 'rfname'] ;
            $eid=$row[ 'emid'] ;
            $clogo=$row[ 'companylogo'] ;
           
            $lname=$row[ 'rlname']; 
            $country=$row[ 'ccountry']; 
           
            $phone=$row[ 'rphone'];
            $email=$row[ 'remail']; 
        
           
          
            }
        }
    }else {
        header("location:https://www.work24hr.com/employer-login");
        exit;
        }
         ?>
        
 <?php
require "./include/data.php";
?>   
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Employer - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="./assets/css/grid.css?v=4.0.0">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/metisMenu.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/slicknav.min.css">
    <link rel="stylesheet" href="./assets/css/typography.css">
    <link rel="stylesheet" href="./assets/css/default-css.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
     <link rel="stylesheet" href="./assets/css/nav-mob.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css" />
    <!--<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">-->
<link rel="icon" href="./favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <style>
     .bt-c{
         background:#ff6601;
         color:#fff;
     }
 </style>
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
   
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
               <img src="assets/images/icon/work24logo.png" alt="work24HR">
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li id="./dashboard"><a href="./"><i class="ti-dashboard"></i><span>Dashboard</span></a></li>
                            <li id="profile">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>My Account</span></a>
                                <ul class="collapse">
                                    <li class=""><a href="./profile">Profile</a></li>
                                    
                                </ul>
                            </li>
                     
                            <!--<li>-->
                            <!--    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i>-->
                            <!--        <span>Multi-->
                            <!--            level menu</span></a>-->
                            <!--    <ul class="collapse">-->
                            <!--        <li><a href="#">Item level (1)</a></li>-->
                            <!--        <li><a href="#">Item level (1)</a></li>-->
                            <!--        <li><a href="#" aria-expanded="true">Item level (1)</a>-->
                            <!--            <ul class="collapse">-->
                            <!--                <li><a href="#">Item level (2)</a></li>-->
                            <!--                <li><a href="#">Item level (2)</a></li>-->
                            <!--                <li><a href="#">Item level (2)</a></li>-->
                            <!--            </ul>-->
                            <!--        </li>-->
                            <!--        <li><a href="#">Item level (1)</a></li>-->
                            <!--    </ul>-->
                            <!--</li>-->
                              <li>
                               <a href="./post-job" class=""><i class="fa fa-edit"></i> Post Job</a>
                                
                            </li>
                              <li>
                               <a href="./job-applications" class=""><i class="fa fa-paste"></i> Applications</a>
                                
                            </li>
                              <li>
                               <a href="./settings" class=""><i class="fa fa-wrench"></i> Settings</a>
                                
                            </li>
                              <li>
                               <a href="./logout" class=""><i class="fa fa-sign-out"></i> Log Out</a>
                                
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->