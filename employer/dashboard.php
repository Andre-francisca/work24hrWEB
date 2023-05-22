<?php require "./assets/template/header.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
 <?php 
 require "./assets/template/header-start.php";
         ?>
          <?php
                  $title = 'Dashboard';
            ?>
            <!-- header area end -->
            <!-- page title area start -->
           <?php  require "./assets/template/title.php"; ?>
            <!-- page title area end -->
            <div class="container-fluid">
         
                <!--<div class="alert alert-info mt-4" role="alert">-->
                <!--  A simple info alert—check it out!-->
                <!--</div>-->

                <!--<div class="mt-4">-->
                <!--    <div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"></div></div>-->
                <!--</div>-->
                <!-- MAIN CONTENT GOES HERE -->
                <!--<label for="" class="mt-2"><b><h4>Referral link</h4></b> </label>-->
                <!--     <div class="input-group mb-2">-->
                <!--    <input type="text" id="foo" readonly class="form-control mr-2 " value="https://www.work24hr.com/register?ref=<?php echo $fname ?>"   aria-describedby="button-addon2">-->
                <!--    <button class="btn btn-dark" type="button"  text-sm data-clipboard-target="#foo"><small><i class="ti-clipboard" style="font-size:13px"></i>&nbsp; Copy </small></button>-->
                <!--    </div>-->
                    
                    
                     <div class="row">
                   
                    <div class="col-12 mt-5">
                       
                                
                    <div class="row mt-3"> 
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card bg-dark  shadow h-100 py-2" style="border-bottom:3px solid #ff6601">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color:#ff6601">
                                        Job Posts
                                        </div>
                                      
                                        <div class="h5 mb-0 font-weight-bold text-white" style="color:#fff!important">
                                         
                                            <?php   echo totaljobs() ?>
                                        
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="ti-blackboard  text-gray-300"  style="font-size:60px;color:#fff"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

               
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card bg-dark  shadow h-100 py-2" style="border-bottom:3px solid #ff6601">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color:#ff6601">Job Applications</div>
                                        <div class="h5 mb-0 font-weight-bold text-white"><?php echo totaljobapp() ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="ti-clipboard  text-gray-300" style="font-size:60px;color:#fff" ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  


                    <!--<div class="col-xl-3 col-md-6 mb-4">-->
                    <!--    <div class="card bg-dark  shadow h-100 py-2" style="border-bottom:3px solid #6fa491">-->
                    <!--        <div class="card-body">-->
                    <!--            <div class="row no-gutters align-items-center">-->
                    <!--                <div class="col mr-2">-->
                    <!--                    <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color:#6fa491">-->
                    <!--                       Total Profit </div>-->
                    <!--                    <div class="h5 mb-0 font-weight-bold text-white">$<?php echo number_format(22222, 2, '.', ',') ; ?></div>-->
                    <!--                </div>-->
                    <!--                <div class="col-auto">-->
                    <!--                    <i class="ti-bar-chart  text-gray-300" style="font-size:60px;color:#fff"></i>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->


                    </div>
                                
                               
                        </div>
                        </div>
                        
                        
            </div>
        </div>
        <!-- main content area end -->
<?php require "./assets/template/footer.php" ?>
<?php
      echo "<script>$('#dashboard').addClass('active')</script>";
?>
        <script>
var clipboard = new ClipboardJS('.btn');
clipboard.on('success', function(e) {
    console.info('Action:', e.action);
    console.info('Text:', e.text);
    console.info('Trigger:', e.trigger);
    
    alert("Copied the text: " + e.text);

    e.clearSelection();
});

clipboard.on('error', function(e) {
    console.error('Action:', e.action);
    console.error('Trigger:', e.trigger);
});
</script>