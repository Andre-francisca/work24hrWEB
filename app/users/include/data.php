<?php
require "../include/db.php";
?>

<?php

function totalwithdrawal(){
	$userid = $_SESSION['userid'];
	// print_r($_SESSION);
	global $con;
	$sql ="SELECT SUM(amount) as total FROM withdrawal WHERE userID ='$userid' AND status='Confirmed'";
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
function totaldeposit(){
	$userid = $_SESSION['userid'];
	// print_r($_SESSION);
	global $con;
	$sql ="SELECT SUM(USD) as total FROM deposit WHERE userID ='$userid' AND status='Confirmed'";
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
		
// function totalloan(){
// 	$username = $_SESSION['username'];
// 	// print_r($_SESSION);
// 	global $con;
// 	$sql ="SELECT SUM(amount) as total FROM loan WHERE username ='$username' AND status='Approved'";
// 	$result = mysqli_query($con,$sql);
// 	$num = mysqli_num_rows($result);
//     if($num>0){
// 		while($row = mysqli_fetch_assoc($result)){
// 			$num = $row['total'];
// 			if($num){
// 				return $num;
// 			}
// 			else{
// 				return '0.0';
// 			}
		
// 				}
// 	}

// 		}
function investmentprofit(){
	$userid = $_SESSION['userid'];
	// print_r($_SESSION);
	global $con;
	$sql ="SELECT SUM(totalProfit) as total  FROM investment WHERE userId ='$userid'";
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
function totalmessage(){
	$userid = $_SESSION['userid'];
	// print_r($_SESSION);
	global $con;
	$sql ="SELECT COUNT(*) as total FROM messages WHERE userid ='$userid' AND status='read'";
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