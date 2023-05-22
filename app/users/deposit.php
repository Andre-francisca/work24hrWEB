<?php require "./assets/template/header.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
   <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php
                  $title = 'Deposit';
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
                                   Deposit Funds into your Wallet
                                <!--<ul class="d-flex justify-content-end">-->
                                <!--    <li class="mr-3"><a href="./settings" class="text-success">EDIT <i class="fa fa-edit " ></i></a></li>-->
                                <!--</ul>-->
                                </div>
                                       <div class="row">
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="serviceBox">
                        <div class="service-icon">
                            <span>
                            <img src="https://www.threefoldinvest.com/images/coins/btc.png" width="40px">
                            </span>
                        </div>
                        <h3 class="title">BITCOIN</h3>
                        <p class="description"><i class="ti-check-box"></i>&nbsp;<b>Limit: 5 - 100000000 USD</b></p>
                        <p class="description"><i class="ti-check-box"></i>&nbsp;<b>Charge: 0 USD + 0%</b></p>
                        <form action="./deposit-process" method="post">
                        <div class="pricingTable-signup">
                            <input type='hidden' name="btc" value="BITCOIN">
                            <button type="submit" name="subbtc" class="btn btn-success">DEPOSIT</button>
                        </div>
                        </form>
                       
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="serviceBox ">
                        <div class="service-icon">
                             <span>
                                 <img src="https://www.threefoldinvest.com/images/coins/ethereum.png" width="40px">
                                 </span>
                        </div>
                        <h3 class="title">ETHEREUM</h3>
                        <p class="description"><i class="ti-check-box"></i>&nbsp;<b>Limit: 5 - 100000000 USD</b></p>
                        <p class="description"><i class="ti-check-box"></i>&nbsp;<b>Charge: 0 USD + 0%</b></p>
                        <form action="./deposit-process" method="post">
                        <div class="pricingTable-signup">
                            <input type='hidden' name="eth" value="ETHEREUM">
                            <button type="submit" name="subeth" class="btn btn-success">DEPOSIT</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="serviceBox ">
                          <div class="service-icon">
                             <span>
                                <img src="https://www.threefoldinvest.com/images/coins/bitcoincash.png" width="40px">
                                 
                                 </span>
                        </div>
                        <h3 class="title">BITCOIN CASH</h3>
                        <p class="description"><i class="ti-check-box"></i>&nbsp;<b>Limit: 5 - 100000000 USD</b></p>
                        <p class="description"><i class="ti-check-box"></i>&nbsp;<b>Charge: 0 USD + 0%</b></p>
                        <form action="./deposit-process" method="post">
                        <div class="pricingTable-signup">
                            <input type='hidden' name="btcash" value="BITCOIN CASH">
                            <button type="submit" name="subbtcash" class="btn btn-success">DEPOSIT</button>
                        </div>
                        </form>
                          
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="serviceBox ">
                            <div class="service-icon">
                             <span>
                                <img src="https://www.threefoldinvest.com/images/coins/usdt.png" width="40px">
                                 </span>
                        </div>
                        <h3 class="title">USDT TETHER</h3>
                        <p class="description"><i class="ti-check-box"></i>&nbsp;<b>Limit: 5 - 100000000 USD</b></p>
                        <p class="description"><i class="ti-check-box"></i>&nbsp;<b>Charge: 0 USD + 0%</b></p>
                        <form action="./deposit-process" method="post">
                        <div class="pricingTable-signup">
                           <input type='hidden' name="USDT" value="USDT (Tether)">
                            <button type="submit" name="subUSDT" class="btn btn-success">DEPOSIT</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                       <div class="serviceBox ">
                        <div class="service-icon">
                             <span>
                                <img src="https://www.threefoldinvest.com/images/coins/litecoin.png" width="40px">
                                 </span>
                        </div>
                        <h3 class="title">LITECOIN</h3>
                        <p class="description"><i class="ti-check-box"></i>&nbsp;<b>Limit: 5 - 100000000 USD</b></p>
                        <p class="description"><i class="ti-check-box"></i>&nbsp;<b>Charge: 0 USD + 0%</b></p>
                        <form action="./deposit-process" method="post">
                        <div class="pricingTable-signup">
                           <input type='hidden' name="LITE" value="LITECOIN">
                            <button type="submit" name="subLITE" class="btn btn-success">DEPOSIT</button>
                        </div>
                        </form>
                        </div>
                </div>
                <!--<div class="col-md-4 col-sm-6 mb-3">-->
                <!--       <div class="serviceBox ">-->
                <!--        <div class="service-icon">-->
                <!--             <span>-->
                <!--                <img src="https://www.threefoldinvest.com/images/coins/pm.png" width="40px">-->
                <!--                 </span>-->
                <!--        </div>-->
                <!--        <h3 class="title">PERFECT MONEY</h3>-->
                <!--        <p class="description"><i class="ti-check-box"></i>&nbsp;<b>Limit: 5 - 100000000 USD</b></p>-->
                <!--        <p class="description"><i class="ti-check-box"></i>&nbsp;<b>Charge: 0 USD + 0%</b></p>-->
                <!--        <form action="./deposit-process" method="post">-->
                <!--        <div class="pricingTable-signup">-->
                <!--           <input type='hidden' name="PM" value="PERFECT MONEY">-->
                <!--            <button type="submit" name="subpm" class="btn btn-success">DEPOSIT</button>-->
                <!--        </div>-->
                <!--        </form>-->
                <!--        </div>-->
                <!--</div>-->
                <div class="col-md-4 col-sm-6 mb-3">
                       <div class="serviceBox ">
                        <div class="service-icon">
                             <span>
                                <img src="https://www.threefoldinvest.com/images/coins/usdc.png" width="40px">
                                 </span>
                        </div>
                        <h3 class="title">USD COIN </h3>
                        <p class="description"><i class="ti-check-box"></i>&nbsp;<b>Limit: 5 - 100000000 USD</b></p>
                        <p class="description"><i class="ti-check-box"></i>&nbsp;<b>Charge: 0 USD + 0%</b></p>
                        <form action="./deposit-process" method="post">
                        <div class="pricingTable-signup">
                           <input type='hidden' name="USDC" value="USD COIN ">
                            <button type="submit" name="subusdc" class="btn btn-success">DEPOSIT</button>
                        </div>
                        </form>
                        </div>
                </div>
            </div>
                                
                                 
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    
                     <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="header-title">
                                  
                                <!--<ul class="d-flex justify-content-end">-->
                                <!--    <li class="mr-3"><a href="./settings" class="text-success">EDIT <i class="fa fa-edit " ></i></a></li>-->
                                <!--</ul>-->
                                </div>
                                <div class="container-fluid">

                        <div  class="d-flex align-items-center justify-content-center h-100 mb-4 mt-4">
                        <a href="#" class="btn btn-dark  btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="ti-stats-up"></i>
                            </span>
                            <span class="text">Deposit Transaction History</span>
                        </a>
                        </div>
                        <div class="table-responsive mt">
                        <table class="table table-striped table-bordered" id="transin" cellspacing="" width="100%">
                                    <thead style="background:#222d32;color:#fff;">
                                    <tr>
                                    <th>Date</th>
                                    <th>Transaction ID</th>
                                    <th>Amount(USD)</th>
                                    <th>Gateway</th>
                                    <!--<th>Amount(ETH)</th>-->
                                    <th>Status</th>
                                  
                                    
                                    </thead>
                                <tbody> 

                                    <?php
                                    $sql = "SELECT * FROM deposit WHERE userID = '$userid'";
                                    $result = mysqli_query($con,$sql);
                                    if($result){
                                    while($row = mysqli_fetch_array($result)){
                                    $date = $row['date'];
                                    $status = $row['status'];
                                    //   $date = date("F j, Y");
                                    echo "<tr>";
                                    echo "<td>".$date."</td>";
                                    echo "<td>".$row['transID']."</td>";
                                    echo "<td>".$row['USD']."</td>";
                                    echo "<td>".$row['depositMethod']."</td>";
                                    // echo "<td>".$row['ETH']."</td>";
                                    if($status === 'Pending'){
                                        echo "<td ><button class='btn btn-primary' type='button' disabled>".'<span class="spinner-border spinner-border-sm m-1" role="status" aria-hidden="true"></span>'.$row["status"]."</button></td>";
                                    }else if($status === 'Confirmed'){
                                        echo "<td ><button class='btn btn-success'>".'<i class="fa fa-check m-1" ></i> '.$row['status']."</button></td>";
                                    
                                    }else if($status === 'Cancelled1'){
                                        echo "<td ><button class='btn btn-danger'>".'<i class="fa fa-times m-1" ></i> '.'Cancelled'."</button></td>";
                                    };
                                   
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
        <!-- main content area end -->
      <?php require "./assets/template/footer.php" ?>
      <script>
  $("#deposit").addClass('active');
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