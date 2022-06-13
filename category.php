<?php include "header.php" ?>

<script type="text/javascript">
    function checkdelete() {
        return confirm("Are you sure you want to delete this record? If Yes then delete all record from product of this Category");
    }
</script>

<?php
    include "connect.php";
    if ($_GET) {
        $id=$_GET['id'];
        $nm=$_GET['nm'];
        $qry="DELETE FROM category_details WHERE Id='$id'";
        mysqli_query($conn,"DELETE FROM product_details WHERE cat_name= '$nm'");
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
    			<th width="25%">Category</th>
    			<th width="25%">Category code</th>
    			<th width="30%">Posting Date</th>
    			<th width="15%">Actions</th>
    		</tr>

            <?php
                $cnt=1; 
                include  'connect.php';
                $qry="SELECT * FROM category_details";
                $rs=mysqli_query($conn,$qry);
                while ($row=mysqli_fetch_assoc($rs)) {
                    $id=$row['Id'];
                    $nm=$row['C_name'];
                    $cd=$row['C_code'];
                    $pd=$row['Posting_Date'];
                    echo "<tr>";
                    echo "<td>".$cnt."</td>";
                    echo "<td>".$nm."</td>";
                    echo "<td>".$cd."</td>";
                    echo "<td>".$pd."</td>";
                    echo "<td><a style='color:Green' href='edit_cat.php?id=$id&cat_name=$nm&cat_code=$cd'>Edit</a>&nbsp;|&nbsp;<a style='color:Red' href='category.php?id=$id&nm=$nm' onclick='return checkdelete()'>Delete</a></td>";
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
    				<a href="add_category.php"><b>ADD CATEGORY</b></a>
    			</td>
    		</tr>
    	</table>
    </div>
</div>

<?php include "footer.php" ?>