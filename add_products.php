<?php include "header.php" ?>

<?php
    include 'connect.php';

    if ($_POST) {
        $cat=$_POST['cat'];
        $com=$_POST['com'];
        $pn=$_POST['pn'];
        $qty=$_POST['qty'];
        $price=$_POST['price'];
        
        $qry="INSERT into product_details(cat_name,com_name,p_name,qty,price) values ('$cat','$com','$pn','$qty','$price')";
        $rs=mysqli_query($conn,$qry);
        if ($rs==0) {
            echo '<script type="text/javascript">';
            echo 'alert("Duplicate Record")';
            echo '</script>';
        }
        else{
            echo '<script type="text/javascript">';
            echo 'if((alert("Record insert successfully"))!=0){window.location.href = "products.php";}';
            echo '</script>';
        }
    }
    
?>

<div class="main">
    <div class="a1">
    	<form action="add_products.php" method="post">
                <table align="center" style="margin-top: 50px;">
                    <tr>
                        <td width="50%"><b>Category:</b></td>
                        <td width="50%"><select id="Stext" name="cat"><option>-------Select-------</option>
                            <?php
                                include  'connect.php';
                                $qry="SELECT * FROM category_details";
                                $rs=mysqli_query($conn,$qry);
                                while ($row=mysqli_fetch_assoc($rs)) {                                
                                    echo "<option>".$row['C_name']."</option>";
                                }
                            ?>
                        </select></td>
                    </tr>
                    <tr>
                        <td><b>Company:</b></td>
                        <td><select id="Stext" name="com"><option>-------Select-------</option>
                            <?php
                                include  'connect.php';
                                $qry="SELECT * FROM company_details";
                                $rs=mysqli_query($conn,$qry);
                                while ($row=mysqli_fetch_assoc($rs)) {                                    
                                    echo "<option>".$row['com_name']."</option>";
                                }
                            ?>
                        </select></td>
                    </tr>
                    <tr>
                        <td><b>Product Name:</b></td>
                        <td><input type="text" name="pn" id="text" placeholder="Product Name" required></td>
                    </tr>
                    <tr>
                        <td><b>Total Qty:</b></td>
                        <td><input type="text" name="qty" id="text" placeholder="Total Qty" required></td>
                    </tr>
                    <tr>
                        <td><b>Price Per Qty:</b></td>
                        <td><input type="text" name="price" id="text" placeholder="Price Per Qty" required></td>
                    </tr>
                    <tr><td height="20px"></td></tr>
                    <tr>
                        <td align="center" colspan="2"><input type="submit" value="ADD" name="add_c" id="btn_b" style="background: #003333; color: white;"></td>
                    </tr>
                </table>
            </form>
    </div>
    <div class="a2">
    	<table width="80%" class="tblBody" cellpadding="15px" cellspacing="15px" align="center">
    		<tr>
    			<td class="linkBody" width="100%" align="center">
    				<a href="products.php"><b>BACK</b></a>
    			</td>
    		</tr>
    	</table>
    </div>
</div>

<?php include "footer.php" ?>