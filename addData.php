<?php
	session_start();
	include "connect.php";
	$ynm=$_POST["ynm"];
	$mn=$_POST["mn"];
	$unm=$_POST["unm"];
	$pwd=$_POST["pwd"];
	$cpwd=$_POST["cpwd"];

	if ($pwd == $cpwd) {
		$qry="INSERT into login_details(username,password,name,mobile_no) values('$unm','$pwd','$ynm','$mn');";
	}
	else{
		header("location:createAcc.php?err=1");
		die();
	}
	$rs=mysqli_query($conn,$qry);
	if ($rs>0) {
		$_SESSION["nm"]=$ynm;
		header("location:createAcc.php?err=2");
		die();
	}
	else{
		header("location:createAcc.php?err=3");
		die();
	}
?>