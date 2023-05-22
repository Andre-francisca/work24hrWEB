<?php require "./assets/template/header.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
   <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php
                  $title = 'My-Investments';
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
                                <i class="ti-stats-up"></i>
                            </span>
                            <span class="text">My Investments</span>
                        </a>
                        </div>
                        <div class="row  my-5">
                          <div class="col">
                              <label><b>Wallet Balance</b></label>
                            <input type="text" class="form-control" placeholder="" aria-label="First name" value=" <?php   echo '$'.number_format($balance, 2, '.', ','); ?>" readonly>
                          </div>
                          <div class="col">
                              <label><b>Total Earnings</b></label>
                            <input type="text" class="form-control" placeholder="" aria-label="Last name" value=" <?php   echo '$'.number_format(investmentprofit(), 2, '.', ','); ?>" readonly>
                          </div>
                        </div>
                        <div class="table-responsive mt">
                        <table class="table table-striped table-bordered" id="transin" cellspacing="" width="100%">
                                    <thead style="background:#222d32;color:#fff;">
                                    <tr>
                                    <th>Package</th>
                                    <th>Capital</th>
                                    <th>Date Invested</th>
                                    <th>End Date</th>
                                    <th>Days Left</th>
                                    <th>Earning</th>
                                    <th>Status</th>
                                    <!--<th>Amount(ETH)</th>-->
                                    <th>Action</th>
                                  
                                    
                                    </thead>
                                <tbody> 

                                    <?php
                                    $sql = "SELECT * FROM investment WHERE userId = '$userid'";
                                    $result = mysqli_query($con,$sql);
                                    if($result){
                                    while($rows = mysqli_fetch_array($result)){
                                    //   $rows = mysqli_fetch_assoc($result);
                                            $activatedate = $rows['activateDate'];
                                            $id = $rows['id'];
                                            $investtype = $rows['investType'];
                                            $totalprofit = $rows['totalProfit'];
                                            $amountInvested = $rows['amountInvested'];
                                            $status = $rows['status'];
                                            $enddate = $rows['endDate'];
                                            $now = strtotime(date("Y-m-d"));
                                            $your_date = strtotime($enddate);
                                            $datediff = $your_date - $now;
                                            $number = floor($datediff/(60*60*24));
                                            
                                   
                                    //   $date = date("F j, Y");
                                    echo "<tr>";
                                    echo "<td><b style='text-transform:uppercase'>".$investtype."</b></td>";
                                    echo "<td>".number_format($amountInvested, 2, '.', ',')."</td>";
                                    echo "<td>".$activatedate."</td>";
                                    echo "<td>".$enddate."</td>";
                                    echo "<td>".$number."</td>";
                                    echo "<td>".number_format($totalprofit, 2, '.', ',')."</td>";
                                    echo "<td>".$status."</td>";
                                   
                                    ?>
                                    
                                    <td><button class='btn btn-success withdraw_data' id="<?php echo $id ?>"><i class='ti-stats-up'></i>&nbsp;Withdraw </button></td>
                                    
                                    <?php
                                    
                                
                                  
                                    
                                            
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
        
           <div class="modal fade" id="withdraw_Modal">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-check"></i>&nbsp;Withdrawal</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                          <center><div id="loader2"></div></center>
                                         
                                        <form id="withdrawal_form" method="POST">
                                            <div class="form-group">
                                                    <label><i class="fa fa-list-ul"></i>&nbsp; Plan</label>
                                                    <input type="text" name="plantype" id="plantype" class="form-control" readonly>
                                               </div>
                                            <div class="form-group">
                                                    <label><i class="fa fa-list-ul"></i>&nbsp; Withdrawable Amount (USD) </label>
                                                    <input type="text" name="withamount" id="withamount" class="form-control" readonly>
                                               </div>
                                               <input type="hidden" name="uid" id="uid" >
                                               <input type="hidden" name="pid" id="pid" >
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Withdraw</button>
                                                 </div>
                                        </form>
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
    $('#transin').append('<caption style="caption-side: top">ThreeFoldInvest &copy.</caption>');
  
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