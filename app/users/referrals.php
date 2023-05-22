<?php require "./assets/template/header.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
   <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php
                  $title = 'Referrals';
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
                                <i class="ti-face-smile"></i>
                            </span>
                            <span class="text">Referred Users </span>
                        </a>
                        </div>
                        
                      

                        <div class="table-responsive mt">
                        <table class="table table-striped table-bordered" id="transwithdrawal" cellspacing="" width="100%">
                                    <thead style="background:#222d32;color:#fff;">
                                    <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Registered Date</th>
                                   
                                  
                                    
                                    </thead>
                                <tbody> 

                                    <?php
                                    $c = 1;
                                    $sql = "SELECT * FROM users WHERE referredby = '$username'";
                                    $result = mysqli_query($con,$sql);
                                    if($result){
                                    while($row = mysqli_fetch_array($result)){
                                    //   $date = date("F j, Y");
                                    echo "<tr>";
                                    echo "<td>".$c++."</td>";
                                    echo "<td>".$row['username']."</td>";
                                    echo "<td>".$row['regdate']."</td>";
                                    
                                            
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
        <!-- main content area end -->
      <?php require "./assets/template/footer.php" ?>
      <script>
  $("#ref").addClass('active');
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