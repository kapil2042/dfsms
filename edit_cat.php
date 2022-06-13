<?php include "header.php" ?>

<?php
    include 'connect.php';
    $nm=$_GET['cat_name'];
    if ($_POST) {
        $cnm=$_POST['cn'];
        $cd=$_POST['cd'];
        $id=$_GET['id'];
        $pd=date("M-d-Y H:i:s",time());
        $qry="UPDATE category_details SET C_name = '$cnm' , C_code = '$cd' , Posting_Date = '$pd' WHERE Id = $id";
        mysqli_query($conn,"UPDATE product_details SET cat_name = '$cnm' WHERE cat_name = '$nm'");
        $rs=mysqli_query($conn,$qry);
        if ($rs) {
            echo '<script type="text/javascript">';
            echo 'if((alert("Record Updated"))!=0){
                window.location.href = "category.php";
            }';
            echo '</script>';
        }
    }
?>

<div class="main">
    <div class="main1">
    	<div class="a1">
            <form method="post">
        		<table align="center" style="margin-top: 50px;">
                    <tr>
                        <td width="50%"><b>Category:</b></td>
                        <td width="50%"><input type="text" name="cn" id="text" value="<?php echo $_GET['cat_name']; ?>" placeholder="Category Name" required></td>
                    </tr>
                    <tr>
                        <td><b>Category Code:</b></td>
                        <td><input type="text" name="cd" id="text" value="<?php echo $_GET['cat_code']; ?>" placeholder="Category Code" required></td>
                    </tr>
                    <tr><td height="20px"></td></tr>
                    <tr>
                        <td align="center" colspan="2"><input type="submit" value="UPDATE" name="add_c" id="btn_b" style="background: #003333; color: white;"></td>
                    </tr>
                </table>
            </form>
    	</div>
    	<div class="a2">
    		<table width="80%" class="tblBody" cellpadding="15px" cellspacing="15px" align="center">
    			<tr>
    				<td class="linkBody" width="100%" align="center">
    					<a href="category.php"><b>BACK</b></a>
    				</td>
    			</tr>
    		</table>
    	</div>
    </div>
</div>

<?php include "footer.php" ?>