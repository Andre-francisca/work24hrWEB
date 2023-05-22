<?php require "./assets/template/header.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
        <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
             <?php
                  $title = 'Setting';
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
                            <div class="card-body bg-light">
                        <div class="tabs">
                          <div class="tab-2">
                            <label for="tab2-1" class="tb">Profile Update</label>
                            <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
                            <div>
                <form class="form" id="user_update_form" action="" method="POST" enctype="multipart/form-data">
                  
                  <div>
                      
                  </div>
             
                 
                     <div class="upload my-3">
                      
                        <?php
                                    if($clogo !=""){
                                        ?>
                                        
                                         <img class="avatar user-thumb" src="./upload/<?php  echo $clogo ?>" id="photo" width=125 height=125 >
                                        
                                        <?php
                                    }else{
                                        
                                        ?>
                                        
                                         <img class="avatar user-thumb" src="./upload/demoimage.png" id="photo" width=125 height=125 >
                                        
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
                  <input type="hidden" name="emid" id="emid" value="<?php echo $eid ?>">
                  
                         
                          <div class="row ">
                             
                        <div class="col-lg-6 mb-3 inBox">
                             <label class="">First Name</label>
                          <input type="text" class="form-control form-control-lg" autocomplete="off" name="fname" id="fname" required   value="<?php echo $fname ?>">
                         
                          <p class="text-danger" id="fnameError"></p>
                        </div>
                        <div class="col-lg-6 mb-3 inBox">
                            <label class="">Last Name</label>
                          <input type="text" class="form-control form-control-lg" autocomplete="off" name="lname" id="lname" required    value="<?php echo $lname ?>">
                          <p class="text-danger" id="lnameError"></p>
                          
                        </div>
                      </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3 inBox">
                             <label class="">Email</label>
                          <input type="text" class="form-control form-control-lg" autocomplete="off" name="email" id="email" required readonly   value="<?php echo $email ?>">
                          <p class="text-danger" id="emailError"></p>
                        </div>
                        <div class="col-lg-6 mb-3 inBox">
                             <label class="">Phone Number</label>
                          <input type="number" class="form-control form-control-lg" autocomplete="off" name="phone" id="phone" required   value="<?php echo $phone ?>">
                          <p class="text-danger" id="phoneError"></p>
                         
                        </div>
                    
                      </div>
                 
                    <div class="row">
                      
                        <div class="col-lg-6 mb-3 inBox">
                          <label>Country</label>
                              <input class="form-control form-control-lg" type="text" name="country" id="country" readonly value="<?php echo $country ?>">
                          <p class="text-danger" id="countryError"></p>
                        </div>
                      </div>
                  <div class="row">
                       <div class="col-md-6 mb-3">
                       
                       <button type="type" id="update-user" class="btn bt-c btn-lg btn-block"><span id="icon"><i class="fa fa-check-circle"></i></span>&nbsp;Update</button>
                         
                    </div>
                  </div>
                </form>
                            </div>
                          </div>
                          <div class="tab-2">
                            <label for="tab2-2" class="tb">Change Password</label>
                            <input id="tab2-2" name="tabs-two" type="radio">
                            <div>
                            <form class="" id="form-datapass">
                               
                                    
                                    <div class="row">
                                             <div class="col-lg-6">
                                            <label for="" class="form-label">Enter current Password </label>
                                            <input type="password" name="cpass" id="cpass" class="form-control form-control-lg" value="" >
                                            <span toggle="#cpass" class="fa fa-fw fa-eye field-icon toggle-password px-4"></span>
                                            <span class="cpasserror text-danger"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="" class="form-label">Enter New Password</label>
                                            <input type="password" class="form-control form-control-lg" id="npass" name="npass">
                                            <span toggle="#npass" class="fa fa-fw fa-eye field-icon toggle-password px-4"></span>
                                            <span class="npasserror text-danger"></span>
                                        </div>
                                        
                                    </div>
                                    <input type="hidden" name="emid" id="emid" value="<?php echo $eid ?>">
                                    <div class="row">
                                         <div class="col-lg-6 mt-2">
                                            <label for="" class="form-label">Confirm New Password</label>
                                            <input type="password" name="vpass" id="vpass" class="form-control form-control-lg" >
                                            <span toggle="#vpass" class="fa fa-fw fa-eye field-icon toggle-password px-4"></span>
                                            <span class="vpasserror text-danger"></span>
                                        </div> 
                                       
                                    </div>
                                    
                                    <div class="row">
                                         <div class="col-lg-6 mt-2">
                                       
                                                <button type="submit" class="btn bt-c btn-lg btn-block" id="passwordupdate">Save</button>
                                         
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
                
       
               
               <div class="container">
                   
               </div>
            </div>
        </div>
        <!-- main content area end -->
      <?php require "./assets/template/footer.php" ?>
      <script>
  $("#settings").addClass('active');
   
  </script> 