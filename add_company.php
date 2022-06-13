<?php include "header.php" ?>

<?php
    include 'connect.php';

    if ($_POST) {
        $cnm=$_POST['com_n'];
        $pd=date("M-d-Y H:i:s",time());
        $qry="INSERT into company_details(com_name,Posting_Date) values ('$cnm','$pd')";
        $rs=mysqli_query($conn,$qry);
        if ($rs==0) {
            echo '<script type="text/javascript">';
            echo 'alert("Duplicate Record")';
            echo '</script>';
        }
        else{
            echo '<script type="text/javascript">';
            echo 'if((alert("Record insert successfully"))!=0){window.location.href = "company.php";}';
            echo '</script>';
        }
    }
    
?>


<div class="main">
    <div class="a1">
    		<form action="add_company.php" method="post">
                <table align="center" style="margin-top: 50px;">
                    <tr>
                        <td width="50%"><b>Company Name:</b></td>
                        <td width="50%"><input type="text" name="com_n" id="text" placeholder="Company Name" required></td>
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
    					<a href="company.php"><b>BACK</b></a>
    				</td>
    			</tr>
    		</table>
    	</div>
</div>

<?php include "footer.php" ?>