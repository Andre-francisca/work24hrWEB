<?php require "./assets/template/header.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
   <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php
                  $title = 'Investment-Plans';
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
                                  INVESTMENT PLANS
                                <ul class="d-flex justify-content-end">
                                    <li class="mr-3"><a href="javascript:" class="text-success"><i class="ti-package " ></i></a></li>
                                </ul>
                                </div>
                                <div class="row">
                                <div class="col-lg-12">
                                    <label><h5>Wallet Balance</h5></label>
                                    <div class="form-group">
                                        <input class="form-control" readonly value="$<?php echo number_format($balance, 2, '.', ',') ?>">
                                    </div>
                <section class="pricing-section alternate">
		<div class="auto-container">
			<!-- Sec Title -->
			<!--<div class="sec-title centered">-->
			<!--	<div class="title"></div>-->
			<!--	<h2>Our Investment Plans</h2>-->
			<!--	<div class="text">You do not need to wait forever before you can start seeing returns on your investments. Everything happens instantly; no delays, no stories.</div>-->
			<!--</div>-->
			
			<!--Pricing Info Tabs-->
			<div class="pricing-info-tabs">
				<!--Pricing Tabs-->
				<div class="pricing-tabs tabs-box">
				
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<!--Tab / Active Tab-->
						<div class="tab active-tab" id="package-monthly">
							<div class="content">
								<div class="row clearfix">
									
									<!-- Price Block -->
									<div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											<!-- Title Box -->
											<div class="title-box">
												<h5>Primary Plan</h5>
												<div class="text"></div>
											</div>
											<div class="price">1%  <span>daily profit</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li class="">Minimum Deposit: $30</li>
													<li class="">Maximum Deposit: $199</li>
													<li>Duration: 14 days</li>
													<li>Capital Return After: 14 days</li>
													<li>Referral Commission: 8%</li>
													<li>Instant Withdrawals</li>
												</ul>
												<form method="POST" id="form-starter">
												      <input type="hidden" name="userid" id="userid" value="<?php echo $uid ?>">
												      <input type="hidden" name="plan" id="plan" value="primary-plan">
													    <center><label><b>Enter Investment Amount</b></label></center>
													    <input class="form-control" type="number" name="amount" id="amount">
													     <p class="text-danger" id="amountError"></p>
													    <br>
													    <center><button type="submit" id="primary" class="btn btn-success">INVEST</button> </center>
													    
													</form>
											</div>
										</div>
									</div>
										<!-- Price Block -->
										<div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
											<div class="inner-box">
												<!--<div class="recomend">Popular</div>-->
												<!-- Title Box -->
												<div class="title-box">
													<h5>Standard Plan</h5>
													<div class="text"></div>
												</div>
												<div class="price">1.8%  <span>daily profit</span></div>
												<div class="lower-box">
													<ul class="price-list">
														<li class="">Minimum Deposit: $200</li>
														<li class="">Maximum Deposit: $4999</li>
														<li>Duration: 14 days</li>
														<li>Capital Return After: 14 days</li>
														<li>Referral Commission: 8%</li>
														<li>Instant Withdrawals</li>
													</ul>
											<form method="POST" id="form-standard">
												      <input type="hidden" name="userid" id="userid" value="<?php echo $uid ?>">
												      <input type="hidden" name="plan1" id="plan1" value="standard-plan">
													    <center><label><b>Enter Investment Amount</b></label></center>
													    <input class="form-control" type="number" name="amount1" id="amount1">
													     <p class="text-danger" id="amount1Error"></p>
													    <br>
													    <center><button type="submit" id="standard" class="btn btn-success">INVEST</button> </center>
													    
													</form>
												</div>
											</div>
										</div>
									<div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											<!-- Title Box -->
											<div class="title-box">
												<h5>Expert Plan</h5>
												<div class="text"></div>
											</div>
											<div class="price">2.3%  <span>daily profit</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li class="">Minimum Deposit: $5,000</li>
													<li class="">Maximum Deposit: $24,999</li>
													<li>Duration: 14 days</li>
													<li>Capital Return After: 14 days</li>
													<li>Referral Commission: 8%</li>
													<li>Instant Withdrawals</li>
												
												</ul>
												
												<form method="POST" id="form-expert">
												      <input type="hidden" name="userid" id="userid" value="<?php echo $uid ?>">
												      <input type="hidden" name="plan2" id="plan2" value="expert-plan">
													    <center><label><b>Enter Investment Amount</b></label></center>
													    <input class="form-control" type="number" name="amount2" id="amount2">
													     <p class="text-danger" id="amount2Error"></p>
													    <br>
													    <center><button type="submit" id="expert" class="btn btn-success">INVEST</button> </center>
													    
													</form>
											
											</div>
										</div>
									</div>
									
								
									
									<!-- Price Block -->
									<div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											<!-- Title Box -->
											<div class="title-box">
												<h5>Ultimate Plan</h5>
												<div class="text"></div>
											</div>
											<div class="price">2.6%  <span>daily profit</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li class="">Minimum Deposit: $25,000</li>
													<li class="">Maximum Deposit: $49,999</li>
													<li>Duration: 14 days</li>
													<li>Capital Return After: 14 days</li>
													<li>Referral Commission: 8%</li>
													<li>Instant Withdrawals</li>
												</ul>
													<form method="POST" id="form-ultimate">
												      <input type="hidden" name="userid" id="userid" value="<?php echo $uid ?>">
												      <input type="hidden" name="plan3" id="plan3" value="ultimate-plan">
													    <center><label><b>Enter Investment Amount</b></label></center>
													    <input class="form-control" type="number" name="amount3" id="amount3">
													     <p class="text-danger" id="amount3Error"></p>
													    <br>
													    <center><button type="submit" id="ultimate" class="btn btn-success">INVEST</button> </center>
													    
													</form>
											</div>
										</div>
									</div>
									<!-- Price Block -->
									<div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											<!-- Title Box -->
											<div class="title-box">
												<h5>Master Plan</h5>
												<div class="text"></div>
											</div>
											<div class="price">3%  <span>daily profit</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li class="">Minimum Deposit: $50,000</li>
													<li class="">Maximum Deposit: Unlimited</li>
													<li>Duration: 14 days</li>
													<li>Capital Return After: 14 days</li>
													<li>Referral Commission: 8%</li>
													<li>Instant Withdrawals</li>
												</ul>
											<form method="POST" id="form-master">
												      <input type="hidden" name="userid" id="userid" value="<?php echo $uid ?>">
												      <input type="hidden" name="plan4" id="plan4" value="master-plan">
													    <center><label><b>Enter Investment Amount</b></label></center>
													    <input class="form-control" type="number" name="amount4" id="amount4">
													     <p class="text-danger" id="amount4Error"></p>
													    <br>
													    <center><button type="submit" id="master" class="btn btn-success">INVEST</button> </center>
													    
													</form>
											</div>
										</div>
									</div>
									<div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											<!-- Title Box -->
											<div class="title-box">
												<h5>Savings Plan</h5>
												<div class="text"></div>
											</div>
											<div class="price">0.6%  <span>daily profit</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li class="">Minimum Deposit: $20</li>
													<li class="">Maximum Deposit: $49,999</li>
													<li>Duration: 30 days</li>
													<li>Capital Return After: 30 days</li>
													<li>Referral Commission: 8%</li>
													<li> Withdrawals: Monthly</li>
												</ul>
											<form method="POST" id="form-savings">
												      <input type="hidden" name="userid" id="userid" value="<?php echo $uid ?>">
												      <input type="hidden" name="plan5" id="plan5" value="savings-plan">
													    <center><label><b>Enter Investment Amount</b></label></center>
													    <input class="form-control" type="number" name="amount5" id="amount5">
													     <p class="text-danger" id="amount5Error"></p>
													    <br>
													    <center><button type="submit" id="savings" class="btn btn-success">INVEST</button> </center>
													    
													</form>
											</div>
										</div>
									</div>
									<div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											<!-- Title Box -->
											<div class="title-box">
												<h5>Mortgage Plan</h5>
												<div class="text"></div>
											</div>
											<div class="price">2%  <span>daily profit</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li class="">Minimum Deposit: $20,000</li>
													<li class="">Maximum Deposit: Unlimited</li>
													<li>Duration: 730 days</li>
													<li>Capital Return After: 730 days</li>
													<li>Referral Commission: 8%</li>
													<li>Instant Withdrawals</li>
												</ul>
											<form method="POST" id="form-mortgage">
												      <input type="hidden" name="userid" id="userid" value="<?php echo $uid ?>">
												      <input type="hidden" name="plan6" id="plan6" value="mortgage-plan">
													    <center><label><b>Enter Investment Amount</b></label></center>
													    <input class="form-control" type="number" name="amount6" id="amount6">
													     <p class="text-danger" id="amount6Error"></p>
													    <br>
													    <center><button type="submit" id="mortgage" class="btn btn-success">INVEST</button> </center>
													    
													</form>
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
	</section>
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
  $("#plans").addClass('active');
  </script> 