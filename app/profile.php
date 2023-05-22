<?php
require "./include/db.php";
?>

<?php
require "./include/core1.php";
?>



<?php
require "./include/data.php";
?>



<!DOCTYPE html>
<html lang="ENG">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Work24HR - Profile</title>
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
  <!--<link rel="stylesheet" href="./assets/css/font-awesome.min.css">-->
  <!--<link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />-->
  <link rel="stylesheet" href="assets/css/themify-icons.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/nice-select.css" />
  <link rel="stylesheet" href="assets/css/style.css" />

  <link rel="stylesheet" href="assets/css/nav-mob.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    .form-p i {
      margin-left: -30px;
      cursor: pointer;
    }
  </style>

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
        <i class="fa-solid fa-list nav__icon"></i>
        <span class="nav__text">Dashboard</span>
      </a>
      <a href="./job_listing.php" class="nav__link ">
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

        <a href="./about" class="nav__link">
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
                if (isset($_SESSION['userid'])) {
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
              <div class="mobile_menu d-block d-lg-none"></div>


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
                <h2>Edit Account</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
      <div class="container">
        <div class="row">

          <div class="col-12 mt-5">
            <div class="card">
              <div class="card-body bg-light">
                <div class="tabs">
                  <div class="tab-2">
                    <label for="tab2-1" class="tb">Profile Update</label>
                    <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
                    <div>
                      <form class="form" id="user_update_form" action="" method="POST" enctype="multipart/form-data" style="padding:12px">

                        <div>

                        </div>
                        <div class="upload my-3">

                          <?php

                          if (isset($_SESSION['userid'])) {


                            if ($pimage != "") {
                          ?>

                              <img class="avatar user-thumb" src="./upload/<?php echo $pimage ?>" id="photo" width=125 height=125>

                            <?php
                            } else {

                            ?>

                              <img class="avatar user-thumb" src="./upload/demoimage.png" id="photo" width=125 height=125>

                            <?php
                            }
                          } else {

                            ?>

                            <img class="avatar user-thumb" src="./upload/demoimage.png" id="photo" width=125 height=125>

                          <?php

                          }


                          ?>


                          <div class="round">
                            <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" required>
                            <i class="fa fa-camera" id="uploadBtn" style="color:#fff"></i>
                          </div>

                        </div>
                        <p class="text-center mb-1">Upload Logo </p>
                        <p class="text-center mb-2 text-muted">*2MB Max Image upload Size</p>
                        <p id="error-message" class="validation-error-label text-center"></p>


                        <p id="error-message" class="validation-error-label text-center"></p>
                        <input type="hidden" name="userid" id="userid" value="<?php echo $userid ?>">

                        <div class="row ">


                          <div class="col-lg-6 mb-3 inBox">
                            <label class="">First Name</label>
                            <input type="text" class="form-control form-control-lg" autocomplete="off" name="fname" id="fname" required value="<?php echo $fname ?>">

                            <p class="text-danger" id="fnameError"></p>
                          </div>
                          <div class="col-lg-6 mb-3 inBox">
                            <label class="">Last Name</label>
                            <input type="text" class="form-control form-control-lg" autocomplete="off" name="lname" id="lname" required value="<?php echo $lname ?>">
                            <p class="text-danger" id="lnameError"></p>

                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 mb-3 inBox">
                            <label class="">Email</label>
                            <input type="text" class="form-control form-control-lg" autocomplete="off" name="email" id="email" required readonly value="<?php echo $email ?>">
                            <p class="text-danger" id="emailError"></p>
                          </div>
                          <div class="col-lg-6 mb-3 inBox">
                            <label class="">Phone Number</label>
                            <input type="number" class="form-control form-control-lg" autocomplete="off" name="phone" id="phone" required value="<?php echo $phone ?>">
                            <p class="text-danger" id="phoneError"></p>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-lg-6 mb-3 inBox">
                            <label>Nationality</label>
                            <input class="form-control form-control-lg" type="text" name="country" id="country" readonly value="<?php echo $nat ?>">
                            <p class="text-danger" id="zoneError"></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 mb-3">

                            <button type="type" id="update-user" class="btn btn-success btn-lg btn-block"><span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;Update</button>

                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="tab-2">
                    <label for="tab2-2" class="tb">Change Password</label>
                    <input id="tab2-2" name="tabs-two" type="radio">
                    <div>
                      <form class="form-p" id="form-datapass" style="padding:12px">


                        <div class="row">
                          <div class="col-lg-6 mb-3 p-5">
                            <label for="cpass" class="form-label">Enter current Password </label>
                            <input type="password" name="cpass" id="cpass" class="form-control form-control-lg" value="">
                            <!--<i class="fa fa-fw fa-eye" id="togglePassword"></i>-->
                            <span toggle="#cpass" id="togglePassword" class="fa fa-eye field-icon toggle-password px-4"></span>
                            <span class="cpasserror text-danger"></span>
                          </div>
                          <div class="col-lg-6 mb-3 ">
                            <label class="form-label">Enter New Password</label>
                            <input type="password" class="form-control form-control-lg" id="npass" name="npass">
                            <span toggle="#npass" class="fa fa-eye field-icon toggle-password px-4"></span>
                            <span class="npasserror text-danger"></span>
                          </div>

                        </div>
                        <input type="hidden" name="userid1" id="userid1" value="<?php echo $userid ?>">
                        <div class="row">
                          <div class="col-lg-6 mt-2  mb-3 ">
                            <label class="form-label">Confirm New Password</label>
                            <input type="password" name="vpass" id="vpass" class="form-control form-control-lg">
                            <span toggle="#vpass" class="fa fa-eye field-icon toggle-password px-4"></span>
                            <span class="vpasserror text-danger"></span>
                          </div>

                        </div>

                        <div class="row">
                          <div class="col-lg-6 mt-2">

                            <button type="submit" class="btn btn-success btn-lg btn-block" id="passwordupdate">Save</button>

                          </div>
                        </div>







                      </form>
                    </div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $(document).ready(function() {
      const imgDiv = document.querySelector('.upload');
      const img = document.querySelector('#photo');
      var file = document.querySelector('#image');
      const uploadBtn = document.querySelector('#uploadBtn')


      jQuery("input:file").change(function(event) {
        const choosedFile = this.files[0];

        if (choosedFile) {

          const reader = new FileReader();

          reader.addEventListener('load', function() {
            img.setAttribute('src', reader.result)
          });

          reader.readAsDataURL(choosedFile)
        }
      });

    });
  </script>
  <script src="assets/js/app.js"> </script>



</body>

</html>