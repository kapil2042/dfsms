<?php include "header.php";
	include "connect.php";
?>


<div class="main">
    <div class="db">
		<table width=100% height=100% cellpadding=10px>
			<tr height=50%>
				<td style="color: #003333; align:center; font-size:25px;"><b>TOTAL SELL OF PRODUCTS</b></td>
			</tr>
			<tr>
				<td style="color: #003333;  font-size:50px;" align="right"><?php 	$rs4=mysqli_query($conn,"SELECT * FROM dashboard");
							$d=0;
                		  	while ($row=mysqli_fetch_assoc($rs4)) {
                		  		$d=$row['sell']+$d;
                    	} 
                    	echo $d;?></td>
			</tr>
		</table>
	</div>
	<div class="db">
		<table width=100% height=100% cellpadding=10px>
			<tr height=50%>
				<td style="color: #003333; align:center; font-size:25px;"><b>TOTAL PRODUCTS</b></td>
			</tr>
			<tr>
				<td style="color: #003333; font-size:50px;" align="right"><?php 	$rs1=mysqli_query($conn,"SELECT * FROM product_details");
							$a=0;
                		  	while ($row=mysqli_fetch_assoc($rs1)) {
                    		$a++;
                    	} 
                    	echo $a;?></td>
			</tr>
		</table>
	</div>
	<div class="db">
		<table width=100% height=100% cellpadding=10px>
			<tr height=50%>
				<td style="color: #003333; align:center; font-size:25px;"><b>TOTAL CATEGORY</b></td>
			</tr>
			<tr>
				<td style="color: #003333; font-size:50px;"align="right"><?php 	$rs2=mysqli_query($conn,"SELECT * FROM category_details");
							$b=0;
                		  	while ($row=mysqli_fetch_assoc($rs2)) {
                    		$b++;
                    	} 
                    	echo $b;?></td>
			</tr>
		</table>
	</div>
	<div class="db">
		<table width=100% height=100% cellpadding=10px>
			<tr height=50%>
				<td style="color: #003333; align:center; font-size:25px;"><b>TOTAL COMPANIES</b></td>
			</tr>
			<tr>
				<td style="color: #003333; font-size:50px;"align="right">
					<?php 	$rs3=mysqli_query($conn,"SELECT * FROM company_details");
							$c=0;
                		  	while ($row=mysqli_fetch_assoc($rs3)) {
                    		$c++;
                    	} 
                    	echo $c;?></td>
			</tr>
		</table>
	</div>
	<div class="db">
		<table width=100% height=100% cellpadding=10px>
			<tr height=50%>
				<td style="color: #003333; align:center; font-size:25px;"><b>TOTAL PROFITS</b></td>
			</tr>
			<tr>
				<td style="color: #003333; font-size:50px;"align="right"><?php 	$rs5=mysqli_query($conn,"SELECT * FROM dashboard");
							$e=0;
                		  	while ($row=mysqli_fetch_assoc($rs5)) {
                		  		$e=$row['profit']+$e;
                    	} 
                    	echo $e;?></td>
			</tr>
		</table>
	</div>
</div>


<?php include "footer.php" ?>