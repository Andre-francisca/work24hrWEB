<?php

require "./include/db.php";
?>
<?php

// session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign-Up | work24HR Employer Registration</title>
  <link href="./assets/css/grid.css?=v5.3.1" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./assets/css/nav-mob.css" />
  <link rel="stylesheet" href="./assets/css/style2.css">


  <style>
    .bt-c {
      background: #ff6601;
    }
  </style>
</head>

<body class="__hero-img">
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
  <nav class="navbar navbar-light  mt-5">
    <div class="container-fluid">
      <a class="navbar-brand mx-auto" href="index.php">
        <img class="rounded mx-auto d-block" src="./assets/img/logo/logo.png" alt="work24hr-logo" width="">
        <!--<h2 class="fs mx-auto">work24HR</h2>-->
      </a>
    </div>
  </nav>
  <div class="bx __regbt container mb-5">
    <?php

    if (isset($_SESSION['status'])) {

    ?>

      <div class="alert alert-success d-flex " role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class=" bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
        <div class="text-dark flex-grow-1"><b><?php echo $_SESSION['status'] ?></b></div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    <?php
      unset($_SESSION['status']);
    }

    ?>
    <div id="reg_error_status">
    </div>
    <div class="__reg mb-5">
      <div>
        <h2><b>Employer Account Registration</b> </h2>
        <p class="text-muted" style="text-align:center">Find and hire top Talents.</p>

        <form action="" method="POST" id="reg_form" enctype="multipart/form-data">
          <div class="progress mb-3" style="height: 40px">
            <div id="p1" class="progress-bar bg-gr" roll="progress-bar" style="width: 50%" id="progressBar"> <b class="lead p-2 text-dark" id="progressText">Step - 1</b>
            </div>
            <div id="p2" class="progress-bar bg-light" roll="progress-bar" style="width: 50%" id=""> <b class="lead p-2 text-dark" id="progressText">Step - 2</b>
            </div>
          </div>
          <div id="first" class="mb-2">
            <h4 class="text-center p-1 bg-dark rounded text-light mb-3">Company Representative</h4>
            <p class="text-center">This is information pertaining to you as a representative of the company.</p>


            <div class="row ">
              <div class="col-lg-6 mb-3 inBox">
                <input type="text" class="form-control " autocomplete="off" name="fname" id="fname" required onkeyup="this.setAttribute('value', this.value);" value="">
                <label class="mx-3">First Name</label>
                <p class="text-danger" id="fnameError"></p>
              </div>
              <div class="col-lg-6 mb-3 inBox">
                <input type="text" class="form-control" autocomplete="off" name="lname" id="lname" required onkeyup="this.setAttribute('value', this.value);" value="">
                <p class="text-danger" id="lnameError"></p>
                <label class="mx-3">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 mb-3 inBox">
                <input type="text" class="form-control" autocomplete="off" name="email" id="email" required onkeyup="this.setAttribute('value', this.value);" value="">
                <p class="text-danger" id="emailError"></p>
                <label class="mx-3">Work Email</label>
              </div>
              <div class="col-lg-6 mb-3">
                <div class="input-group mb-3 inBox ">
                  <span class="input-group-text" id="basic-addon1">Position In Company</span>
                  <select name="position-company" id="position-company" class="form-control form-select">
                    <option value="">****SELECT****</option>
                    <option value="C-level: CEO / COO / CIO / CFO / CTO / CPO">C-level: CEO / COO / CIO / CFO / CTO / CPO</option>
                    <option value="Senior Management: Head of Department / Team Lead">Senior Management: Head of Department / Team Lead</option>
                    <option value="Middle Management: Supervisor / Unit Head">Middle Management: Supervisor / Unit Head</option>
                    <option value="Junior Level: Associate / Officer">Junior Level: Associate / Officer</option>
                  </select>
                </div>
                <p class="text-danger" id="position-companyError"></p>

              </div>
            </div>
            <div class="row">

              <div class="col-lg-6 mb-3 inBox">
                <input type="number" class="form-control" autocomplete="off" name="phone" id="phone" required onkeyup="this.setAttribute('value', this.value);" onkeypress="return onlyNumberKey(event)" value="">
                <p class="text-danger" id="phoneError"></p>
                <label class="mx-3">Phone Number</label>
              </div>

              <div class="col-lg-6 mb-3 inBox">
                <input type="password" name="password" id="password" class="form-control" autocomplete="off" required onkeyup="this.setAttribute('value', this.value);" value="">
                <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password px-4"></span>
                <p class="text-danger" id="passwordError"></p>
                <label class="mx-3">Password</label>
              </div>



            </div>
            <div class="form-group d-md-flex clearfix float-end mb-3">
              <a href="#" class="btn bt-c text-white text-light" id="next-1">Next</a>
            </div>
          </div>
          <div id="second" class="mb-2">
            <h4 class="text-center p-1 bg-dark rounded mb-4 text-light">Company Information</h4>
            <p style="text-align:center"><b class="text-muted">This information pertains to your company</b></p>
            <div class="row ">
              <div class="col-lg-6 mb-3 inBox">
                <input type="text" class="form-control " autocomplete="off" name="cname" id="cname" required onkeyup="this.setAttribute('value', this.value);" value="">
                <label class="mx-3">Company Name</label>
                <p class="text-danger" id="cnameError"></p>
              </div>
              <div class="col-lg-6 mb-3">
                <div class="input-group mb-3 inBox ">
                  <span class="input-group-text" id="basic-addon1">Industry</span>
                  <select name="cindustry" id="cindustry" class="form-control form-select">
                    <option value="">****SELECT****</option>
                    <option value="Advertisement, Media & Communications">Advertisement, Media & Communications</option>
                    <option value="Agriculture, Fishing & Forestry">Agriculture, Fishing & Forestry</option>
                    <option value="Automotive & Aviation">Automotive & Aviation</option>
                    <option value="Banking, Finance & Insurance">Banking, Finance & Insurance</option>
                    <option value="Construction">Construction</option>
                    <option value="Education">Education</option>
                    <option value="Energy & Utilities">Energy & Utilities</option>
                    <option value="Enforcement & Security">Enforcement & Security</option>
                    <option value="Entertainment, Events & Sport">Entertainment, Events & Sport</option>
                    <option value="Government">Government</option>
                    <option value="Healthcare">Healthcare</option>
                    <option value="Hospitality & Hotel">Hospitality & Hotel</option>
                    <option value="IT & Telecoms">IT & Telecoms</option>
                    <option value="Law & Compliance">Law & Compliance</option>
                    <option value="Manufacturing & Warehousing">Manufacturing & Warehousing</option>
                    <option value="Mining, Energy & Metals">Mining, Energy & Metals</option>
                    <option value="NGO, NPO & Charity">NGO, NPO & Charity</option>
                    <option value="Real Estate">Real Estate</option>
                    <option value="Recruitment">Recruitment</option>
                    <option value="Retail, Fashion & FMCG">Retail, Fashion & FMCG</option>
                    <option value="Shipping & Logistics">Shipping & Logistics</option>
                    <option value="Tourism & Travel">Tourism & Travel</option>


                  </select>
                </div>
                <p class="text-danger" id="cindustryError"></p>

              </div>
            </div>
            <div class="row ">
              <div class="col-lg-6 mb-3">
                <div class="input-group mb-3 inBox ">
                  <span class="input-group-text" id="basic-addon1">Number Of Employees</span>
                  <select name="nemployees" id="nemployees" class="form-control form-select">
                    <option value="">****SELECT****</option>
                    <option value="1-4">1-4</option>
                    <option value="5-10">5-10</option>
                    <option value="11-25">11-25</option>
                    <option value="26-50">26-50</option>
                    <option value="51-100">51-100</option>
                    <option value="101-200">101-200</option>
                    <option value="201-500">201-500</option>
                    <option value="501-1000">501-1000</option>
                    <option value="1001+">1001+</option>


                  </select>
                </div>
                <p class="text-danger" id="nemployeesError"></p>

              </div>
              <div class="col-lg-6 mb-3">
                <div class="input-group mb-3 inBox ">
                  <span class="input-group-text" id="basic-addon1">Type Of Employer</span>
                  <select name="typeofemployer" id="typeofemployer" class="form-control form-select">
                    <option value="">****SELECT****</option>
                    <option value="Direct Employer">Direct Employer</option>
                    <option value="Recruitment Agency">Recruitment Agency</option>


                  </select>
                </div>
                <p class="text-danger" id="typeofemployerError"></p>

              </div>
            </div>

            <div class="row ">
              <hr>
              <div class="col-lg-6 mb-3 inBox">
                <input type="text" class="form-control " autocomplete="off" name="website" id="website" required onkeyup="this.setAttribute('value', this.value);" value="">
                <label class="mx-3">Website</label>
                <p class="text-danger" id="websiteError"></p>
              </div>
              <div class="col-lg-6 mb-3 inBox">
                <input type="text" class="form-control " autocomplete="off" name="cperson" id="cperson" required onkeyup="this.setAttribute('value', this.value);" value="">
                <label class="mx-3">Contact Person</label>
                <p class="text-danger" id="cpersonError"></p>
              </div>
              <div class="col-lg-6 mb-3 inBox">
                <input type="number" class="form-control" autocomplete="off" name="cphone" id="cphone" required onkeyup="this.setAttribute('value', this.value);" onkeypress="return onlyNumberKey(event)" value="">
                <p class="text-danger" id="cphoneError"></p>
                <label class="mx-3">Phone Number</label>
              </div>
              <div class="col-lg-6 mb-3 inBox">
                <input type="text" class="form-control" autocomplete="off" name="ccountry" id="ccountry" required onkeyup="this.setAttribute('value', this.value);" value="">
                <p class="text-danger" id="ccountryError"></p>
                <label class="mx-3">Country</label>
              </div>
              <div class="col-lg-12 mb-3 inBox">

                <textarea class="form-control form-control-lg" id="caddress" name="caddress" rows="3" onkeyup="this.setAttribute('value', this.value);" placeholder="Address"></textarea>
                <p class="text-danger" id="caddressError"></p>
                <label class="mx-3"></label>
              </div>

            </div>





            <div class="d-grid gap-2 d-md-flex justify-content-md-between bt-icon">
              <button class="btn bg-secondary text-light me-md-2" id="prev-2" type="button">Previous</button>
              <button class="btn bt-c text-white d-md-flex justify-content-md-between" id="submit" name="submit" type="submit"><span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp; Create Account&nbsp;<span id="spin" class=""></span></button>
            </div>
          </div>
          <div class="form-group">
            <div class="_fc">
              <p class="text-muted ">Already have an account? <a class="text_create" href="https://www.work24hr.com/employer-login">Log In</a> </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="./assets/js/jquery2.js?v=3.6.1"></script>
  <script src="./assets/js/gridbundle.js?v=5.3.1"></script>
  <script src="./assets/js/app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    function onlyNumberKey(evt) {

      // Only ASCII character in that range allowed
      var ASCIICode = (evt.which) ? evt.which : evt.keyCode
      if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
      return true;
    }
  </script>
  <script src="./assets/js/main.js"></script>
  <!--<script src="//code.tidio.co/t2wkrga2cukk1urkequqylgkvknmv1vx.js" async></script>-->
</body>

</html>