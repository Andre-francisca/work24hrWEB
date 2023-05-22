<?php
require "./include/db.php";
?>

<?php
require "./include/core.php";
?>



<?php
require "./include/data.php";
?>


<?php
$job = ""; // Initialize $job variable with a default value

if (isset($_GET['job']) && $_GET['job'] != "") {
    $job = $_GET['job'];

    $q = "SELECT * FROM job_post WHERE jobid = '$job'";
    $result = mysqli_query($con, $q);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $emid = $row['emid'];
    } else {
        // Handle query error if needed
    }
} else {
    // Handle case when no job ID is provided
    echo "No job ID provided.";
    // Redirect to an appropriate page or display an error message
}
?>


<!DOCTYPE html>
<html class="" lang="ENG">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Job Details - Work24hr</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.php" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/slicknav.css" />
    <link rel="stylesheet" href="assets/css/price_rangs.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/nav-mob.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <a href="./job_listing.php" class="nav__link nav__link--active">
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

                        <div class="col-12 navp" style="background:#000">
                            <nav class="navbar navbar-expand-lg d-block d-lg-none bg-dark" style="">
                                <div class="container-fluid d-flex justify-content-between" style="color:#fff">
                                    <i class="fa-solid fa-arrow-left arrow goback" onclick="goBack();"></i> <span> Job Detail</span>

                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>



        <?php

        $q = " SELECT * FROM job_post j JOIN employers e ON j.emid = e.emid WHERE jobid = '$job'";

        $result = mysqli_query($con, $q);
        while ($row = mysqli_fetch_assoc($result)) {
            $jobid = $row['jobid'];

            $your_date = strtotime($row['date']);


        ?>



            <div class="slider-area">
                <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hero-cap text-center">
                                    <h2><?php echo $row['jtitle'] ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="job-post-company pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-7 col-lg-8">
                            <div class="single-job-items mb-50">
                                <div class="job-items">
                                    <div class="company-img company-img-details">
                                        <a href="#"><img src="https://work24hr.com/employer/upload/<?php echo $row["companylogo"] ?>" alt="" /></a>
                                    </div>
                                    <div class="job-tittle">
                                        <a href="#">
                                            <h4><?php echo $row['jtitle'] ?></h4>
                                        </a>
                                        <ul>
                                            <li><?php echo $row['jobfunction'] ?></li>
                                            <li><i class="fas fa-map-marker-alt"></i><?php echo $row['loc'] ?></li>
                                            <li><?php echo "GH₵" . $row['msalary'] ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="job-post-details">
                                <div class="post-details1 mb-50">
                                    <div class="small-section-tittle">
                                        <h4>Job Description</h4>
                                    </div>
                                    <p>
                                        <?php echo $row['jobsummary'] ?>
                                    </p>

                                    <div class="post-details2">
                                        <ul>
                                            <li>Minimum Qualification: <?php echo "<b style='color:#ff6601'>" . $row['mqualification'] . "</b>" ?></li>
                                            <li>Experience Level: <?php echo "<b style='color:#ff6601'>" . $row['joblevel'] . "</b>" ?></li>
                                            <li>Years of Experience: <?php echo "<b style='color:#ff6601'>" . $row['eyears'] . "</b>" ?></li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="post-details2 mb-50">
                                    <div class="small-section-tittle">
                                        <h4>Job Description/Requirements</h4>
                                    </div>
                                    <p>
                                        <?php echo $row['jobdesc'] ?>
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4">
                            <div class="post-details3 mb-50">
                                <div class="small-section-tittle">
                                    <h4>Job Overview</h4>
                                </div>
                                <ul>
                                    <li>Posted date : <span><?php echo $row['date'] ?></span></li>
                                    <li>Location : <span><?php echo $row['loc'] ?></span></li>
                                    <li>Vacancy : <span><?php echo $row['aopenings'] ?></span></li>
                                    <li>Job nature : <span><?php echo $row['wtype'] ?></span></li>
                                    <li>Salary : <span><?php echo "GH₵" . $row['msalary'] . " yearly" ?></span></li>
                                    <li>Application date : <span><?php echo $row['date'] ?></span></li>
                                </ul>

                                <?php
                                if ((isset($_SESSION['userid']))) {
                                ?>


                                    <form action="" Method="POST" id="apply_form">

                                        <label for="formFile" class="form-label"><b>Upload CV</b></label>
                                        <p class="text-muted">Upload a CV no larger than 10MB for file types .pdf .doc .docx .rtf</p>
                                        <p id="error-message" class="validation-error-label"></p>
                                        <input class="form-control form-control-lg" required type="file" id="cvfile" name="cvfile" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                        <br>
                                        <input type="hidden" name="jobid" id="jobid" value="<?php echo $job ?>">
                                        <input type="hidden" name="emid" id="emid" value="<?php echo $emid ?>">
                                        <input type="hidden" name="userid" id="userid" value="<?php echo $uid ?>">

                                        <div class="apply-btn2">
                                            <button href="#" class="btn" id="app_sub">Apply Now</a>
                                        </div>

                                    </form>


                                <?php

                                } else {
                                ?>

                                    <div class="apply-btn2">
                                        <button href="#" class="btn" id="app_n">Apply Now</a>
                                    </div>

                                <?php
                                }


                                ?>



                            </div>
                            <div class="post-details4 mb-50">
                                <div class="small-section-tittle">
                                    <h4>Company Information</h4>
                                </div>
                                <!--<span> <?php echo $row['cname'] ?></span>-->
                                <!--<p><b>Industry:</b> <?php echo $row['cindustryt'] ?></p>-->
                                <ul>
                                    <li>Name: <span><?php echo $row['cname'] ?> </span></li>
                                    <li>Industry: <span><?php echo $row['cindustryt'] ?> </span></li>
                                    <li>Web : <span> <?php echo $row['website'] ?></span></li>
                                    <li>
                                        Email:
                                        <span><?php echo $row['remail'] ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        <?php
        }

        ?>

    </main>


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/app.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.goBack = function(e) {
            var defaultLocation = "https://www.work24hr.com/app";
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