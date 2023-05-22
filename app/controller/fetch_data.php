<?php


require "../include/db.php";


if(isset($_POST["action"])){
    
    $query = "
        SELECT * FROM job_post j JOIN employers e ON j.emid = e.emid WHERE status = '1'
    ";
    
    
    if(isset($_POST["industry"])){
        
        $industry_filter = implode("','", $_POST["industry"]);
        $query .="
        AND cindustry IN('".$industry_filter."')
        ";
    }
    
     if(isset($_POST["location"])){
        
        $location_filter = implode("','", $_POST["location"]);
        $query .="
        AND loc IN('".$location_filter."')
        ";
    }
     if(isset($_POST["jobFunction"])){
        
        $jobFunction_filter = implode("','", $_POST["jobFunction"]);
        $query .="
        AND jobfunction IN('".$jobFunction_filter."')
        ";
    }
    if(isset($_POST["jobtype"])){
        
        $jobtype_filter = implode("','", $_POST["jobtype"]);
        $query .="
        AND wtype IN('".$jobtype_filter."')
        ";
    }
    
   
    
      if(isset($_POST["latest"])){
        
        
        $query .="
        ORDER BY jobid DESC 
        ";
    }
 
    
    $result = mysqli_query($con,$query);
    $num = mysqli_num_rows($result);
    // $statement = $con->prepare($query);
    // $statement->execute();
    // $result = $statement->fetchAll();
    // $total_row = $statement->rowCount();
    $output = '';
    
    if($num > 0){
        
        foreach($result as $row)
        {
            $output .='
             <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                      <a href="job_details.html"><img src="https://work24hr.com/employer/upload/'.$row["companylogo"].'" style="" alt="" /></a>
                                    </div>
                                    <div class="job-tittle">
                                        <a href="./job_details?job='.$row['jobid'].'"><h4>'.$row['jtitle'].'</h4></a>
                                        <ul>
                                            <li>'.$row['jobfunction'].'</li>
                                            <li><i class="fas fa-map-marker-alt"></i>&nbsp;'.$row['loc'].'</li>
                                            <li> GH₵'.$row['msalary'].'</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link f-right">
                                    <a href="job_details.html?job='.$row['jobid'].'">'.$row['wtype'].'</a>
                                    <span>

                                        '.$row['date'].'
                                    
                                    </span>
                                </div>
                            </div>
            ';
        }
    }
    else
    {
        $output = '<center><h3>No Job Found</h3></center>';
    }
    
    echo $output;
    
}


?>