<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In | Work24HR</title>
    <link href="./assets/css/grid.css?=v5.3.1" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/fav/favicon-16x16.png">
    <link rel="manifest" href="./assets/fav/site.webmanifest">
       <link rel="stylesheet" href="./assets/css/nav-mob.css" />
    <link rel="stylesheet" href="./assets/css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    
    <style>
        .bt-c{
            background:#ff6601;
        }
    </style>
</head>
<body class="__hero-img2">
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
            <a href="./about.php" class="nav__link">
              <i class="fa-solid fa-user"></i>
              <span class="nav__text">About Us</span>
            </a>
            <a href="./login.php" class="nav__link nav__link--active">
              <i class="fa-solid fa-key"></i>
              <span class="nav__text">Log In</span>
            </a>
            
      </div>
        </div>
    <nav class="navbar navbar-light  mt-5">
        <div class="container-fluid">
          <a class="navbar-brand mx-auto" href="./">
         <img class="rounded mx-auto d-block" src="./assets/img/logo/logo.png" alt="work24hr-logo" width="">
            <!--<h2 class="fs mx-auto">work24HR</h2>-->
          </a>
        </div>
      </nav>
				<div class="bx mb-3">
                <div class="container">
                   
                    
                     
                    <div id="log_error_status"></div>
                <p class="mb-4"><b class="text_ct">User  Login Area</b></p>
                <p class="text-muted ">Don't have an account? <a class="text_create" href="./register.php">Create free account</a> </p> 
				<div class=" row ">
				<div class="col-lg-6">
				<form action="" method="POST" id="log_form">
                  <div class="inBox mb-4">
                    <input type="text" autocomplete="off" class="form-control  req-val" id="email"  name="email" required onkeyup="this.setAttribute('value', this.value);"   value="">
                    <p class="text-danger" id="emailError"></p>
                    <label>Email</label>
                    
                  </div>
                  <div class="inBox mb-3">
                        <input type="password" autocomplete="off" class="form-control  req-val" id="password" name="password" required onkeyup="this.setAttribute('value', this.value);" value="">
                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password px-4"></span>
                        <p class="text-danger" id="passwordError"></p>
                        <label>Password</label>
                  </div>
                <div class="d-grid gap-2"> 
				<button  class="btn bt-c text-white p-3 b" id="submit_btn" type="button">LOG IN &nbsp;<span id="spin" class="float-end"><div class="clearfix"><div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div></div></span></button>
				<!--<div class="_fc">-->
    <!--                <span class="mb-3 "><a class="text_pass" href="./password-reset">Forgot your password?</a></span>-->
    <!--                <p>Did not receive your verification email, <a class="text_create" href="./resend-email">Resend</a></p>-->
                    
    <!--            </div>-->
				</div>
                </form>
					</div>
					<div class="col-lg-6 _logI">
					<img src="./img/loginpix.svg" alt="work24-user-login" style="width:100%">
					</div>
				</div>
                </div>
              </div>		
<script src="./assets/js/jquery2.js?v=3.6.1"></script>
<script src="./assets/js/gridbundle.js?v=5.3.1"></script>

<script src="./assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="./assets/js/app.js"></script>
 <!--<script src="//code.tidio.co/t2wkrga2cukk1urkequqylgkvknmv1vx.js" async></script>-->
</body>
</html>