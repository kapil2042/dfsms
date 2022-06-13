<?php
	session_start();
	$a1=$_SESSION['pcount'];
	$a2=$_SESSION['ntp'];
	include "connect.php";
	mysqli_query($conn,"INSERT INTO dashboard VALUES('$a1','$a2')");
		mysqli_query($conn,"DELETE FROM cart");
		unset($_SESSION['cusn']);
		unset($_SESSION['cusmn']);
		unset($_SESSION['ntp']);
		unset($_SESSION['pcount']);
		echo '<meta http-equiv = "refresh" content = "1; url = home.php" />';
?>