<script type="text/javascript">
    function clearcart() {
        return confirm("Are you sure you want to clear the cart??");
    }
</script>

<?php 
    include "header.php";
    include "connect.php";
    if (isset($_POST['canbtn'])) {
        mysqli_query($conn,"DELETE FROM cart");
    }
    if(isset($_POST['remove'])){
        $pn1=$_POST['pn'];
        mysqli_query($conn,"DELETE FROM cart WHERE p_name='$pn1'");
    }
    if (isset($_POST['sell'])) {
        $_SESSION['cusn']=$_POST['cusn'];
        $_SESSION['cusmn']=$_POST['cusmn'];
        echo "<script>location.href = 'invoice.php'</script>";
    }
 ?>

<div class="main">
    <?php
        if (isset($_POST['sbtn'])) {
            if (!isset($ntp)) {
                $ntp=0;
            }
    ?>
<div class="main2"> 
    <div class="a3">
        <form method="post">
        <table align="center">
            <tr>
                <td width="50%"><b>Customer Name:</b></td>
                <td width="50%"><input type="text" name="cusn" id="text" placeholder="Customer Name" required></td>
            </tr>
            <tr>
                <td><b>Customer Mobile Number:</b></td>
                <td><input type="text" name="cusmn" id="text" placeholder="Customer Mobile Number" required></td>
            </tr>
            <tr>
                <td><b>Total Pay Amount:</b></td>
                <td><input type="text" name="amount" id="text" value="<?php echo $_SESSION['ntp'] ?>" readonly></td>
            </tr>
            <tr><td height="20px"></td></tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" value="Get Bill" name="sell" id="btn_b" style="background: #003333; color: white;"></td>
            </tr>
        </table>
        </form>
    </div>
</div>
    <?php    
        }
        else{
    ?>
<div class="main3">
    <form method="post">
        <input type="submit" name="sbtn" class="cbtn" value="Sell">
        <input type="submit" name="canbtn" class="canbtn" value="Clear Cart" onclick="return clearcart()">
    </form>
</div>
<div class="main1"> 
    <table class="sptbl1" cellpadding="5">
    	<tr>
            <th width="5%" height="40px">#</th>
            <th width="25%">Product Name</th>
            <th width="15%">Category</th>
            <th width="15%">Company</th>
            <th width="15%">Price</th>
            <th width="10%">Qty</th>
            <th width="10%">Total Price</th>
            <th width="5%">#</th>
        </tr>
            <?php
                $cnt=1; 
                $ntp=0;
                include 'connect.php';
                $qry="SELECT * FROM cart ORDER BY cat_name";
                $rs=mysqli_query($conn,$qry);
                while ($row=mysqli_fetch_assoc($rs)) {
                    $cat=$row['cat_name'];
                    $com=$row['com_name'];
                    $pn=$row['p_name'];
                    $price=$row['price'];
                    $qty=$row['qty'];
                    $tp=$row['total_price'];
                    echo "<tr>";
                    echo '<form method="post">';
                    echo "<td><input type='hidden' name='cnt' value='$cnt'>".$cnt."</td>";
                    echo "<td><input type='hidden' name='pn' value='$pn'>".$pn."</td>";
                    echo "<td>".$cat."</td>";
                    echo "<td>".$com."</td>";
                    echo "<td>".$price."/-</td>";
                    echo "<td>".$qty."</td>";
                    echo '<td><b>'.$tp.'</b></td>';
                    echo '<td><input type="submit" name="remove" value="Remove"></td>';
                    echo '</form>';
                    echo "</tr>";
                    $cnt++;
                    $ntp=$ntp+$tp;
                    $_SESSION['ntp']=$ntp;
                }
            ?>
            <tr>
                <td height="40px" colspan="6" align="right" style="color: green;"><b>Total Bill : </b></td>
                <td colspan="2" width="15%" style="color: green;"><b><?php echo $ntp; ?></b></td>
            </tr>
    </table>
</div>
<?php 
    }
?>
</div>

<?php include "footer.php" ?>