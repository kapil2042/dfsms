<?php 
	session_start();
	include "connect.php";
?>
<html>

	<head>
	<title>Simple invoice in PHP</title>
		<script type="text/javascript">
			function printpdf() {
				window.print();
			}
			
		</script>
		<style type="text/css">
		<?php include "all.css"; ?>
		body {		
			font-family: Verdana;
		}
		
		div.invoice {
		border:1px solid #ccc;
		padding:10px;
		height:500pt;
		width:90%;
		margin:2.5%;
		}

		div.company-address {
			border:0px solid #ccc;
			float:left;
			width:200pt;
		}
		
		div.invoice-details {
			border:0px solid #ccc;
			float:right;
			width:200pt;
		}
		
		div.customer-address {
			border:0px solid #ccc;
			float:left;
			margin-bottom:50px;
			margin-top:100px;
			width:200pt;
		}
		
		div.clear-fix {
			clear:both;
			float:none;
		}
		
		table {
			width:100%;
		}
		
		th {
			text-align: left;
		}
		
		td {
		}
		
		.text-left {
			text-align:left;
		}
		
		.text-center {
			text-align:center;
		}
		
		.text-right {
			text-align:right;
		}
		
		</style>
	</head>

	<body>
	<div class="invoice">
		<div class="company-address">
			<b>Dairy Farm Shop Managment System</b>
		</div>
	
		<div class="invoice-details">
			Date: <?php echo date("d/m/Y") ?>
		</div>
		
		<div class="customer-address">
			<b>To:</b>
			<?php echo $_SESSION['cusn']; ?>
			,<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['cusmn']; ?>
		</div>
		
		<div class="clear-fix"></div>
			<table border='1' cellspacing='0'>
				<tr>
					<th width=250>Product Name</th>
					<th width=80>Qty</th>
					<th width=100>Unit price</th>
					<th width=100>Total price</th>
				</tr>

			<?php
			$qry="SELECT * FROM cart ORDER BY cat_name";
                $rs=mysqli_query($conn,$qry);
                $_SESSION['pcount']=0;
                while ($row=mysqli_fetch_assoc($rs)) {
                    $cat=$row['cat_name'];
                    $com=$row['com_name'];
                    $pn=$row['p_name'];
                    $price=$row['price'];
                    $qty=$row['qty'];
                    $tp=$row['total_price'];
                    $_SESSION['pcount']=$_SESSION['pcount']+$qty;
					echo "<tr>";
					echo "<td>$pn</td>";
					echo "<td class='text-center'>$qty</td>";
					echo "<td class='text-right'>$price</td>";
					echo "<td class='text-right'>$tp</td>";
					echo "</tr>";
				}
			
			
			echo "<tr>";
			echo "<td colspan='3' class='text-right'><b>TOTAL</b></td>";
			echo "<td class='text-right'><b>" .$_SESSION['ntp']. "</b></td>";
			echo "</tr>";
			?>
			</table>
			<br><br><br>
			<form method="post">
				<input type="submit" name="p" value="Print" id="btn_b" style="background: #ffffff; color: black;" onclick="return printpdf()">
				<input type="submit" name="bb" value="Back" id="btn_b" style="background: #ffffff; color: black;" onclick="return b()">
				
			</form>
		</div>
	</body>

<?php
	if (isset($_POST['p'])) {
		echo '<meta http-equiv = "refresh" content = "1; url = destroy.php" />';
	}
?>
</html>