<?php include "header.php" ?>

<script type="text/javascript">
    function checkdelete() {
        return confirm("Are you sure you want to delete this record??");
    }
</script>

<?php
    include "connect.php";
    if ($_GET) {
        $id=$_GET['id'];
        $qry="DELETE FROM product_details WHERE Id='$id'";
        $rs=mysqli_query($conn,$qry);
        if ($rs) {
            echo "<script>confirm('Are You Sure?'')</script>";
        }
    }
?>

<div class="main">
    <div class="a1">
    	<table class="sptbl" cellpadding="5" width="96%">
            <tr>
                <th width="5%">#</th>
                <th width="15%">Category</th>
                <th width="15%">Company</th>
                <th width="25%">Product Name</th>
                <th width="15%">Available Qty</th>
                <th width="10%">Price</th>
                <th width="15%">Actions</th>
            </tr>
            <?php
                $cnt=1; 
                include  'connect.php';
                $qry="SELECT * FROM product_details";
                $rs=mysqli_query($conn,$qry);
                while ($row=mysqli_fetch_assoc($rs)) {
                    $id=$row['Id'];
                    $cat=$row['cat_name'];
                    $com=$row['com_name'];
                    $pn=$row['p_name'];
                    $qty=$row['qty'];
                    $price=$row['price'];
                    echo "<tr>";
                    echo "<td>".$cnt."</td>";
                    echo "<td>".$cat."</td>";
                    echo "<td>".$com."</td>";
                    echo "<td>".$pn."</td>";
                    echo "<td>".$qty."&nbsp&nbsp&nbsp;<a style='color:Blue' href='addQty.php?id=$id&qty=$qty'>Add</a></td>";
                    echo "<td>".$price."/-</td>";
                    echo "<td><a style='color:Green' href='edit_p.php?id=$id&cat_name=$cat&com_name=$com&pn=$pn&price=$price'>Edit</a>&nbsp;|&nbsp;<a style='color:Red' href='products.php?id=$id' onclick='return checkdelete()'>Delete</a></td>";
                    echo "</tr>";
                    $cnt++;
                }
            ?>

        </table>	
    	</div>
    	<div class="a2">
    		<table width="80%" class="tblBody" cellpadding="15px" cellspacing="15px" align="center">
    			<tr>
    				<td class="linkBody" width="100%" align="center">
    					<a href="add_products.php"><b>ADD PRODUCT</b></a>
    				</td>
    			</tr>
    		</table>
    	</div>
</div>

<?php include "footer.php" ?>