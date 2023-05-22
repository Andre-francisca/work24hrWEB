<?php require "./assets/template/header.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
   <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php
                  $title = 'Referral-Bonus';
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
                                   REFERRAL BONUS
                                <ul class="d-flex justify-content-end">
                                  
                                </ul>
                                </div>
                                <div class="row">
                                   
                                        
                                           <div class="mb-5">
                                            <div class="row">
                                           <div class="col-lg-6">
                                     
                                            <label><b>Total Referral Bonus</b></label>
                                            <br>
                                            <input type='text' class="form-control"  value="<?php  echo '$'. number_format($refbonus, 2, '.', ',')?>" readonly>
                                        </div>
                                           <div class="col-lg-6">
                                         
                                            <label><b>Swift Withdrawal</b></label>
                                            <br>
                                            <a href="./referral-withdrawal"><button type="submit"  class="btn btn-success " >
                                                Withdraw Now
                                            </button>
                                            </a> 
                                                          
                                           
                                        </div>
                                          </div>
                                         </div>
                                         
                                          <div class="table-responsive mt">
                        <table class="table table-striped table-bordered" id="interestwith" cellspacing="" width="100%">
                                    <thead style="background:#222d32;color:#fff;">
                                    <tr>
                                    <!-- <th>#</th> -->
                                    <th>Date</th>
                                    <th>Trans ID</th>
                                    <th>Details</th>
                                    <th>Amount</th>
                                   
                                  
                                    
                                    </thead>
                                <tbody> 

                                    <?php
                                    // $c = 1;
                                    $sql = "SELECT * FROM interestwallet WHERE intusername = '$username' AND intDetails='Referral bonus'";
                                    $result = mysqli_query($con,$sql);
                                    if($result){
                                    while($row = mysqli_fetch_array($result)){
                                    //   $date = date("F j, Y");
                                    echo "<tr>";
                                    // echo "<td>".$c++."</td>";
                                    echo "<td>".$row['interestdate']."</td>";
                                    echo "<td>".$row['intTransID']."</td>";
                                    echo "<td>".$row['intDetails']."</td>";
                                    echo "<td>".'<b class="text-success">$'.$row['interestamount'].'</b>'."</td>";
                                    
                                            
                                        echo "</tr>";
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
                    
                    <!--- Referral Withdrawal History -->
                    
                   <div class="row">
                   
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="header-title">
                                   REFERRAL WITHDRAWAL HISTORY 
                                <ul class="d-flex justify-content-end">
                                  
                                </ul>
                                </div>
                                <div class="row">
                                   
                                        
                                        
                                <div class="table-responsive mt">
                        <table class="table table-striped table-bordered" id="transwithdrawal" cellspacing="" width="100%">
                                    <thead style="background:#222d32;color:#fff;">
                                    <tr>
                                    <th>Date</th>
                                    <th>Transaction ID</th>
                                    <th>Receivable(USD)</th>
                                    <th>Charge(USD)</th>
                                    <th>Gateway</th>
                                    <th>Status</th>
                                  
                                    
                                    </thead>
                                <tbody> 

                                    <?php
                                    $sql = "SELECT * FROM referralWithdrawal WHERE userID = '$userid'";
                                    $result = mysqli_query($con,$sql);
                                    if($result){
                                    while($row = mysqli_fetch_array($result)){
                                    $date = $row['date'];
                                    $status = $row['status'];
                                    //   $date = date("F j, Y");
                                    echo "<tr>";
                                    echo "<td>".$date."</td>";
                                    echo "<td>".$row['transID']."</td>";
                                    echo "<td>".$row['amount']."</td>";
                                    echo "<td>".'0.0'."</td>";
                                    echo "<td>".$row['gateway']."</td>";
                                    if($status === 'Pending'){
                                        echo "<td ><button class='btn btn-primary' type='button' disabled>".'<span class="spinner-border spinner-border-sm m-1" role="status" aria-hidden="true"></span>'.$row["status"]."</button></td>";
                                    }else if($status === 'Confirmed'){
                                        echo "<td ><button class='btn btn-success'>".'<i class="fa fa-check m-1" ></i> '.$row['status']."</button></td>";
                                    };
                                    // echo "<td >".$row['status']."</td>";
                                    // echo "<td>".$row['credit']."</td>";
                                    
                                            
                                        echo "</tr>";
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
        </div>
        <!-- main content area end -->
      <?php require "./assets/template/footer.php" ?>
      <script>
  $("#refbonus").addClass('active');
  </script> 
    <script>
  $(document).ready(function(){
      var printCounter = 0;
    $('#interestwith').append('<caption style="caption-side: top">ThreeFoldInvest &copy.</caption>');
  
      $('#interestwith').DataTable( {
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
  $(document).ready(function(){
      var printCounter = 0;
    $('#transwithdrawal').append('<caption style="caption-side: top">ThreeFoldInvest  &copy.</caption>');
  
      $('#transwithdrawal').DataTable( {
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