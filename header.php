<?php
	session_start();
  if (!isset($_SESSION['nm'])) {
    header("location:index.php");
  }
?>
<html>
<head>
<style>
	<?php include "all.css" ?>
</style>
</head>
<body>
<div class="bd">
<div class="headers">
    <table cellpadding="10" width="100%"><tr><td width="90%"><font style="color: #003333; font-size: 40px; font-weight: bold; text-shadow: 3px 3px 3px #ababab">DAIRY FARM SHOP MANAGEMENT SYSTEM</font></td>
	<td align="center">Welcome <br><b><?php echo $_SESSION["nm"]; ?></b></td></tr></table>
</div>


<div class="navbar">
  <a href="home.php">Dashboard</a>
  <a href="sale_product.php">Sale Products</a>
  <a href="category.php">Category</a>
  <a href="company.php">Company</a>
  <a href="products.php">Products</a>
  <a href="about_us.php">About Me</a>
  <a style="position: absolute; right: 20px;" id="cart" href="MyCart.php">My Cart</a>
</div>