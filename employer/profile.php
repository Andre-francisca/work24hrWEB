<?php require "./assets/template/header.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
   <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php
                  $title = 'Profile-Detail';
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
                                   Profile Details
                                <ul class="d-flex justify-content-end">
                                    <li class="mr-3"><a href="./settings" class="text-warning">EDIT <i class="fa fa-edit " ></i></a></li>
                                </ul>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        
                                               <?php
                                    if($clogo !=""){
                                        ?>
                                        
                                         <img class="avatar user-thumb" src="./upload/<?php  echo $clogo ?>" alt="profile logo" width="150px">
                                        
                                        <?php
                                    }else{
                                        
                                        ?>
                                        
                                         <img class="avatar user-thumb" src="./upload/demoimage.png" width="150px" alt="profile logo">
                                        
                                        <?php
                                    }
                            
                            ?>
                                       
                                   
                                        
                                       
                                       
                                    
                            
                          
                                    
                               
                                </div>
                               <div class="col-lg-10">
                                   <h4>Personal Information</h4>
                                         <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone Number</th>
                                                  
                                                 
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-uppercase"><?php echo $fname." ".$lname ?></thd>
                                                    <td><?php echo $email ?></td>
                                                    <td><?php echo $phone; ?></td>
                                                   
                                                    
                                                    <td>
                                                       <?php echo $country ?>
                                                    </td>
                                                    <td>
                                                       <?php echo "Active" ?>
                                                    </td>
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
                    </div>
            </div>
        </div>
        <!-- main content area end -->
      <?php require "./assets/template/footer.php" ?>
      <script>
  $("#details").addClass('active');
  </script> 