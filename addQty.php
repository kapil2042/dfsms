<?php include "header.php" ?>

<?php
    include 'connect.php';
    if ($_POST) {
        $qty1=$_POST['qty1'];
        $qty2=$_POST['qty2'];
        $qty=$qty1 + $qty2;
        $id=$_GET['id'];
        $qry="UPDATE product_details SET qty = '$qty' WHERE Id = $id";
        $rs=mysqli_query($conn,$qry);
        if ($rs) {
            echo '<script type="text/javascript">';
            echo 'if((alert("Quantity Added"))!=0){
                window.location.href = "products.php";
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
                    <td><b>Total Available Qty:</b></td>
                    <td><input type="text" name="qty1" id="text" value="<?php echo $_GET['qty'] ?>" placeholder="Product Name" readonly></td>
                </tr>
                <tr>
                    <td><b>Add Qty:</b></td>
                    <td><input type="text" name="qty2" id="text" placeholder="Add Qty" required></td>
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
                    <a href="products.php"><b>BACK</b></a>
                </td>
            </tr>
        </table>
    </div>
</div>

<?php include "footer.php" ?>