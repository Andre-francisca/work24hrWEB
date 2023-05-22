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
        <title>Work24HR - Job Application</title>
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
       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css" />
<style>
    .form-p i {
    margin-left: -30px;
    cursor: pointer;
    
}

.page-item.active .page-link {
  z-index: 1;
  color: #fff;
  background-color: #ff6601!important;
  border-color: #ff6601!important;
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
          <div  class="nav1">
            <a href="./" class="nav__link ">
              <i class="fa-solid fa-list nav__icon"></i>
              <span class="nav__text">Dashboard</span>
            </a>
            <a href="./job_listing.php" class="nav__link ">
              <i class="fa-solid fa-magnifying-glass"></i>
              <span class="nav__text">All Jobs</span>
            </a>
           
                                    <?php
                                          if((isset($_SESSION['userid'])))
                                         {
                                          ?>
                                          
                                            <a href="./applied" class="nav__link nav__link--active">
                                             <i class="fa fa-clipboard"></i>
                                              <span class="nav__text">Applied</span>
                                            </a>
                                          
                                           <a href="https://work24hr.com/app/profile" class="nav__link">
                                                  <i class="fa fa-wrench"></i>
                                                  <span class="nav__text">Account</span>
                                                </a>
                                          
                                          <?php
                                          
                                         }
                                         else
                                         {
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
                                          if((isset($_SESSION['userid'])))
                                         {
                                          ?>
                                          
                                           <li><a href="./profile.php">Account</a></li>
                                           <li><a href="./logout.php">logout</a></li>
                                          <?php
                                          
                                         }
                                         else
                                         {
                                              
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
                                          if((isset($_SESSION['userid'])))
                                         {
                                          ?>
                                          
                                          <?php
                                          
                                         }
                                         else
                                         {
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
                                   <i class="fa-solid fa-arrow-left arrow goback" onclick="goBack();"></i> <span> Applied</span>
                                   
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
                                    <h2>Job Applications</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

     
            

            <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
                       <div class="container">
                     <div class="row">
                   
                    <div class="col-12 mt-5" style="padding:12px">
                        <div class="card">
                            <div class="card-body bg-light p-5" style="padding:15px">
                                
                                      <div class="d-flex justify-content-between pb-3">
                                      <h4 class="header-title">Your job applications</h4>
                                     
                                    
                                </div>
                                    
                                <div class="data-tables table-responsive">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>#</th>
                                                <th>Job title</th>
                                                <th>Status</th>
                                                <th>Application date</th>
                                                
                                               
                                                
                                           
                                        </thead>
                                        <tbody>
                                                <?php
                                                $c = 1;
                                    $sql = "SELECT * FROM job_application j join job_post jp ON j.jobid = jp.jobid WHERE user_id = '$uid'";
                                    $result = mysqli_query($con,$sql);
                                    if($result){
                                    while($row = mysqli_fetch_array($result)){
                                    $jobtitle = $row['jtitle'];
                                    $status = $row['statusapp'];
                                    $dapplied = $row['date_applied'];
                                    //   $date = date("F j, Y");
                                    echo "<tr>";
                                    echo "<td>".$c."</td>";
                                    echo "<td>".$jobtitle."</td>";
                                      echo "<td>".$status."</td>";
                                    echo "<td>".$dapplied."</td>";
                                  
                                   
                              
                                    
                                   
                                   
                                    // echo "<td>".$row['credit']."</td>";
                                    
                                            
                                        echo "</tr>";
                                        $c++;
                                        }
                                    }
                                        
                                        ?>
                                           
                                            </tr>
                                        </tbody>
                                    </table>
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
     <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.php5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
     
<script>
      if ($('#dataTable').length) {
        $('#dataTable').DataTable({
            responsive: true,
            "language": {
            "emptyTable": "No record found"
             },
                dom: 'frtip',
          
            //   columnDefs: [
            //   {
            //     targets: 1,
            //     className: 'zoom'
            //   }
            // ]
        });
    }
    
            window.goBack = function (e){
    var defaultLocation = "http://www.work24hr.com/app";
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

    if(
        newHash === oldHash &&
        (typeof(document.referrer) !== "string" || document.referrer  === "")
    ){
        window.setTimeout(function(){
            // redirect to default location
            window.location.href = defaultLocation;
        },1000); // set timeout in ms
    }
    if(e){
        if(e.preventDefault)
            e.preventDefault();
        if(e.preventPropagation)
            e.preventPropagation();
    }
    return false; // stop event propagation and browser default event
}  
    
</script>
     
    </body>
</html>
