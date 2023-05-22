<?php
require "./include/db.php";
?>

<?php
require "./include/core.php";
?>

<?php
require "./include/data.php";
?>




<!DOCTYPE html>
<html class="no-js" lang="ENG">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Work24HR | HOME</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.php" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/price_rangs.css" />
    <link rel="stylesheet" href="assets/css/slicknav.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/nav-mob.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <div class="navb">
        <div class="nav1">
            <a href="./" class="nav__link nav__link--active">
                <i class="fa-solid fa-list nav__icon">dashboard</i>
                <span class="nav__text">Dashboard</span>
            </a>
            <a href="./job_listing.php" class="nav__link ">
                <i class="fa-solid fa-magnifying-glass"></i>
                <span class="nav__text">All Jobs</span>
            </a>

            <?php
            if ((isset($_SESSION['userid']))) {
            ?>

                <a href="./applied.php" class="nav__link">
                    <i class="fa fa-clipboard"></i>
                    <span class="nav__text">Applied</span>
                </a>

                <a href="https://work24hr.com/app/profile" class="nav__link">
                    <i class="fa fa-wrench"></i>
                    <span class="nav__text">Account</span>
                </a>

            <?php

            } else {
            ?>

                <a href="./about.php" class="nav__link">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav__text">About Us</span>
                </a>

                <a href="https://work24hr.com/app/login" class="nav__link">
                    <i class="fa-solid fa-key"></i>
                    <span class="nav__text">Log In</span>
                </a>

            <?php
            }


            ?>


        </div>
    </div>
    <header>

        <div class="header-area header-transparrent">
            <div class="headder-top header-sticky">

                <div class="container">

                    <div class="row align-items-center">
                        <!--<div class="col-lg-3 col-md-2">-->
                        <!--    <div class="logo">-->
                        <!--        <a href="./index"><img src="assets/img/logo/logo.png" alt="" /></a>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <div class="main-menu">

                                    <nav class="d-none d-lg-block">

                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="job_listing.php">Find a Jobs </a></li>
                                            <li><a href="about.php">About</a></li>

                                            <?php
                                            if ((isset($_SESSION['userid']))) {
                                            ?>

                                                <li><a href="./profile.php">Profile</a></li>
                                                <li><a href="./logout.php">logout</a></li>
                                            <?php

                                            } else {
                                            }


                                            ?>
                                            <!--<li>-->
                                            <!--    <a href="#">Page</a>-->
                                            <!--    <ul class="submenu">-->
                                            <!--        <li><a href="blog.php">Blog</a></li>-->
                                            <!--        <li><a href="single-blog.php">Blog Details</a></li>-->
                                            <!--        <li><a href="elements.php">Elements</a></li>-->
                                            <!--        <li><a href="job_details.php">job Details</a></li>-->
                                            <!--    </ul>-->
                                            <!--</li>-->
                                            <!--<li><a href="contact.php">Contact</a></li>-->
                                        </ul>
                                    </nav>
                                </div>

                                <?php
                                if ((isset($_SESSION['userid']))) {
                                ?>

                                <?php

                                } else {
                                ?>

                                    <div class="header-btn d-none f-right d-lg-block">
                                        <a href="./register.php" class="btn head-btn1">Register</a>
                                        <a href="./login.php" class="btn head-btn2">Login</a>
                                    </div>

                                <?php
                                }


                                ?>


                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none" style="background:#000"></div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="slider-area" style="z-index: 1000!important;">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">


                        <?php

                        if (isset($_SESSION['userid'])) {


                            if ($pimage != "") {
                        ?>
                                <div class="upload my-5" style="margin-bottom:15px;margin-top:15px">
                                    <img class="avatar user-thumb" src="./upload/<?php echo $pimage ?>" id="photo" width=125 height=125>
                                </div>

                            <?php
                            } else {

                            ?>
                                <div class="upload my-5" style="margin-bottom:15px;margin-top:15px">
                                    <img class="avatar user-thumb" src="./upload/demoimage.png" id="photo" width=125 height=125>
                                </div>

                            <?php
                            }
                        } else {

                            ?>

                            <!--<img class="avatar user-thumb" src="./upload/demoimage.png" id="photo" width=125 height=125 >-->

                        <?php

                        }


                        ?>


                        <!--<div class="round">-->
                        <!--<input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" required>-->
                        <!-- <i class="fa fa-camera" id="uploadBtn" style="color:#fff"></i> -->
                        <!--</div>-->


                        <?php
                        if ((isset($_SESSION['userid']))) {
                        ?>

                            <div class="badge ">
                                <?php echo "<b>Welcome</b>   <b style='background:#ff6601!important;padding:8px;border-radius:9px;color:#fff;'>" . $fname . "</b>" ?>
                                &nbsp;</div></a>


                        <?php

                        } else {
                        }


                        ?>
                        <div class="row">


                            <div class="col-xl-6 col-lg-9 col-md-10">


                                <div class="hero__caption">

                                    <h1>Explore, Find the right Job for you</h1>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8">
                                <form action="./job_listing" method="POST" class="search-box">
                                    <div class="input-form">
                                        <input type="text" name="search" placeholder="Job Tittle or keyword" required />
                                    </div>
                                    <!--<div class="select-form">-->
                                    <!--    <div class="select-itms">-->
                                    <!--        <select name="select" id="select1" >-->
                                    <!--            <option data-display="Region" >Region</option>-->
                                    <!--            <option value="">Location PK</option>-->
                                    <!--            <option value="">Location US</option>-->
                                    <!--            <option value="">Location UK</option>-->
                                    <!--            <option value="">Location US</option>-->
                                    <!--            <option value="">Location UK</option>-->
                                    <!--            <option value="">Location US</option>-->
                                    <!--            <option value="">Location UK</option>-->
                                    <!--        </select>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="search-form">
                                        <button type="submit" name="submit" class="btn-find">Find Job</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="our-services section-pad-t30" style="z-index: -1!important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>FEATURED JOB CATEGORIES</span>
                            <h2>Browse Top Categories</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-contnet-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.php">Design & Creative</a></h5>
                                <span><?php echo "(" . number_format(countCreative(), 0, '.', ',') . ")"; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-cms"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.php">Building & Architecture</a></h5>
                                <span><?php echo "(" . number_format(countBuild(), 0, '.', ',') . ")"; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-report"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.php">Sales & Marketing</a></h5>
                                <span><?php echo "(" . number_format(countSales(), 0, '.', ',') . ")"; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-app"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.php">Mobile Application</a></h5>
                                <span><?php echo "(" . number_format(countMobileApp(), 0, '.', ',') . ")"; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-helmet"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.php">Construction</a></h5>
                                <span><?php echo "(" . number_format(countConstruction(), 0, '.', ',') . ")"; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-high-tech"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.php">Information Technology</a></h5>
                                <span><?php echo "(" . number_format(countIT(), 0, '.', ',') . ")"; ?></span>


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-real-estate"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.php">Real Estate</a></h5>
                                <span><?php echo "(" . number_format(countEstate(), 0, '.', ',') . ")"; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-content"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.php">Content Writer</a></h5>
                                <span><?php echo "(" . number_format(countContent(), 0, '.', ',') . ")"; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-50">
                            <a href="job_listing.php" class="border-btn2">Browse All Sectors</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="online-cv cv-bg section-overly pt-90 pb-120" data-background="assets/img/gallery/cv_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <?php

                        if (isset($_SESSION['userid'])) {
                        ?>

                            <div class="cv-caption text-center">
                                <p class="pera1">Edit Your Profile</p>
                                <p class="pera2"></p>
                                <a href="./profile" class="border-btn2 border-btn4">Update</a>
                            </div>


                        <?php
                        } else {
                        ?>


                            <div class="cv-caption text-center">
                                <p class="pera1">GET SEEN BY EMPLOYERS</p>
                                <p class="pera2">Make a Difference with Your Online Resume!</p>
                                <a href="#" class="border-btn2 border-btn4">Upload your cv</a>
                            </div>

                        <?php

                        }


                        ?>

                    </div>
                </div>
            </div>
        </div>

        <section class="featured-job-area feature-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Recent Job</span>
                            <h2>Featured Jobs</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">



                        <?php

                        $q = "SELECT * FROM job_post j JOIN employers e ON j.emid = e.emid  ORDER BY jobid DESC LIMIT 4";
                        $result =  mysqli_query($con, $q);




                        while ($row = mysqli_fetch_assoc($result)) {


                            $jobtitle = $row['jtitle'];
                            $date = $row['date'];




                        ?>


                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="job_details.php?job=<?php echo $row['jobid']; ?>">
                                            <img src="https://work24hr.com/employer/upload/<?php echo $row['companylogo']; ?>" style="border: 1px solid #fac5a2;" alt="" />
                                        </a>
                                    </div>
                                    <div class="job-tittle">
                                        <a href="job_details.php?job=<?php echo $row['jobid']; ?>">
                                            <h4><?php echo $jobtitle; ?></h4>
                                        </a>
                                        <ul>
                                            <li><?php echo $row['jobfunction']; ?></li>
                                            <li><i class="fas fa-map-marker-alt"></i>&nbsp;<?php echo $row['loc']; ?></li>
                                            <li><?php echo " GH₵" . $row['msalary']; ?></li>
                                        </ul>
                                    </div>
                                </div>
                               
                                <div class="items-link f-right">
                                    <a href="job_details.php?job=<?php echo $row['jobid'] ?>"><?php echo $row['wtype']; ?></a>
                                    <span>

                                        <?php


                                        $your_date = strtotime($row['date']);




                                        //time() will give current time and
                                        //$time will have the time from database when the post was posted on your site.
                                        $time_difference = time() - $your_date;

                                        //calculate the difference and show accordingly.
                                        $seconds = $time_difference;
                                        $minutes = round($time_difference / 60);
                                        $hours = round($time_difference / 3600);
                                        $days = round($time_difference / 86400);
                                        $weeks = round($time_difference / 604800);
                                        $months = round($time_difference / 2419200);
                                        $years = round($time_difference / 29030400);
                                        if ($seconds <= 60) {
                                            echo "<font id='big'>a few seconds ago</font>";
                                        }
                                        //Minutes
                                        else if ($minutes <= 60) {
                                            if ($minutes == 1) {
                                                echo "1 minute ago";
                                            } else {
                                                echo $minutes . " minutes ago";
                                            }
                                        } else if ($hours <= 24) {
                                            if ($hours == 1) {
                                                echo "1 hour ago";
                                            } else {
                                                echo $hours . " hours ago";
                                            }
                                        } else if ($days <= 7) {
                                            if ($days == 1) {
                                                echo "Yesterday";
                                            } else {
                                                echo $days . " days ago";
                                            }
                                        } else if ($weeks <= 4) {
                                            if ($weeks == 1) {
                                                echo "1 week ago";
                                            } else {
                                                echo $weeks . " weeks ago";
                                            }
                                        } else if ($months <= 12) {
                                            if ($months == 1) {
                                                echo "1 month ago";
                                            } else {
                                                echo $months . " months ago";
                                            }
                                        } else {
                                            if ($years == 1) {
                                                echo "1 year ago";
                                            } else {
                                                echo $years . " years ago";
                                            }
                                        }
                                        ?>

                                    </span>
                                </div>
                            </div>


                        <?php

                        }


                        ?>


                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="cv-caption text-center">

                                    <a href="./job_listing" class="border-btn2 border-btn4">More</a>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </section>

        <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>Application process</span>
                            <h2 style="color:#28395a">How it works</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                                <h5>1. Search a job</h5>
                                <p>Use the search bar to search for jobs / internship openings </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-curriculum-vitae"></span>
                            </div>
                            <div class="process-cap">
                                <h5>2. Apply for job</h5>
                                <p>Go through the list of jobs and apply for the preferred one</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                                <h5>3. Get your job</h5>
                                <p>Wait for review, you will be notified via phone call or email if you are picked for the job</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <?php
        if ((isset($_SESSION['userid']))) {
        ?>


        <?php

        } else {
        ?>

            <div class="testimonial-area testimonial-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle white-text text-center">

                                <h2 style="color:#28395a">Testimonies</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">

                        <div class="col-xl-8 col-lg-8 col-md-10">
                            <div class="h1-testimonial-active dot-style">

                                <div class="single-testimonial text-center">
                                    <div class="testimonial-caption">
                                        <div class="testimonial-founder">
                                            <div class="founder-img mb-30">
                                                <img src="assets/img/testmonial/test1.png" alt="" />
                                                <span>Kofi Doe</span>
                                                <p>Software Developer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-top-cap">
                                            <p>
                                                “
                                                I highly recommend work24HR as they have great job openings. I applied for a software developer position and got the opportunity to interview with them. It went very well and I was offered the job that I always wanted.
                                                ”
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-testimonial text-center">
                                    <div class="testimonial-caption">
                                        <div class="testimonial-founder">
                                            <div class="founder-img mb-30">
                                                <img src="assets/img/testmonial/test2.png" alt="" />
                                                <span>John Smith</span>
                                                <p>
                                                    "
                                                    Teacher
                                                    "
                                                </p>
                                            </div>
                                        </div>
                                        <div class="testimonial-top-cap">
                                            <p>
                                                “
                                                I had a great experience with work24HR recruitment and I successfully got the offer. Ama was my recruitment agent and provided spectacular and professional services.

                                                .”
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-testimonial text-center">
                                    <div class="testimonial-caption">
                                        <div class="testimonial-founder">
                                            <div class="founder-img mb-30">
                                                <img src="assets/img/testmonial/test3.png" alt="" />
                                                <span>Margaret Jackson</span>
                                                <p>Enterpreneur</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-top-cap">
                                            <p>
                                                “
                                                Amazingly professional services by Ama Amuah and the team for my job arrangement. I would definitely recommend it.
                                                ”
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="support-company-area support-padding fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="right-caption">
                                <div class="section-tittle section-tittle2">
                                    <span>What we are doing</span>
                                    <h2>24k Talented people are getting Jobs</h2>
                                </div>
                                <div class="support-caption">
                                    <p class="pera-top">We connect qualified professionals like you with ideal companies so they can hire the best talent and grow their businesses.</p>
                                    <p>
                                        With the establishment of Work24HR, Ghana's productivity will be transformed and its human resources will be digitalized. We link businesses with the top prospects using a customized combination of human and automated solutions so they can recruit the ideal individual more quickly.
                                    </p>
                                    <a href="./register.php" class="btn post-btn">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="support-location-img">
                                <img src="assets/img/service/support-img.jpg" alt="" class="rounded" />
                                <div class="support-img-cap text-center">
                                    <p>Get</p>
                                    <span>seen</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }


        ?>

        <div class="home-blog-area blog-h-padding">
            <!-- <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center">
                                <span>Our latest blog</span>
                                <h2>Our recent news</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="home-blog-single mb-30">
                                <div class="blog-img-cap">
                                    <div class="blog-img">
                                        <img src="assets/img/blog/home-blog1.jpg" alt="" />

                                        <div class="blog-date text-center">
                                            <span>24</span>
                                            <p>Now</p>
                                        </div>
                                    </div>
                                    <div class="blog-cap">
                                        <p>| Properties</p>
                                        <h3><a href="single-blog.php">Footprints in Time is perfect House in Kurashiki</a></h3>
                                        <a href="#" class="more-btn">Read more »</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="home-blog-single mb-30">
                                <div class="blog-img-cap">
                                    <div class="blog-img">
                                        <img src="assets/img/blog/home-blog2.jpg" alt="" />

                                        <div class="blog-date text-center">
                                            <span>24</span>
                                            <p>Now</p>
                                        </div>
                                    </div>
                                    <div class="blog-cap">
                                        <p>| Properties</p>
                                        <h3><a href="single-blog.php">Footprints in Time is perfect House in Kurashiki</a></h3>
                                        <a href="#" class="more-btn">Read more »</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
    </main>
    <!--<footer>-->
    <!--    <div class="footer-area footer-bg footer-padding">-->
    <!--        <div class="container">-->
    <!--            <div class="row d-flex justify-content-between">-->
    <!--                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">-->
    <!--                    <div class="single-footer-caption mb-50">-->
    <!--                        <div class="single-footer-caption mb-30">-->
    <!--                            <div class="footer-tittle">-->
    <!--                                <h4>About Us</h4>-->
    <!--                                <div class="footer-pera">-->
    <!--                                    <p>We connect qualified professionals like you with ideal companies so they can hire the best talent and grow their businesses..</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">-->
    <!--                    <div class="single-footer-caption mb-50">-->
    <!--                        <div class="footer-tittle">-->
    <!--                            <h4>Contact Info</h4>-->
    <!--                            <ul>-->
    <!--                                <li>-->
    <!--                                    <p>New Weija, Ghana</p>-->
    <!--                                </li>-->
    <!--                                <li><a href="#">Phone : +233 55 983 1384</a></li>-->
    <!--                                <li>-->
    <!--                                    <a href="#">Email : <span class="__cf_email__" data-cfemail="">support@work24hr.com</span></a>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">-->
    <!--                    <div class="single-footer-caption mb-50">-->
    <!--                        <div class="footer-tittle">-->
    <!--                            <h4>Important Link</h4>-->
    <!--                            <ul>-->
    <!--                                <li><a href="#"> Find Jobs</a></li>-->
    <!--                                <li><a href="#">Contact Us</a></li>-->
    <!--                                <li><a href="#">Testimonial</a></li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">-->
    <!--                    <div class="single-footer-caption mb-50">-->
    <!--                        <div class="footer-tittle">-->
    <!--                            <h4>Newsletter</h4>-->
    <!--                            <div class="footer-pera footer-pera2">-->
    <!--                                <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>-->
    <!--                            </div>-->

    <!--                            <div class="footer-form">-->
    <!--                                <div id="mc_embed_signup">-->
    <!--                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part">-->
    <!--                                        <input-->
    <!--                                            type="email"-->
    <!--                                            name="email"-->
    <!--                                            id="newsletter-form-email"-->
    <!--                                            placeholder="Email Address"-->
    <!--                                            class="placeholder hide-on-focus"-->
    <!--                                            onfocus="this.placeholder = ''"-->
    <!--                                            onblur="this.placeholder = ' Email Address '"-->
    <!--                                        />-->
    <!--                                        <div class="form-icon">-->
    <!--                                            <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="assets/img/icon/form.png" alt="" /></button>-->
    <!--                                        </div>-->
    <!--                                        <div class="mt-10 info"></div>-->
    <!--                                    </form>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <div class="row footer-wejed justify-content-between">-->
    <!--                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">-->
    <!--                    <div class="footer-logo mb-20">-->
    <!--                        <a href="index.php"><img src="assets/img/logo/logo2_footer.png" alt="" /></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">-->
    <!--                    <div class="footer-tittle-bottom">-->
    <!--                        <span>5000+</span>-->
    <!--                        <p>Talented Hunter</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">-->
    <!--                    <div class="footer-tittle-bottom">-->
    <!--                        <span>451</span>-->
    <!--                        <p>Talented Hunter</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">-->
    <!--                    <div class="footer-tittle-bottom">-->
    <!--                        <span>568</span>-->
    <!--                        <p>Talented Hunter</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

    <!--    <div class="footer-bottom-area footer-bg">-->
    <!--        <div class="container">-->
    <!--            <div class="footer-border">-->
    <!--                <div class="row d-flex justify-content-between align-items-center">-->
    <!--                    <div class="col-xl-10 col-lg-10">-->
    <!--                        <div class="footer-copy-right">-->
    <!--                            <p>-->
    <!--                                Copyright &copy;-->
    <!--                                <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>-->
    <!--                                <script>-->
    <!--                                    document.write(new Date().getFullYear());-->
    <!--                                </script>-->
    <!--                                All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-xl-2 col-lg-2">-->
    <!--                        <div class="footer-social f-right">-->
    <!--                            <a href="#"><i class="fab fa-facebook-f"></i></a>-->
    <!--                            <a href="#"><i class="fab fa-twitter"></i></a>-->
    <!--                            <a href="#"><i class="fas fa-globe"></i></a>-->
    <!--                            <a href="#"><i class="fab fa-behance"></i></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</footer>-->

    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.slicknav.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/price_rangs.js"></script>

    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/animated.headline.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>

    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>

    <script src="assets/js/contact.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/mail-script.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/oboarding.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>