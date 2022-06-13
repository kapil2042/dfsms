<?php 
	session_start();
	include 'connect.php';
	$unm=$_POST["unm"];
	$pwd=$_POST["pwd"];
	$cnt=0;
	$qry="SELECT * from login_details;";
	$rs=mysqli_query($conn,$qry);
	while ($val=mysqli_fetch_assoc($rs)) {
		$u=$val["username"];
		$p=$val["password"];
		$m=$val["mobile_no"];
		$_SESSION["nm"]=$val["name"];
		if ($u==$unm || $m=$unm && $p==$pwd) {
			header("location:home.php");
			die();
		}
		else {
			$cnt++;
		}
	}
	if($cnt!=0)
	{
		header("location:index.php?err=1");
		die();
	}
?>