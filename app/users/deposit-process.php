<?php require "./assets/template/header.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
   <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php
                  $title = 'Depsoit-Process';
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
                            <span class="text">Deposit Process</span>
                        </a>
                        </div>
                        <div class="container py-5">
                        <div class="p-5 bg-white rounded shadow mb-5">
                           
                          <?php
                          if(isset($_POST['subbtc'])){
                               $btc = htmlspecialchars($_POST['btc']);

                               ?>
                                   <form action="./deposit-confirm" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="btcgate" value="<?php echo $btc; ?>" readonly class="form-control" >
                                     <p> <b>Limit:</b> 5  - 100000000 USD </p>
                                    
                                     <input type="text" name="bnumber" id="bnumber" value="" readonly class="form-control" placeholder="Value in BITCOIN">
                                     <p><label for="" class=""><b>Amount($)</b></label></p>
                                     
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000000" name="amount" id="amount"  class="form-control" placeholder="Enter Amount" required>
                                        <input type="hidden" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="subbtc">NEXT</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subeth'])){
                               $eth = htmlspecialchars($_POST['eth']);
                               
                                    ?>
                                   <form action="./deposit-confirm" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="ether" value="<?php echo $eth; ?>" readonly class="form-control" >
                                     <b>Limit:</b> 5  - 100000000 USD 
                                       <input type="text" name="eth" id="eth" readonly class="form-control" placeholder="Value in Ethereum">
                                        <label for="" class=""><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000000" name="usd" id="usd"  class="currencyField form-control mt-2" placeholder="Enter Amount" required>
                                        <input type="hidden" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="subeth">NEXT</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subUSDT'])){
                               $USDT = htmlspecialchars($_POST['USDT']);
                               
                                    ?>
                                   <form action="./deposit-confirm" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="USDT" value="<?php echo $USDT; ?>" readonly class="form-control" >
                                     <b>Limit:</b> 5  - 100000000 USD 
                                        <label for="" class=""><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000000" name="amount" id="amount"  class="currencyField form-control mt-2" placeholder="Enter Amount" required>
                                        <input type="hidden" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="subUSDT">NEXT</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subbtcash'])){
                               $btcash = htmlspecialchars($_POST['btcash']);
                               
                                    ?>
                                   <form action="./deposit-confirm" id="form-data"  method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="btcash" value="<?php echo $btcash; ?>" readonly class="form-control" >
                                     <p><b>Limit:</b> 5  - 100000000 USD </p>
                                     <label for="" class=""><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000000" name="amount" id="amount" class="form-control" placeholder="Enter Amount" required>
                                        <input type="hidden" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="subbtcash">NEXT</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subsolana'])){
                               $solana = htmlspecialchars($_POST['solana']);
                               
                                    ?>
                                   <form action="./deposit-confirm" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="solana" value="<?php echo $solana; ?>" readonly class="form-control" >
                                     <p><b>Limit:</b> 5  - 100000000 USD </p>
                                     <label for="" class=""><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000000" name="amount"  class="form-control" placeholder="Enter Amount" required>
                                        <input type="hidden" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="subsolana">NEXT</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subpm'])){
                               $pm = htmlspecialchars($_POST['PM']);
                               
                                    ?>
                                   <form action="./deposit-confirm" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="pm" value="<?php echo $pm; ?>" readonly class="form-control" >
                                   
                                    <p> <b>Limit:</b> 5  - 100000000 USD </p>
                                      <label for="" class="mt-2"><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000000" name="amount"  class="form-control" placeholder="Enter Amount" required>
                                        <input type="hidden" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="subpm">NEXT</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subBNB'])){
                               $BNB = htmlspecialchars($_POST['BNB']);
                               
                                    ?>
                                   <form action="./deposit-confirm" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="BNB" value="<?php echo $BNB; ?>" readonly class="form-control" >
                                   
                                    <p> <b>Limit:</b> 5  - 100000000 USD </p>
                                      <label for="" class="mt-2"><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000000" name="amount"  class="form-control" placeholder="Enter Amount" required>
                                        <input type="hidden" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="subBNB">NEXT</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subLITE'])){
                               $LITE = htmlspecialchars($_POST['LITE']);
                               
                                    ?>
                                   <form action="./deposit-confirm" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="LITE" value="<?php echo $LITE; ?>" readonly class="form-control" >
                                   
                                    <p> <b>Limit:</b> 5  - 100000000 USD </p>
                                      <label for="" class="mt-2"><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000000" name="amount"  class="form-control" placeholder="Enter Amount" required>
                                        <input type="hidden" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="subLITE">NEXT</button>
                                    </form>
                               <?php
                          }
                          else if(isset($_POST['subusdc'])){
                               $USDC = htmlspecialchars($_POST['USDC']);
                               
                                    ?>
                                   <form action="./deposit-confirm" id="form-data" method="POST">
                                    <label for="" class="mt-2"><b>GATEWAY</b></label>
                                    <input type="text" name="USDC" value="<?php echo $USDC; ?>" readonly class="form-control" >
                                   
                                    <p> <b>Limit:</b> 5  - 100000000 USD </p>
                                      <label for="" class="mt-2"><b>Amount($)</b></label>
                                    <input type="number" onkeypress="return isNumberKey(this, event);" min="5" max="100000000" name="amount"  class="form-control" placeholder="Enter Amount" required>
                                        <input type="hidden" id="userid" value="<?php echo $userid ?>">
                                        <button class="btn btn-success mt-2 btn-block" type="submit" name="subUSDC">NEXT</button>
                                    </form>
                               <?php
                          }
                          
                          
                          else{
                              
                        
                              
                              
                             echo  header("location:./deposit");
                              
                       
                              
                              
                          }
                          
                          ?>
                          
                
                        </div>
                        </div>
                                                
                </div>
            </div>
        </div>
        <!-- main content area end -->
      <?php require "./assets/template/footer.php" ?>
<script>
          function onlyNumberKey(evt) {
          // Only ASCII character in that range allowed
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
              return false;
          return true;
      }
    </script>
<script>
$("#deposit").addClass('active');
</script>
<script>
const $input_BT = $('#bnumber');
const $input_US = $('#amount');
const url = 'https://api.coindesk.com/v1/bpi/currentprice.json';

let rate;

function convertUS() {
   const value_to_us = this.value * rate;
   $input_US.val(value_to_us.toFixed(5));
}

function convertBT() {
   const value_to_bt = this.value / rate;
   $input_BT.val(value_to_bt.toFixed(5));
}

$.getJSON(url, function (data) {
   rate = data.bpi.USD.rate.replace(',', '');
});

$input_BT.on('input', convertUS);
$input_US.on('input', convertBT);
$('.form__add-btn').on('click', addUnit);
$('.form__clear-btn').on('click', clearAllValue);

</script>
<script>
 $(".currencyField").keyup(function(){ //input[name='calc']
 let convFrom;
 if($(this).prop("name") == "eth") {
       convFrom = "eth";
       convTo = "usd";
 }
 else {
       convFrom = "usd";
       convTo = "eth";
 }
 $.getJSON( "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=ethereum", 
    function( data) {
    var origAmount = parseFloat($("input[name='" + convFrom + "']").val());        
    var exchangeRate = parseInt(data[0].current_price);
    let amount;
    if(convFrom == "eth")
       amount = parseFloat(origAmount * exchangeRate);
    else
       amount = parseFloat(origAmount/ exchangeRate); 
    $("input[name='" + convTo + "']").val(amount.toFixed(7));
    price.innerHTML = amount
    });
});
</script>
