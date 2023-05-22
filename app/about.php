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
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Work24HR - About Us</title>
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
            <a href="./" class="nav__link ">
                <i class="fa-solid fa-list nav__icon"></i>
                <span class="nav__text">Dashboard</span>
            </a>
            <a href="./job_listing" class="nav__link ">
                <i class="fa-solid fa-magnifying-glass"></i>
                <span class="nav__text">All Jobs</span>
            </a>

            <?php
            if ((isset($_SESSION['userid']))) {
            ?>

                <a href="./applied" class="nav__link">
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

                <a href="./about" class="nav__link nav__link--active">
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

                                                <li><a href="./profile">Profile</a></li>
                                                <li><a href="./logout">logout</a></li>
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

                        <div class="col-12 navp" style="background:#000">
                            <nav class="navbar navbar-expand-lg d-block d-lg-none " style="">
                                <div class="container-fluid d-flex justify-content-between" style="color:#fff">
                                    <i class="fa-solid fa-arrow-left arrow goback" onclick="goBack();"></i> <span> About Us</span>

                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="slider-area">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Who We Are</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="support-company-area fix section-padding2">
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
                                <?php
                                if ((isset($_SESSION['userid']))) {
                                ?>


                                <?php

                                } else {
                                ?>

                                    <a href="./register" class="btn post-btn">Get Started</a>

                                <?php
                                }


                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img">
                            <img src="assets/img/service/support-img.jpg" alt="" />
                            <div class="support-img-cap text-center">
                                <p>Get</p>
                                <span>Seen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

        <div class="testimonial-area ">
            <div class="container">
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
    <!--                                    <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>-->
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
    <!--                                    <p>Address :Your address goes here, your demo address.</p>-->
    <!--                                </li>-->
    <!--                                <li><a href="#">Phone : +8880 44338899</a></li>-->
    <!--                                <li>-->
    <!--                                    <a href="#">Email : <span class="__cf_email__" data-cfemail="6900070f06290a0605061b05000b470a0604">[email&#160;protected]</span></a>-->
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
    <!--                                <li><a href="#"> View Project</a></li>-->
    <!--                                <li><a href="#">Contact Us</a></li>-->
    <!--                                <li><a href="#">Testimonial</a></li>-->
    <!--                                <li><a href="#">Proparties</a></li>-->
    <!--                                <li><a href="#">Support</a></li>-->
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-23581568-13");
    </script>
    <script>
        window.goBack = function(e) {
            var defaultLocation = "http://www.mysite.com";
            var oldHash = window.location.hash;

            history.back(); // Try to go back

            var newHash = window.location.hash;

            /* If the previous page hasn't been loaded in a given time (in this case
             * 1000ms) the user is redirected to the default location given above.
             * This enables you to redirect the user to another page.
             *
             * However, you should check whether there was a referrer to the current
             * site. This is a good indicator for a previous entry in the history
             * session.
             *
             * Also you should check whether the old location differs only in the hash,
             * e.g. /index.php#top --> /index.php# shouldn't redirect to the default
             * location.
             */

            if (
                newHash === oldHash &&
                (typeof(document.referrer) !== "string" || document.referrer === "")
            ) {
                window.setTimeout(function() {
                    // redirect to default location
                    window.location.href = defaultLocation;
                }, 1000); // set timeout in ms
            }
            if (e) {
                if (e.preventDefault)
                    e.preventDefault();
                if (e.preventPropagation)
                    e.preventPropagation();
            }
            return false; // stop event propagation and browser default event
        }
    </script>
</body>

</html>