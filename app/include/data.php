<?php

require "./include/db.php";
?>

<?php

function countIT(){
	
	// print_r($_SESSION);
	global $con;
	$sql ="SELECT COUNT(*) AS total FROM job_post WHERE cindustry ='IT & Telecoms'";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
    if($num>0){
		while($row = mysqli_fetch_assoc($result)){
			$num = $row['total'];
			if($num){
				return $num;
			}
			else{
				return '0';
			}
			
		
				}
	}

		}
		
		
function countCreative(){

	// print_r($_SESSION);
	global $con;
	$sql ="SELECT COUNT(*) AS total FROM job_post WHERE jobfunction ='Creative & Design'";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
    if($num>0){
		while($row = mysqli_fetch_assoc($result)){
			$num = $row['total'];
			if($num){
				return $num;
			}
			else{
				return '0.0';
			}
		
				}
	}

		}
		
function countConstruction(){
	// print_r($_SESSION);
	global $con;
	$sql ="SELECT COUNT(*) AS total FROM job_post WHERE cindustry ='Construction'";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
    if($num>0){
		while($row = mysqli_fetch_assoc($result)){
			$num = $row['total'];
			if($num){
				return $num;
			}
			else{
				return '0.0';
			}
		
				}
	}

		}
function countEstate(){
	
	// print_r($_SESSION);
	global $con;
	$sql ="SELECT COUNT(*) AS total FROM job_post WHERE cindustry ='Real Estate'";
	$result = mysqli_query($con,$sql);
	
    if($result){
		while($row = mysqli_fetch_assoc($result)){
			$num = $row['total'];
			if($num){
				return $num;
			}
			else{
				return '0.0';
			}
		
				}
	}
	else{
		return '0.0';
	}

		}
		
function countContent(){
	
	// print_r($_SESSION);
	global $con;
	$sql ="SELECT COUNT(*) AS total FROM job_post WHERE cindustry ='Entertainment, Events & Sport'";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
    if($num>0){
		while($row = mysqli_fetch_assoc($result)){
			$num = $row['total'];
			if($num){
				return $num;
			}
			else{
				return '0';
			}
		
				}
	}

		}
function countMarket(){
	
	// print_r($_SESSION);
	global $con;
	$sql ="SELECT COUNT(*) AS total FROM job_post WHERE jobfunction ='Marketing & Communications'";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
    if($num>0){
		while($row = mysqli_fetch_assoc($result)){
			$num = $row['total'];
			if($num){
				return $num;
			}
			else{
				return '0';
			}
		
				}
	}

		}
function countBuild(){
	
	// print_r($_SESSION);
	global $con;
	$sql ="SELECT COUNT(*) AS total FROM job_post WHERE jobfunction ='Building & Architecture'";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
    if($num>0){
		while($row = mysqli_fetch_assoc($result)){
			$num = $row['total'];
			if($num){
				return $num;
			}
			else{
				return '0';
			}
		
				}
	}

		}
function countMobileApp(){
	
	// print_r($_SESSION);
	global $con;
	$sql ="SELECT COUNT(*) AS total FROM job_post WHERE jobfunction ='Software & Data'";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
    if($num>0){
		while($row = mysqli_fetch_assoc($result)){
			$num = $row['total'];
			if($num){
				return $num;
			}
			else{
				return '0';
			}
		
				}
	}

		}
function countSales(){
	
	// print_r($_SESSION);
	global $con;
	$sql ="SELECT COUNT(*) AS total FROM job_post WHERE jobfunction ='Sales'";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
    if($num>0){
		while($row = mysqli_fetch_assoc($result)){
			$num = $row['total'];
			if($num){
				return $num;
			}
			else{
				return '0';
			}
		
				}
	}

		}
function countJobseekers(){
	
	// print_r($_SESSION);
	global $con;
	$sql ="SELECT COUNT(*) AS total FROM users ";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
    if($num>0){
		while($row = mysqli_fetch_assoc($result)){
			$num = $row['total'];
			if($num){
				return $num;
			}
			else{
				return '0';
			}
		
				}
	}

		}
function countEmployers(){
	
	// print_r($_SESSION);
	global $con;
	$sql ="SELECT COUNT(*) AS total FROM employers ";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
    if($num>0){
		while($row = mysqli_fetch_assoc($result)){
			$num = $row['total'];
			if($num){
				return $num;
			}
			else{
				return '0';
			}
		
				}
	}

		}
function countJobs(){
	
	// print_r($_SESSION);
	global $con;
	$sql ="SELECT COUNT(*) AS total FROM job_post ";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
    if($num>0){
		while($row = mysqli_fetch_assoc($result)){
			$num = $row['total'];
			if($num){
				return $num;
			}
			else{
				return '0';
			}
		
				}
	}

		}
?>