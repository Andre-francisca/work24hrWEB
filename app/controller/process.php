<?php

require "../include/db.php";


if(isset($_GET["page"]))
{
    $data = array();
    
    $limit = 8;
    
    $page = 1;
    
    // $page_array = array();
    
    if($_GET["page"] > 1)
    
    {
        $start = (($_GET["page"] - 1) * $limit);
        
        $page = $_GET["page"];
    }
    else
    {
        $start = 0;
    }
    $where = '';
    $search_query = '';
    
    
    
if(isset($_GET["jobtype"]))
{
    $jobtype_array = explode(",", $_GET["jobtype"]);
    
    $jobtype_condition = '' ;
    
    foreach($jobtype_array as $jobtype)
    {
        $jobtype_condition  .= 'wtype = "' .$jobtype. '" OR ';
    }
    
    $jobtype_condition = substr($jobtype_condition, 0, -4);
    
    if($where != '')
    {
        $where .= ' AND ('.$jobtype_condition.')';
    }
    else
    {
        $where .= $jobtype_condition;
    }
    
    $search_query .= '&jobtype='.$_GET["jobtype"] ;  
    
}

    
    if($where != ''){
        $where = 'WHERE '. $where;
    }else{
        
    }
     $query = "
        SELECT * FROM job_post j JOIN employers e ON j.emid = e.emid ".$where." ORDER BY jobid ASC 
    ";
    
    $filter_query = $query . ' LIMIT ' . $start . ', ' . $limit . '';
    
    // $statement  = $con->prepare($query);
    
    // $total_data = $statement->rowCount();
    
    // $result = $con->query($filter_query);
    
    
      $result = mysqli_query($con,$query);
      $result = mysqli_query($con,$filter_query);
     $total_data = mysqli_num_rows($result);
     
     foreach($result as $row)
     {
         $data[] = array(
             
             'jtitle'  => $row['jtitle'],
             'jobid'  => $row['jobid'],
             'jobfunction'  => $row['jobfunction'],
             'msalary'  => $row['msalary'],
             'loc'  => $row['loc'],
             'companylogo'  => $row['companylogo'],
             'jdate'  => $row['date'],
             'wtype'  => $row['wtype'],
             
             );
     }
     
     $pagination_html = '
         <div class="pagination-area pb-115 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="single-wrap d-flex justify-content-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-start">
     ';
     
     $total_links = ceil($total_data/$limit);
     
     $previous_link = '';
     
     $next_link = ''; 
     
     $page_link = '';
     

    //  $page_array = '';
  
     
     if($total_links > 4)
     
     {
         if($page < 5)
         {
             $page_array = Array();
             for($count = 1; $count <=5; $count++)
             {
                 $page_array[] = $count;
             }
             
             $page_array[] = '...';
             $page_array[] = $total_links;
         }
         else
         {
             $end_limit = $total_links - 5;
             
             if($page > $end_limit)
             {
                 $page_array[] = 1;
                 
                 $page_array[] = '...';
                 
                 for($count = $end_limit; $count <= $total_links; $count++)
                 {
                     $page_array[] = $count;
                 }
             }
             else
             {
                 $page_array[] = 1;
                  $page_array[] = '...';
                  
                  for($count = $page - 1; $count <= $page + 1; $count++)
                 {
                     $page_array[] = $count;
                 }
                 
                
                 $page_array[] = $total_links;
             }
         }
     }
     else
     {
         for($count = 1; $count <= $total_links; $count++)
         {
            
             $page_array[] = $count;
         }
     }
     
     for($count = 2; $count <= count($page_array); $count++)
     {
           $page_array = Array();
          
         if($page == $page_array[$count])
         {
             $page_link .='
              <li class="page-item active"><a class="page-link" href="#">'.$page_array[$count].'</a></li>
             ';
             
             $previous_id = $page_array[$count] - 1;
             
             if($previous_id > 0)
             {
                 $previous_link = '
                  <li class="page-item"><a class="page-link" href="javascript:load_product('.$previous_id.')">Previous</a></li>
                 ';
             }
             
              else
                 {
                      $previous_link = '
                          <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                         ';
                 }
                 
                 $next_id = $page_array[$count] + 1;
                 
                 if($next_id > $total_links)
                 {
                     $next_link = '
                      <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                     
                     ';
                 }
                 else
                 {
                      $next_link = '  
                      <li class="page-item "><a class="page-link" href="javascript:load_product('.$next_id.')">Next</a></li>
                     
                     ';
                 }
         }
         else
         {
              if($page_array[$count] == '...')
              {
                  $page_link .='
                  
                   <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                  
                  ';
              }
              else
              {
                  $page_link .='
                  
                   <li class="page-item "><a class="page-link" href="javascript:load_product('.$page_array[$count].')">'.$page_array[$count].'</a></li>
                  
                  ';
              }
         }
     }
     
     $pagination_html .= $previous_link . $page_link . $next_link;
     
     $pagination_html .='
     
     </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     
     ';
     
     $output = array(
         
         'data'  => $data,
         'pagination' => $pagination_html,
         'total_data' => $total_data
         
         );
         
         echo json_encode($output);
    
    
}



?>