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
    <title>Sign-Up | work24HR User Registration</title>
    <link href="./assets/css/grid.css?=v5.3.1" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/nav-mob.css" />
    <link rel="stylesheet" href="./assets/css/style2.css">
   
    
    <style>
        .bt-c{
            background:#ff6601;
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
     <div class="navb">
          <div  class="nav1">
            <a href="./" class="nav__link nav__link--active">
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
            <a href="./login.php" class="nav__link">
              <i class="fa-solid fa-key"></i>
              <span class="nav__text">Log In</span>
            </a>
            
      </div>
        </div>
    <nav class="navbar navbar-light  mt-5">
        <div class="container-fluid">
          <a class="navbar-brand mx-auto" href="#">
            <img class="rounded mx-auto d-block" src="./assets/img/logo/logo.png" alt="work24hr-logo" width="">
            <!--<h2 class="fs mx-auto">work24HR</h2>-->
          </a>
        </div>
      </nav>
                <div class="bx __regbt container mb-5">
                           <?php
                    
                    if(isset($_SESSION['status'])){
                        
                        ?>
                        
                        <div class="alert alert-success d-flex " role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class=" bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg><div class="text-dark flex-grow-1"><b><?php echo $_SESSION['status'] ?></b></div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                        
                        <?php
                        unset($_SESSION['status']);
                    }

                    ?>
                    <div id="reg_error_status">
                    </div>
                    <div class="__reg mb-5"> 
                      <div>
                        <h2><b>Job Seeker Account Registration</b> </h2>
                        <p class="text-muted" style="text-align:center">Create a Job Seeker Account.</p>
                      
                        <form action="" method="POST" id="reg_form" enctype="multipart/form-data">
                          <div class="progress mb-3" style="height: 40px">
                            <div id="p1" class="progress-bar bg-gr" roll="progress-bar" style="width: 50%" id="progressBar"> <b class="lead p-2 text-dark" id="progressText">Step - 1</b>
                            </div> 
                             <div id="p2" class="progress-bar bg-light" roll="progress-bar" style="width: 50%" id=""> <b class="lead p-2 text-dark" id="progressText">Step - 2</b>
                            </div>
                          </div>
                      <div id="first" class="mb-2">
                      <h4 class="text-center p-1 bg-dark rounded text-light mb-4">Personal Information</h4>
                      
                     <div class="row ">
                        <div class="col-lg-6 mb-3 inBox">
                          <input type="text" class="form-control " autocomplete="off" name="fname" id="fname" required onkeyup="this.setAttribute('value', this.value);"   value="">
                          <label class="mx-3">First Name</label>
                          <p class="text-danger" id="fnameError"></p>
                        </div>
                        <div class="col-lg-6 mb-3 inBox">
                          <input type="text" class="form-control" autocomplete="off" name="lname" id="lname" required onkeyup="this.setAttribute('value', this.value);"   value="">
                          <p class="text-danger" id="lnameError"></p>
                          <label class="mx-3">Last Name</label>
                        </div>
                      </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3 inBox">
                          <input type="text" class="form-control" autocomplete="off" name="email" id="email" required onkeyup="this.setAttribute('value', this.value);"   value="">
                          <p class="text-danger" id="emailError"></p>
                          <label class="mx-3">Email</label>
                        </div>
                        <div class="col-lg-6 mb-3">
                          <div class="input-group mb-3 inBox ">
                            <span class="input-group-text" id="basic-addon1">Location</span>
                            <select name="loc" id="loc" class="form-control form-select">
                              <option value="">****SELECT****</option>
                              <option value="Accra and Tema Region">Accra & Tema Region</option>
                              <option value="Brong-Ahafo Region">Brong-Ahafo Region</option>
                              <option value="Central Region">Central Region</option>
                              <option value="Eastern Region">Eastern Region</option>
                              <option value="Kumasi and Ashanti Region">Kumasi & Ashanti Region</option>
                              <option value="Outside Ghana">Outside Ghana</option>
                              <option value="Remote (Work From Home)">Remote (Work From Home)</option>
                              <option value="Rest Of Ghana">Rest Of Ghana</option>
                              <option value="Takoradi and Western Region">Takoradi & Western Region</option>
                              <option value="Tamale and Northern Region">Temale & Northern Region</option>
                              <option value="Upper East Region">Upper East Region</option>
                              <option value="Upper West Region">Upper West Region</option>
                            </select>
                          </div>
                          <p class="text-danger" id="locError"></p>
                         
                        </div>
                      </div>
                    <div class="row">
                         <div class="col-lg-6 mb-3">
                          <div class="input-group mb-3 inBox ">
                            <span class="input-group-text" id="basic-addon1">Gender</span>
                            <select name="gender" id="gender" class="form-control form-select">
                              <option value="">****SELECT****</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>
                          <p class="text-danger" id="genderError"></p>
                         
                        </div>
                        <div class="col-lg-6 mb-3 inBox">
                          <input type="number" class="form-control" autocomplete="off" name="phone" id="phone" required onkeyup="this.setAttribute('value', this.value);" onkeypress="return onlyNumberKey(event)"  value="">
                          <p class="text-danger" id="phoneError"></p>
                          <label class="mx-3">Phone Number</label>
                        </div>
                           <div class="col-lg-6 mb-3 ">
                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Date-Of-Birth</span>
                                  <input type="date" class="form-control form-control-lg" autocomplete="off" name="dob" id="dob" required onkeyup="this.setAttribute('value', this.value);"   value="">
                                </div>
                          <p class="text-danger" id="dobError"></p>
                         
                        </div>
                          <div class="col-lg-6 mb-3 inBox">
                          <input type="password" name="password" id="password" class="form-control" autocomplete="off" required onkeyup="this.setAttribute('value', this.value);"   value="">
                          <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password px-4"></span>
                          <p class="text-danger" id="passwordError"></p>
                          <label class="mx-3">Password</label>
                        </div>
                          <div class="col-lg-6 mb-3 inBox">
                          <input type="text" name="nationality" id="nationality" class="form-control" autocomplete="off" required onkeyup="this.setAttribute('value', this.value);"   value="">
                          <p class="text-danger" id="nationalityError"></p>
                          <label class="mx-3">Nationality</label>
                        </div>
                        
                        
                      </div>
                      <div class="form-group d-md-flex clearfix float-end mb-3"> 
                      <a href="#" class="btn bt-c text-light" id="next-1">Next</a>
                      </div>
                    </div>
                    <div id="second" class="mb-2">
                      <h4 class="text-center p-1 bg-dark rounded mb-4 text-light">Work Information</h4>
                      <p style="text-align:center"><b class="text-muted">This is information pertaining to your past work experience and your qualifications</b></p>
                             <div class="row ">
                     <div class="col-lg-6 mb-3">
                          <div class="input-group mb-3 inBox ">
                            <span class="input-group-text" id="basic-addon1">Highest Qualification</span>
                            <select name="qualification" id="qualification" class="form-control form-select">
                              <option value="">****SELECT****</option>
                              <option value="Degree">Degree</option>
                              <option value="Diploma">Diploma</option>
                              <option value="High School (S.S.C.E)">High School (S.S.C.E)</option>
                              <option value="HND">HND</option>
                              <option value="MBA / MSC">MBA / MSC</option>
                              <option value="MBBS">MBBS</option>
                              <option value="MPhil / PHD">MPhil / PHD</option>
                              <option value="N.C.E">N.C.E</option>
                              <option value="OND">OND</option>
                              <option value="Others">Others</option>
                              <option value="Vocational">Vocational</option>
                            </select>
                          </div>
                          <p class="text-danger" id="qualificationError"></p>
                         
                        </div>
                        <div class="col-lg-6 mb-3">
                          <div class="input-group mb-3 inBox ">
                            <span class="input-group-text" id="basic-addon1">Current Job Function </span>
                            <select name="jobfunction" id="jobfunction" class="form-control form-select">
                              <option value="">****SELECT****</option>
                              <option value="Accounting, Auditing & Finance">Accounting, Auditing & Finance</option>
                              <option value="Building & Architecture">Building & Architecture</option>
                              <option value="Community & Social Service">Community & Social Service</option>
                              <option value="Consulting & Strategy">Consulting & Strategy</option>
                              <option value="Creativ & Design">Creativ & Design</option>
                              <option value="Customer Service & Support">Customer Service & Support</option>
                              <option value="Driver & Transport Services">Driver & Transport Services</option>
                              <option value="Engineering & Technology">Engineering & Technology</option>
                              <option value="Estate Agents & Property Management">Estate Agents & Property Management</option>
                              <option value="Farming & Agriculture">Farming & Agriculture</option>
                              <option value="Food Services & Catering">Food Services & Catering</option>
                              <option value="Health & Safety">Health & Safety</option>
                              <option value="Hospitality & Leisure">Hospitality & Leisure</option>
                              <option value="Human Resources">Human Resources</option>
                              <option value="Legal Services">Legal Services</option>
                              <option value="Management & Business Development">Management & Business Development</option>
                              <option value="Marketing & Communications">Marketing & Communications</option>
                              <option value="Medical & Pharmaceutical">Medical & Pharmaceutical</option>
                              <option value="Product & project Management">Product & project Management</option>
                              <option value="Quality Control & Assurance">Quality Control & Assurance</option>
                              <option value="Research, Teaching & Training">Research, Teaching & Training</option>
                              <option value="Sales">Sales</option>
                              <option value="Software & Data">Software & Data</option>
                              <option value="Supply Chain & Procurement">Supply Chain & Procurement</option>
                              <option value="Trades & Services">Trades & Services</option>
                              
                            </select>
                          </div>
                          <p class="text-danger" id="jobfunctionError"></p>
                         
                        </div>
                      </div>
                      <div class="row ">
                       <div class="col-lg-6 mb-3">
                          <div class="input-group mb-3 inBox ">
                            <span class="input-group-text" id="basic-addon1">Years Of Experience</span>
                            <select name="yearsofexperience" id="yearsofexperience" class="form-control form-select">
                              <option value="">****SELECT****</option>
                              <option value="No Experience / Less than 1 year">No Experience / Less than 1 year</option>
                              <option value="1 years">1 years</option>
                              <option value="2 years">2 years</option>
                              <option value="3 years">3 years</option>
                              <option value="4 years">4 years</option>
                              <option value="5 years">5 years</option>
                              <option value="6 years">6 years</option>
                              <option value="7 years">7 years</option>
                              <option value="8 years">8 years</option>
                              <option value="9 years">9 years</option>
                              <option value="10 years">10 years</option>
                              <option value="12 years">12 years</option>
                              <option value="13 years">13 years</option>
                              <option value="14 years">14 years</option>
                              <option value="15 years">15 years</option>
                              <option value="16 years">16 years</option>
                              <option value="17 years">17 years</option>
                              <option value="18 years">18 years</option>
                              <option value="19 years">19 years</option>
                              <option value="20 years">20 years</option>
                              <option value="More than 20 years">More than 20 years</option>
                        
                            </select>
                          </div>
                          <p class="text-danger" id="yearsofexperienceError"></p>
                         
                        </div>  
                        <div class="col-lg-6 mb-3">
                          <div class="input-group mb-3 inBox ">
                            <span class="input-group-text" id="basic-addon1">Availability</span>
                            <select name="availability" id="availability" class="form-control form-select">
                              <option value="">****SELECT****</option>
                              <option value="Immediately">Immediately</option>
                              <option value="1 Week">1 Week</option>
                              <option value="2 Weeks">2 Weeks</option>
                              <option value="3 Weeks">3 Weeks</option>
                              <option value="1 Month">1 Month</option>
                              <option value="2 Months">2 Months</option>
                              <option value="More Than 3 Months">More Than 3 Months</option>
                         
                        
                            </select>
                          </div>
                          <p class="text-danger" id="availabilityError"></p>
                         
                        </div>
                        </div>
                    
                             <div class="row ">
                        <div class="col-lg-12 mb-3">
                              
                          <div class="mb-3">
                              <p id="error-message" class="validation-error-label text-center"></p>
                              <label for="formFile" class="form-label"><b>Upload CV</b></label>
                              <p class="text-muted">Optionally upload a CV no larger than 10MB for file types .pdf .doc .docx .rtf</p> 
                              <p class="text-muted">Note:You will need to upload a CV to apply for jobs, however you can skip the CV upload on sign up.</p>
                              <input class="form-control form-control-lg" type="file" id="cvfile" name="cvfile" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                             
                              <!--<input class="form-control form-control-lg" type="file" id="cvfile" name="cvfile" >-->
                            
                            
                            </div>
    
                            <p id="error-message" class="validation-error-label"></p>
                            <p class="text-muted">Allowed File Extensions: .pdf .doc .docx .rtf (Max file size: 10MB)</p>
                            
                         </div>
                      </div>
                     
                        
                      
                  
                 
                      <div class="d-grid gap-2 d-md-flex justify-content-md-between bt-icon">
                        <button class="btn bg-secondary text-light me-md-2" id="prev-2"  type="button">Previous</button>
                        <button class="btn bt-c d-md-flex text-white justify-content-md-between" id="submit" name="submit" type="submit"><span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp; Create Account&nbsp;<span id="spin" class=""></span></button>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="_fc">
                          <p class="text-muted ">Already have an account? <a class="text_create" href="./login.php">Log In</a> </p> 
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