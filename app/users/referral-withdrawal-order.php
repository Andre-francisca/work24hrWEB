<?php require "./assets/template/header.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
   <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php
                  $title = 'Referral-Withdrawal-Process';
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
                                    Your Referral Withdrawal Order has been sent, You will be credited once your order is confirmed.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                     </div>
                                     
                                      <div  class="d-flex align-items-center justify-content-center h-100 mb-4 mt-4">
                                    <a href="./referral-wallet" class="btn btn-dark  btn-icon-split">
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
  $("#refbonus").addClass('active');
  </script> 