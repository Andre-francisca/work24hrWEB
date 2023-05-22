<?php require "./assets/template/header.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
   <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php
                  $title = 'Withdrawal-Order';
            ?>
                <?php
                 
                 require "./assets/template/title.php";
                
                ?>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- MAIN CONTENT GOES HERE -->
                        
                <div class="container-fluid">
                    
                        <div class="container py-5">
                        <div class="p-5 bg-white rounded shadow mb-5">
                           
                                 <div class="alert alert-success alert-dismissible " role="alert">
                                    Your Withdrawal Order has been sent, You will be paid once your order is confirmed.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                     </div>
                                     
                                      <div  class="d-flex align-items-center justify-content-center h-100 mb-4 mt-4">
                                    <a href="withdrawal" class="btn btn-dark  btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="ti-home"></i>
                                        </span>
                                        <span class="text">Back to Withdrawal</span>
                                    </a>
                                    </div>
                                     
                                     
                   
                
                        </div>
                        </div>
                                                
                </div>
          
            </div>
        </div>
        <!-- main content area end -->
      <?php require "./assets/template/footer.php" ?>
      <script>
  $("#withdrawal").addClass('active');
  </script> 