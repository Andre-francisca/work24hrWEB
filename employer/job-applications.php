<?php require "./assets/template/header.php" ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
   <?php require "./assets/template/header-start.php" ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php
                  $title = 'Job-Applications';
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
                                <i class="fa fa-edit"></i>
                            
                            <span class="text" style="font-size:16px">Manage Job Applications</span>
                        </a>
                        
                         
                        </div>
                        
                      
                        <div class="  my-5 ">
                            
                                  <div class="table-responsive mt">
                        <table class="table table-striped table-bordered" id="transin" cellspacing="" width="100%">
                                    <thead style="background:#222d32;color:#fff;">
                                    <tr>
                                    <th>Jobtitle</th>
                                    <th>Applicant</th>
                                    <th>App Email</th>
                                    <th>Date Applied</th>
                                    <th>CV</th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                    
                                    <!--<th>Amount(ETH)</th>-->
                                    <th>Action</th>
                                  
                                    
                                    </thead>
                                <tbody> 

                                    <?php
                                    $sql = "SELECT * FROM job_application j join job_post jp ON j.jobid = jp.jobid JOIN users u ON j.user_id = u.user_id  WHERE j.emid = '$eid'";
                                    $result = mysqli_query($con,$sql);
                                    if($result){
                                    while($rows = mysqli_fetch_array($result)){
                                    //   $rows = mysqli_fetch_assoc($result);
                                            $jobappid = $rows['app_id'];
                                            $jobtitle = $rows['jtitle'];
                                            // $applicant = $rows[''];
                                            $email = $rows['email'];
                                            $cv = $rows['cvfile'];
                                            $date = $rows['date_applied'];
                                            $status = $rows['statusapp'];
                                            $fname = $rows['firstname'];
                                        
                                   
                                    //   $date = date("F j, Y");
                                    echo "<tr>";
                                    echo "<td><b style='text-transform:uppercase'>".$jobtitle."</b></td>";
                                    echo "<td>".$fname."</td>";
                                    echo "<td>".$email."</td>";
                                    echo "<td>".$date."</td>";
                                    echo "<td><a href='https://www.work24hr.com/app/upload/$cv' download>".$cv."<br> Download</a></td>";
                                    echo "<td>".$status."</td>";
                                   
                                   
                                    ?>
                                    
                                    <td><button class='btn btn-success remark_data' id="<?php echo $jobappid ?>"><i class='ti-check-box'></i>&nbsp;Remark </button></td>
                                    <td><button class='btn btn-danger delete_data' id="<?php echo $jobappid ?>"><i class='ti-power-off'></i>&nbsp;Delete </button></td>
                                    
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
        </div>
        
        
           <div class="modal fade" id="job_Modal">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-check"></i>&nbsp;Reply</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                          <center><div id="loader2"></div></center>
                                         
                                        <form id="reply_form" method="POST">
                                            <idv class="row">
                                                  <div class="form-group col">
                                                    <label><i class="fa fa-list-ul"></i>&nbsp;Applicant</label>
                                                    <input type="text" name="applicant" id="applicant" class="form-control" readonly>
                                               </div>
                                            <div class="form-group col">
                                                    <label><i class="fa fa-list-ul"></i>&nbsp;email</label>
                                                    <input type="text" name="email" id="email" class="form-control" readonly>
                                               </div>
                                            </idv>
                                          
                                            <div class="form-group">
                                                    <label><i class="fa fa-list-ul"></i>&nbsp; Applied Date </label>
                                                    <input type="text" name="adate" id="adate" class="form-control" readonly>
                                               </div>
                                            <div class="form-group">
                                                    <label><i class="fa fa-list-ul"></i>&nbsp; Status </label>
                                                    <input type="text" name="status" id="status" class="form-control" readonly>
                                               </div>
                                            <div class="form-group">
                                                   <label for="">Reply</label>
                                                    <textarea id="m" name="m" class="form-control mb-3" placeholder="Enter Reply" style="height: 100px" required></textarea>
                                               </div>
                                               
                                               <input type="hidden" name="appid" id="appid" >
                                             
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
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
    $('#transin').append('<caption style="caption-side: top">work24hr &copy.</caption>');
  
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
   <script>
          var $ckfield = CKEDITOR.replace( 'jobdesc' );

                $ckfield.on('change', function() {
                   $("#jobdescError").html("");
                  $ckfield.updateElement();         
                });
     </script>