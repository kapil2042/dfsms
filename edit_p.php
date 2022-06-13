<?php include "header.php" ?>

<?php
    include 'connect.php';
    if ($_POST) {
        $cat=$_POST['cat'];
        $com=$_POST['com'];
        $pn=$_POST['pn'];
        $price=$_POST['price'];
        $id=$_GET['id'];
        $pd=date("M-d-Y H:i:s",time());
        $qry="UPDATE product_details SET cat_name = '$cat' , com_name = '$com' , p_name = '$pn' , price = '$price' WHERE Id = $id";
        $rs=mysqli_query($conn,$qry);
        if ($rs) {
            echo '<script type="text/javascript">';
            echo 'if((alert("Record Updated"))!=0){
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
                        <td width="50%"><b>Category:</b></td>
                        <td width="50%"><select id="Stext" name="cat"><option>-------Select-------</option>
                            <?php
                                include  'connect.php';
                                $qry="SELECT * FROM category_details";
                                $rs=mysqli_query($conn,$qry);
                                while ($row=mysqli_fetch_assoc($rs)) {     
                                    if ($_GET['cat_name']==$row['C_name']) {
                                        echo "<option selected='true'>".$row['C_name']."</option>";
                                    }
                                    else{                 
                                        echo "<option>".$row['C_name']."</option>";
                                    }
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
                                    if ($_GET['com_name']==$row['com_name']) {
                                        echo "<option selected='true'>".$row['com_name']."</option>"; 
                                    }  
                                    else{                                  
                                        echo "<option>".$row['com_name']."</option>";
                                    }
                                }
                            ?>
                        </select></td>
                    </tr>
                    <tr>
                        <td><b>Product Name:</b></td>
                        <td><input type="text" name="pn" id="text" value="<?php echo $_GET['pn'] ?>" placeholder="Product Name" required></td>
                    </tr>
                    <tr>
                        <td><b>Price:</b></td>
                        <td><input type="text" name="price" id="text" value="<?php echo $_GET['price'] ?>" placeholder="Price" required></td>
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