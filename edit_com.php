<?php include "header.php" ?>

<?php
    include 'connect.php';
    $nm=$_GET['com_name'];
    if ($_POST) {
        $cnm=$_POST['com_n'];
        $id=$_GET['id'];
        $pd=date("M-d-Y H:i:s",time());
        $qry="UPDATE company_details SET com_name = '$cnm' , Posting_Date = '$pd' WHERE Id = $id";
        mysqli_query($conn,"UPDATE product_details SET com_name = '$cnm' WHERE com_name = '$nm'");
        $rs=mysqli_query($conn,$qry);
        if ($rs) {
            echo '<script type="text/javascript">';
            echo 'if((alert("Record Updated"))!=0){
                window.location.href = "company.php";
            }';
            echo '</script>';
        }
    }
?>



<div class="main">
    <div class="a1">
    		<form method="post">
                <table align="center" style="margin-top: 50px;">
                    <tr>
                        <td width="50%"><b>Company Name:</b></td>
                        <td width="50%"><input type="text" name="com_n" value="<?php echo $_GET['com_name']; ?>" id="text" placeholder="Company Name" required></td>
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
    					<a href="company.php"><b>BACK</b></a>
    				</td>
    			</tr>
    		</table>
    	</div>
</div>

<?php include "footer.php" ?>