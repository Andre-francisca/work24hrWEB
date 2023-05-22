 <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span><?php echo $title ?></span></li>
                                
                                  
                            
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <?php
                                    if($clogo !=""){
                                        ?>
                                        
                                         <img class="avatar user-thumb" src="./upload/<?php  echo $clogo ?>" alt="profile logo">
                                        
                                        <?php
                                    }else{
                                        
                                        ?>
                                        
                                         <img class="avatar user-thumb" src="./upload/demoimage.png" alt="profile logo">
                                        
                                        <?php
                                    }
                            
                            ?>
                             
                             <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Hello, <?php echo "<b>".$fname."</b>" ?><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                          
                                <a class="dropdown-item" href="./settings">Settings</a>
                                <a class="dropdown-item" href="./logout">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>