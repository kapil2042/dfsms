<?php include "header.php" ?>


<?php
    include "connect.php";
    if (isset($_POST['pn'])) {
        $a=$_POST['cat'];
        $b=$_POST['com'];
        $c=$_POST['pn'];
        $d=$_POST['spqty'];
        $e=$_POST['price'];
        $f=$d*$e;
        $m=0;
        $r=mysqli_query($conn,"SELECT * FROM cart");
        while ($row1=mysqli_fetch_assoc($r)) {
            if ($c==$row1['p_name'] && $a==$row1['cat_name'] && $b==$row1['com_name']) {
                $nq=$row1['qty']+$d;
                $ntp=$row1['price']*$nq;
                mysqli_query($conn,"UPDATE cart SET qty='$nq' , total_price='$ntp' WHERE p_name='$c'");
                echo "<script>alert('Added into Cart');</script>";
                $m=1;
                break;
            }
            else{
                $m=0;
            }
        }
        if ($m==0) {
            $q="INSERT INTO cart values('$a','$b','$c','$d','$e','$f')";
            $rs=mysqli_query($conn,$q);
            echo "<script>alert('Added into Cart');</script>";
        }
    }


?>


<div class="main2">
    <table width="95%" class="sptbl" cellpadding="5">
    	<tr>
            <th width="5%" height="40px">#</th>
            <th width="25%">Product Name</th>
            <th width="15%">Category</th>
            <th width="15%">Company</th>
            <th width="15%">Price</th>
            <th width="10%">Qty</th>
            <th width="15%">Add to Cart</th>
        </tr>
            <?php
                $cnt=1; 
                include 'connect.php';
                $qry="SELECT * FROM product_details ORDER BY cat_name";
                $rs=mysqli_query($conn,$qry);
                while ($row=mysqli_fetch_assoc($rs)) {
                    $id=$row['Id'];
                    $cat=$row['cat_name'];
                    $com=$row['com_name'];
                    $pn=$row['p_name'];
                    $price=$row['price'];
                    $k=$row['qty'];
                    echo "<tr>";
                    echo '<form method="post">';
                    echo "<td><input type='hidden' name='cnt' value='$cnt'>".$cnt."</td>";
                    echo "<td><input type='hidden' name='pn' value='$pn'>".$pn."</td>";
                    echo "<td><input type='hidden' name='cat' value='$cat'>".$cat."</td>";
                    echo "<td><input type='hidden' name='com' value='$com'>".$com."</td>";
                    echo "<td><input type='hidden' name='price' value='$price'>".$price."/-</td>";
                    echo "<td><select name='spqty' class='sptxt'>";
                    for($i=1;$i<=$k;$i++){
                    echo "<option>".$i."</option>";}
                    echo "</select></td>";
                    echo '<td><input type="submit" name="spbtn" value="Add To Cart" class="spbtn"></td>';
                    echo "</form>";
                    echo "</tr>";
                    $cnt++;
                }
            ?>
    </table>
</div>

<?php include "footer.php" ?>