<?php require "./assets/template/header.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
   <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php
                  $title = 'Post-Job';
            ?>
                <?php
                 
                 require "./assets/template/title.php";
                
                ?>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- MAIN CONTENT GOES HERE --> 
         
                     <div class="row">
                   
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="header-title">
                                 
                                
                                </div>
                                     <div class="container-fluid">

                        <div  class="d-flex align-items-center justify-content-center h-100 mb-4 mt-4">
                        <a href="#" class="btn btn-dark  btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fa fa-edit"></i>
                            
                            <span class="text" style="font-size:16px">Post A Job</span>
                        </a>
                        
                         
                        </div>
                        
                      
                        <div class="  my-5 ">
                            
                            
                              <?php
                                    if($clogo ==""){
                                        ?>
                                        
                                         <form action="" method="POST" id="uploadlogo_form">
                                              <div class="upload my-3">
                                  
                                            <img src="./upload/demoimage.png" id="photo" width=125 height=125 >
                                                <div class="round">
                                                <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" required>
                                                 <i class="fa fa-camera" id="uploadBtn" style="color:#fff"></i> 
                                                </div>
                                               
                                            </div>  
                                            <input type="hidden" name="emid" id="emid" value="<?php echo $employerid;   ?>">
                                             <p class="text-center">Please Upload your company logo and click Next to post a Job</p>
                                             <p class="text-center mb-3">Note that this process is ones</p>
                                             <p class="text-center mb-2 text-muted">*10MB Max Image upload Size</p> 
                                             <p id="error-message" class="validation-error-label text-center"></p>
                                            <div class="d-flex justify-content-center">
                                                        
                                                    <button class="btn btn-success d-md-flex justify-content-md-between mr-2" id="ulogo" type="submit"><span id="icon"><i class="fa fa-arrow-right"></i></span>&nbsp; Next&nbsp;<span id="spin" class=""></span></button>
                                                   
                                                       <!--<a href="./support" class="text-muted btn btn-dark openT-btn" > Cancel </a>-->
                                        
                                                        
                                                    </div>
                                        </form>
                                        
                                        <?php
                                        
                                    }else{
                                        
                                        ?>
                                        
                                         <p class="text-center">Please add the Job Details below</p>
                                        
                                          <form action="" method="POST" id="post-job-form">
                                      
                                            <div class="row ">
                                                 
                                            <div class="col-lg-6 mb-3 inBox">
                                                 <label class="">Job Title</label>
                                              <input type="text" class="form-control " autocomplete="off" name="jtitle" id="jtitle" required   >
                                             
                                              <p class="text-danger" id="jtitleError"></p>
                                            </div>
                                             <input type="hidden" name="emid" id="emid" value="<?php echo $employerid;   ?>">
                                            <div class="col-lg-6 mb-3 inBox">
                                                 <label class="">Available Openings</label>
                                              <select name="aopenings" id="aopenings" class="form-control form-control-lg form-select">
                                                  
                                                   <option value="">Select</option>
                                                   <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                  <option value="6">6</option>
                                                  <option value="7">7</option>
                                                  <option value="8">8</option>
                                                  <option value="9">9 </option>
                                                  <option value="10">10 </option>
                                                  <option value="12">12 </option>
                                                  <option value="13">13 </option>
                                                  <option value="14">14 </option>
                                                  <option value="15">15 </option>
                                                  <option value="16 ">16 </option>
                                                  <option value="17 ">17 </option>
                                                  <option value="18 ">18 </option>
                                                  <option value="19 ">19 </option>
                                                  <option value="20 ">20 </option>
                                                  
                                            </select>
                                              <p class="text-danger" id="aopeningsError"></p>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                              <label class="">Current Job Function</label>
                                                <select name="jobfunction" id="jobfunction" class="form-control form-control-lg form-select">
                                                  <option value="">****SELECT****</option>
                                                  <option value="Accounting, Auditing & Finance">Accounting, Auditing & Finance</option>
                                                  <option value="Building & Architecture">Building & Architecture</option>
                                                  <option value="Community & Social Service">Community & Social Service</option>
                                                  <option value="Consulting & Strategy">Consulting & Strategy</option>
                                                  <option value="Creative & Design">Creative & Design</option>
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
                                              
                                              <p class="text-danger" id="jobfunctionError"></p>
                                             
                                            </div>
                                            <div class="col-lg-4 mb-3 inBox">
                                                <label class="">Industry</label>
                                              <select name="cindustry" id="cindustry" class="form-control form-control-lg form-select">
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
                                              <p class="text-danger" id="cindustryError"></p>
                                              
                                            </div>
                                            <div class="col-lg-4 mb-3 inBox">
                                                <label class="">Work Type</label>
                                                <select name="wtype" id="wtype" class="form-control form-control-lg form-select">
                                                  <option value="">****SELECT****</option>
                                                  <option value="Contract">Contract</option>
                                                  <option value="Full Time">Full Time</option>
                                                  <option value="Internship & Graduate">Internship & Graduate</option>
                                                  <option value="Part Time">Part Time</option>
                                             
                                                </select>
                                              <p class="text-danger" id="wtypeError"></p>
                                              
                                            </div>
                                           
                                          </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-3 inBox">
                                                 <label class="">Location</label>
                                                  <select name="loc" id="loc" class="form-control  form-control-lg form-select">
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
                                              <p class="text-danger" id="locError"></p>
                                            </div>
                                            <div class="col-lg-4 mb-3 inBox">
                                                 <label class="">Minimum Qualification</label>
                                                 <select name="mqualification" id="mqualification" class="form-control  form-control-lg form-select">
                                                  <option value="">****SELECT****</option>
                                                  <option value="Degree">Degree</option>
                                                  <option value="Diploma">Diploma</option>
                                                  <option value="High School (S.S.C.E)">High School (S.S.C.E)</option>
                                                  <option value="HND">HND</option>
                                                  <option value="MBA / MSC">MBA / MSC</option>
                                                  <option value="MBBS">MBBS</option>
                                                  <option value="Mphil / PHD">Mphil / PHD</option>
                                                  <option value="N.C.E">N.C.E</option>
                                                  <option value="OND">OND</option>
                                                  <option value="Others">Others</option>
                                                  <option value="Vocational">Vocational</option>
                                               
                                                </select>
                                              <p class="text-danger" id="mqualificationError"></p>
                                             
                                            </div>
                                            <div class="col-lg-4 mb-3 inBox">
                                                 <label class="">Experience Years</label>
                                                 <select name="eyears" id="eyears" class="form-control form-control-lg form-select">
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
                                              <p class="text-danger" id="eyearsError"></p>
                                             
                                            </div>
                                        
                                          </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-3 inBox">
                                                 <label class="">Job Level</label>
                                                  <select name="joblevel" id="joblevel" class="form-control  form-control-lg form-select">
                                                  <option value="">****SELECT****</option>
                                                  <option value="Graduate trainee">Graduate trainee</option>
                                                  <option value="Volunteer,internship">Volunteer,internship</option>
                                                  <option value="Entry Level">Entry Level</option>
                                                  <option value="Mid Level">Mid Level</option>
                                                  <option value="Senior Level">Senior Level</option>
                                                  <option value="Management Level">Management Level</option>
                                                  <option value="Executive Level">Executive Level</option>
                                                  <option value="No Experience">No Experience</option>
                                                </select>
                                              <p class="text-danger" id="joblevelError"></p>
                                            </div>
                                            <div class="col-lg-4 mb-3 inBox">
                                                 <label class="">Salary Currency</label>
                                                 <select name="scurrency" id="scurrency" class="form-control  form-control-lg form-select">
                                                  <option value="">****SELECT****</option>
                                                  <option value="Ghana Cedis">Ghana Cedi</option>
                                                  <option value="Us Dollar">Us Dollar</option>
                                                 
                                               
                                                </select>
                                              <p class="text-danger" id="mqualificationError"></p>
                                             
                                            </div>
                                            <div class="col-lg-4 mb-3 inBox">
                                                 <label class="">Monthly Salary (Gross) </label>
                                                 <select name="msalary" id="msalary" class="form-control form-control-lg form-select">
                                                      <option value="">****SELECT****</option>
                                                  <option value="Les than 180">Les than 180</option>
                                                  <option value="300 - 600">300 - 600</option>
                                                  <option value="900 - 1,200">900 - 1,200</option>
                                                  <option value="1,200 - 1,500">1,200 - 1,500</option>
                                                  <option value="1,500 - 1,800">1,500 - 1,800</option>
                                                  <option value="1,800 - 2,100">1,800 - 2,100</option>
                                                  <option value="2,100 - 2,400">2,100 - 2,400</option>
                                                  <option value="2,400 - 3,000">2,400 - 3,000</option>
                                                  <option value="3,000 - 3,600">3,000 - 3,600</option>
                                                  <option value="3,600 - 4,200">3,600 - 4,200</option>
                                                  <option value="4,200 - 4,800">4,200 - 4,800</option>
                                                  <option value="4,800 - 5,300">4,800 - 5,300</option>
                                                  <option value="5,300 - 6,000">5,300 - 6,000</option>
                                                  <option value="6,000 - 7,200">6,000 - 7,200</option>
                                                  <option value="7,200 - 8,400">7,200 - 8,400</option>
                                                  <option value="8,400 - 9,600">8,400 - 9,600</option>
                                                  <option value="9,600 - 10,799">9,600 - 10,799</option>
                                                  <option value="10,800 - 12,00">10,800 - 12,00</option>
                                                  <option value="12,000 - 18,000">12,000 - 18,000</option>
                                                  <option value="18,000 - 24,000">18,000 - 24,000</option>
                                                  <option value="24,000 - 30,000">24,000 - 30,000</option>
                                                  <option value="30,000 - 40,000">30,000 - 40,000</option>
                                                  <option value="40,000 - 50,000">40,000 - 50,000</option>
                                                  <option value="50,000 - 60,000">50,000 - 60,000</option>
                                                  <option value="60,000 - 70,000">60,000 - 70,000</option>
                                                  <option value="70,000 - 80,000">70,000 - 80,000</option>
                                                  <option value="80,000 - 90,000">80,000 - 90,000</option>
                                                  <option value="90,000 - 100,000">90,000 - 100,000</option>
                                                  <option value="More than 100,000+">More than 100,000+</option>
                                                  <option value="Less than 100">Less than 100</option>
                                                  <option value="100 - 150">100 - 150</option>
                                                  <option value="150 - 300">150 - 300</option>
                                                  <option value="300 - 500">300 - 500</option>
                                                  <option value="500 - 750">500 - 750</option>
                                                  <option value="750 - 1,000">750 - 1000</option>
                                                  <option value="1,000 - 1,500">1000 - 1,500</option>
                                                  <option value="1,500 - 2,500">1,500 - 2,500</option>
                                                  <option value="2,500 -4,000">2,500 -4,000</option>
                                                  <option value="4,000 - 6,000">4,000 - 6,000</option>
                                                  <option value="6,000 - 8,000">6,000 - 8,000</option>
                                                  <option value="8,000 - 10,000">8,000 - 10,000</option>
                                                  <option value="10,000 - 12,000">10,000 - 12,000</option>
                                                  <option value="More than 12,000+">More than 12,000+</option>
                                                  <option value="Commission Only">Commission Only</option>
                                                 
                                               
                                                </select>
                                              <p class="text-danger" id="msalaryError"></p>
                                             
                                            </div>
                                        
                                          </div>
                                          
                                          <div class="row">
                                                <div class="col-lg-12 mb-3 inBox">
                                                <label >Job Summary</label>
                                                <textarea class="form-control form-control-lg" id="jobsummary" name="jobsummary" rows="3" onkeyup="this.setAttribute('value', this.value);"  placeholder="Address"></textarea>
                                                 <p class="text-danger" id="jobsummaryError"></p>
                                                 
                                              </div>
                                                <div class="col-lg-12 mb-3 inBox">
                                                <label >Job Description</label>
                                                <textarea class="form-control form-control-lg" id="jobdesc" name="jobdesc" rows="3" onkeyup="this.setAttribute('value', this.value);"  placeholder="Job Description"></textarea>
                                                 <p class="text-danger" id="jobdescError"></p>
                                                 
                                              </div>
                                          </div>
                                                             <div class="col-lg-12">
                                                                        
                                                                        <div class="d-flex justify-content-center">
                                                                            
                                                                        <button class="btn bt-c d-md-flex justify-content-md-between mr-2" id="submitJob" type="submit"><span id="icon"><i class="fa fa-arrow-right"></i></span>&nbsp; Submit&nbsp;<span id="spin" class=""></span></button>
                                                                       
                                                                           <a href="./support" class="text-muted btn btn-dark openT-btn" > Cancel </a>
                                                            
                                                                            
                                                                        </div>
                                                </div>
                                                      </form>
                                        
                                        <?php
                                    }
                            
                            ?>
                            
                            
                           
                                
                                  
                       
                      
                      
                         
                        </div>
                      
                     
                </div> 
                                
                                 
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        
         
        <!-- main content area end -->
      <?php require "./assets/template/footer.php" ?>
      <script>
  $("#investments").addClass('active');
  </script> 
       <script>
  $(document).ready(function(){
      var printCounter = 0;
    $('#transin').append('<caption style="caption-side: top">work24hr &copy.</caption>');
  
      $('#transin').DataTable( {
        dom: 'Bfrtip',
        "order": [[ 0, "desc" ]],
        buttons: [ 
             'csv', 'excel', 'pdf', 'print'
        ],
        "language": {
            "emptyTable": "No data available"
             }
    } );
  });
  </script>
   <script>
          var $ckfield = CKEDITOR.replace( 'jobdesc' );

                $ckfield.on('change', function() {
                   $("#jobdescError").html("");
                  $ckfield.updateElement();         
                });
     </script>