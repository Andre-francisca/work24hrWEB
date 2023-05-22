<?php require "./assets/template/header.php" ?>

        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
   <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php
                  $title = 'withdrawals';
            ?>
                <?php
                 
                 require "./assets/template/title.php";
                
                ?>
               

            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- MAIN CONTENT GOES HERE -->
                          <div class="container-fluid">

                <div  class="d-flex align-items-center justify-content-center h-100 mb-4 mt-4">
                        <a href="#" class="btn btn-dark  btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-wallet"></i>
                            </span>
                            <span class="text">Choose Payout Method</span>
                        </a>
                        </div>
                        <div class="row mt-3">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card  bg-dark shadow h-100 py-2" style="border-bottom:3px solid #6fa491">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                            Bitcoin withdrawal
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                             <form action="./withdrawal-process" method="post">
                                                    <input type='hidden' name="btc" value="BITCOIN">
                                                     <button type="submit" name="subbtc" class="btn btn-success " >
                                                        Withdraw Now
                                                    </button>
                                                   
                                                </form>
                                           
                                            <div class="modal-box">
                                            <!-- Modal -->
                                       
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                       <i class="ti-stats-up text-gray-300" style="font-size:60px;color:#fff" ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card  bg-dark shadow h-100 py-2" style="border-bottom:3px solid #6fa491">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                            Bitcoin Cash withdrawal
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                             <form action="./withdrawal-process" method="post">
                                                    <input type='hidden' name="btcash" value="BITCOIN CASH">
                                                     <button type="submit" name="subbtcash" class="btn btn-success " >
                                                        Withdraw Now
                                                    </button>
                                                   
                                                </form>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                       <i class="ti-stats-up text-gray-300" style="font-size:60px;color:#fff" ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-xl-3 col-md-6 mb-4">-->
                    <!--    <div class="card  bg-dark shadow h-100 py-2" style="border-bottom:3px solid #ff5e15">-->
                    <!--        <div class="card-body">-->
                    <!--            <div class="row no-gutters align-items-center">-->
                    <!--                <div class="col mr-2">-->
                    <!--                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">-->
                    <!--                      Solana withdrawal-->
                    <!--                    </div>-->
                    <!--                    <div class="h5 mb-0 font-weight-bold text-gray-800">-->
                    <!--                          <form action="./withdrawal-process" method="post">-->
                    <!--                                <input type='hidden' name="solana" value="SOLANA">-->
                    <!--                                 <button type="submit" name="subsolana" class="btn btn-success " >-->
                    <!--                                    Withdraw Now-->
                    <!--                                </button>-->
                                                   
                    <!--                            </form>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div class="col-auto">-->
                    <!--                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card  bg-dark shadow h-100 py-2" style="border-bottom:3px solid #6fa491">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                            Ethereum Withdrawal
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                         <form action="./withdrawal-process" method="post">
                                                   <input type='hidden' name="eth" value="ETHEREUM">
                                                     <button type="submit" name="subeth" class="btn btn-success " >
                                                        Withdraw Now
                                                    </button>
                                                   
                                                </form>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                       <i class="ti-stats-up text-gray-300" style="font-size:60px;color:#fff" ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--<div class="col-xl-3 col-md-6 mb-4">-->
                    <!--    <div class="card  bg-dark shadow h-100 py-2" style="border-bottom:3px solid #6fa491">-->
                    <!--        <div class="card-body">-->
                    <!--            <div class="row no-gutters align-items-center">-->
                    <!--                <div class="col mr-2">-->
                    <!--                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">-->
                    <!--                        Perfect Money  withdrawal-->
                    <!--                    </div>-->
                    <!--                    <div class="row no-gutters align-items-center">-->
                    <!--                        <div class="col-auto">-->
                    <!--                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">-->
                    <!--                          <form action="./withdrawal-process" method="post">-->
                    <!--                              <input type='hidden' name="pm" value="PERFECT MONEY">-->
                    <!--                                 <button type="submit" name="subpm" class="btn btn-success " >-->
                    <!--                                    Withdraw Now-->
                    <!--                                </button>-->
                                                   
                    <!--                            </form>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div class="col-auto">-->
                    <!--                     <i class="ti-stats-up text-gray-300" style="font-size:60px;color:#fff" ></i>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card  bg-dark shadow h-100 py-2" style="border-bottom:3px solid #6fa491">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                            USDT Tether  withdrawal
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                              <form action="./withdrawal-process" method="post">
                                                  <input type='hidden' name="USDT" value="USDT Tether">
                                                     <button type="submit" name="subUSDT" class="btn btn-success " >
                                                        Withdraw Now
                                                    </button>
                                                   
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                       <i class="ti-stats-up text-gray-300" style="font-size:60px;color:#fff" ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card  bg-dark shadow h-100 py-2" style="border-bottom:3px solid #6fa491">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                            LITECOIN  withdrawal
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                              <form action="./withdrawal-process" method="post">
                                                  <input type='hidden' name="LITECOIN" value="LITECOIN">
                                                     <button type="submit" name="subLITE" class="btn btn-success " >
                                                        Withdraw Now
                                                    </button>
                                                   
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                       <i class="ti-stats-up text-gray-300" style="font-size:60px;color:#fff" ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card  bg-dark shadow h-100 py-2" style="border-bottom:3px solid #6fa491">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                            USD COIN  withdrawal
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                              <form action="./withdrawal-process" method="post">
                                                  <input type='hidden' name="USDC" value="USD COIN">
                                                     <button type="submit" name="subUSDC" class="btn btn-success " >
                                                        Withdraw Now
                                                    </button>
                                                   
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                       <i class="ti-stats-up text-gray-300" style="font-size:60px;color:#fff" ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-xl-3 col-md-6 mb-4">-->
                    <!--    <div class="card  bg-dark shadow h-100 py-2" style="border-bottom:3px solid #ff5e15">-->
                    <!--        <div class="card-body">-->
                    <!--            <div class="row no-gutters align-items-center">-->
                    <!--                <div class="col mr-2">-->
                    <!--                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">-->
                    <!--                        BNB Binance Coin withdrawal-->
                    <!--                    </div>-->
                    <!--                    <div class="row no-gutters align-items-center">-->
                    <!--                        <div class="col-auto">-->
                    <!--                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">-->
                    <!--                          <form action="./withdrawal-process" method="post">-->
                    <!--                              <input type='hidden' name="BNB" value="BNB Binance Coin">-->
                    <!--                                 <button type="submit" name="subBNB" class="btn btn-success " >-->
                    <!--                                    Withdraw Now-->
                    <!--                                </button>-->
                                                   
                    <!--                            </form>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div class="col-auto">-->
                    <!--                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    </div>

                </div>
            </div>
            
                    <div class="main-content-inner">
                <!-- MAIN CONTENT GOES HERE -->
         
                     <div class="row">
                   
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="header-title">
                                   Withdrawal History
                                <ul class="d-flex justify-content-end">
                                   
                                </ul>
                                </div>
                           
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
                                    $sql = "SELECT * FROM withdrawal WHERE userID = '$userid'";
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
                                    }
                                    else if($status === 'Canceled'){
                                        echo "<td ><button class='btn btn-danger'>".'<i class="fa fa-times m-1" ></i> '.$row['status']."</button></td>";
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
        <!-- main content area end -->
      <?php require "./assets/template/footer.php" ?>
      <script>
  $("#withdrawal").addClass('active');
  </script> 
  <script>
  $(document).ready(function(){
      var printCounter = 0;
    $('#transwithdrawal').append('<caption style="caption-side: top">ThreeFoldInvest &copy.</caption>');
  
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